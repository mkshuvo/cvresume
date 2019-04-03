<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="script.js"></script>
</head>
<body>
<?php
//include auth.php file on all secure pages
require('db.php');

?>
    <div class="loginsection">
        <a href="login.php">login to make changes</a>
    </div>
    <div class="resume-body">
        <!-- left side section -->
        <div class="left-side">
            <!-- profile picture with name -->
            <div class="pic-with-name">
                <div class="profile-pic">
                    <img src="images/profilepic.png" class="dp-img" width="60%" alt="" />
                </div>
                <div class="profile-title">
                    <h3 class="person-name">SHOHAGH HOSSEN</h3>
                    <h3 class="person-title">Graphic Designer</h3>
                </div>
            </div>

            <?php
            // $query1 = "SELECT exp_title, exp_description, exp_time FROM `experience` WHERE expid='1'";
            // $exp_1 = mysqli_query($con,$query1) or die(mysql_error());
            $aboutquery = "SELECT * FROM `aboutme` ORDER BY about_id";
            $about_result = mysqli_query($con,$aboutquery) or die(mysql_error());
            
            ?>
            <!-- about section -->
            <div class="about-title-line">
                <div class="about-me-description">
                    <span class="user-icon"><i class="fas fa-user-tie" style="color: #fff;"></i></span><h3 style="padding-left:40px;" class="about-title">About Me</h3>
                    <p class="about-des">
                    <?php while($aboutrow = mysqli_fetch_assoc($about_result)) { 
                        echo $aboutrow["aboutdescription"];
                    }
                    ?>
                    </p>
                </div>
            </div>

            <!-- skills section -->
            <div class="skill-section">
                <div class="skill-title">
                    <img src="images/skill-icon.png" class="skill-icon-main" alt=""> <h3 class="skill-title">My Skill</h3>
                </div>
                <?php
                $skillsquery = "SELECT * FROM `skills` ORDER BY skillid";
                $skill_result = mysqli_query($con,$skillsquery) or die(mysql_error());
                ?>
                <div class="skill-bars">
                <?php while($skillrow = mysqli_fetch_assoc($skill_result)) { ?>
                    <div class="skill-item">
                        <img src="images/<?php echo $skillrow["iconfilename"]; ?>" class="skill-icon" style="display: inline-block; padding-left: 45px;margin-top: 30px;" alt="photoshop" />&nbsp; &nbsp; &nbsp; <h4 class="skill-item-title" style="display: inline-block; font-size: 20px; "><?php echo $skillrow["skillname"]; ?></h4>
                        <div class="skill-progress">
                            <div class="full-bar"></div>
                            <div class="progressbar" style="width: <?php echo $skillrow["skilllevel"];?>px !important"></div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="space" style="margin-top: 15px;"></div>
            <!-- contact section -->
            <?php
                $contactquery = "SELECT * FROM `contact` ORDER BY contactid";
                $contactresult = mysqli_query($con,$contactquery) or die(mysql_error());
            ?>
            <div class="contact-section">
                <div class="contact-title">
                    <img src="images/person-icon.png" class="person-icon" style="width:10%; display: inline-block" alt="" /><h3 style="display: inline-block">Contact Me</h3>
                </div>
                <?php while($contactrow = mysqli_fetch_assoc($contactresult)) { ?>
                <div class="contact-info">
                    <img src="images/marker-icon.png" class="marker-icon" style="width:10%; display: inline-block" alt="" /><h3 style="display: inline-block; font-family: 'Roboto', sans-serif; font-weight: 200; font-size: 14px;padding-left: 10px;"><?php echo $contactrow["location"]; ?></h3>  
                </div>
                <br/>
                <div class="contact-info">
                    <img src="images/globe-icon.png" class="globe-icon" style="width:10%; display: inline-block" alt="" /><h3 style="display: inline-block; font-family: 'Roboto', sans-serif; font-weight: 200; font-size: 14px;padding-left: 10px;"><?php echo $contactrow["contactemail"]; ?></h3> 
                </div>
                <br/>
                <div class="contact-info">
                    <img src="images/phone-icon.png" class="phone-icon" style="width:10%; display: inline-block" alt="" /><h3 style="display: inline-block; font-family: 'Roboto', sans-serif; font-weight: 200; font-size: 14px;padding-left: 10px;"><?php echo $contactrow["phonenumber"]; ?></h3> 
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- right side section  -->
        <div class="verticalbar">
            <div class="greenline"></div>
            <img src="images/case-icon.png" class="case-icon" alt="" />
            <img src="images/edu-icon.png" class="edu-icon" alt="" />
            <img src="images/lang-icon.png" class="lang-icon" alt="" />
        </div>


        <!-- experience data fetch from database -->
        <?php
            // $query1 = "SELECT exp_title, exp_description, exp_time FROM `experience` WHERE expid='1'";
            // $exp_1 = mysqli_query($con,$query1) or die(mysql_error());
            $query = "SELECT * FROM `experience` ORDER BY expid";
            $exp = mysqli_query($con,$query) or die(mysql_error());
            
        ?>
        <div class="right-side">
            <div class="expreience">
                <h3 class="exp-title">EXPREIENCE</h3> <img src="/images/hor-line.png" alt="" class="hor-line"/>
                <?php while($row = mysqli_fetch_assoc($exp)) { ?>
                <div class="exp-content">
                    <h4 class="career-title">
                    <?php 
                        echo $row["exp_title"];
                    ?>
                    </h4><span class="date" style="text-align: right; display: inline-block"><?php echo $row["exp_time"]; ?></span>
                    <br/>
                    <p class="exp-des">
                        <?php echo $row["exp_description"]; ?>
                    </p>
                </div>
                <?php } ?>
            </div>
        <!-- experience fetching ends here -->

        <!-- education fetching ends here -->
        <?php
            // $query1 = "SELECT exp_title, exp_description, exp_time FROM `experience` WHERE expid='1'";
            // $exp_1 = mysqli_query($con,$query1) or die(mysql_error());
            $eduquery = "SELECT * FROM `education` ORDER BY eduid";
            $edu = mysqli_query($con,$eduquery) or die(mysql_error());
            
        ?>
            <div class="education">
                <h3 class="edu-title">EDUCATION</h3> <img src="/images/hor-line.png" alt="" class="hor-line"/>
                <?php while($edurow = mysqli_fetch_assoc($edu)) { ?>
                <div class="edu-content">
                    <h4 class="degree-title"><?php echo $edurow["edu_title"] ?></h4><span class="date" style="text-align: right; display: inline-block"><?php echo $edurow["edu_date"]; ?></span>
                    <br/>
                    <p class="edu-des">
                    <?php echo $edurow["edu_description"]; ?>
                    </p>
                </div>
                <?php } ?>

            </div>


            <!-- education fetching starts here -->
            <div class="language">
                <div class="lang-title">
                    <h3 class="lang-title">LANGUAGE</h3><img src="/images/hor-line.png" alt="" class="hor-line"/>
                    <div class="lang-set">
                        <h4 class="lang-name">English</h4><br/>
                        <h4 class="lang-name">HINDI</h4><br/>
                        <h4 class="lang-name">BANGLA</h4><br/>
                        <h4 class="lang-name">GERMAN</h4><br/>
                    </div>
                    <div class="level-set">
                    <?php
                        // $query1 = "SELECT exp_title, exp_description, exp_time FROM `experience` WHERE expid='1'";
                        // $exp_1 = mysqli_query($con,$query1) or die(mysql_error());
                        $langquery = "SELECT * FROM `lang_skill` ORDER BY langid";
                        $lang = mysqli_query($con,$langquery) or die(mysql_error());
                    ?>
                    <?php while($langrow = mysqli_fetch_assoc($lang)) { ?>
                        <?php for($i=1; $i <= $langrow["langlevel"]; $i++){ ?>
                            <li class="circle-lvl set-one"></li>
                        <?php } echo '<br />'; //for loop ends here?>
                        <?php }?>
                        
                        <!-- <li class="circle-lvl set-two"></li> -->
                        <br/>
                        
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
</body>
</html>