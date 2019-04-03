<?php
//include auth.php file on all secure pages
require('db.php');
include("auth.php");
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Welcome Home</title>         
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template -->         
        <link href="style.css" rel="stylesheet"> 
    </head>     
    <body> 
        <div class="container form"> 
            <p>Welcome <?php echo $_SESSION['username']; ?>! to <a href="dashboard.php">Dashboard</a> <a href="logout.php">Logout</a> </p> 
            <p>This is secure area.To logout <a href="logout.php">Click here</a></p>
            <p>Or you can check the <a href="index.php">index page</a> 
            
        </div>         
        <div class="container">

            <div class="row">
               <h2>About Me</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>about_id</th>
                        <th>id</th>
                        <th>username</th>
                        <th>aboutdescription</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $aboutquery="Select * from aboutme ORDER BY about_id;";
                    $aboutresult = mysqli_query($con,$aboutquery);
                    while($aboutrow = mysqli_fetch_assoc($aboutresult)) { ?>
                    <tr>
                        <td><?php echo $aboutrow["about_id"] ?></td>
                        <td><?php echo $aboutrow["id"] ?></td>
                        <td><?php echo $aboutrow["username"] ?></td>
                        <td><?php echo $aboutrow["aboutdescription"] ?></td>
                        <td align="center"><a href="aboutme.php?id=<?php echo $aboutrow["about_id"] ?>">Edit</a> or <a href="aboutme_delete.php?id=<?php echo $aboutrow["about_id"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
               <h2>Skill Set</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>skillID</th>
                        <th>id</th>
                        <th>username</th>
                        <th>iconfilename</th>
                        <th>skillsname</th>
                        <th>skilllevel</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $skillquery="Select * from skills ORDER BY skillid;";
                    $skillresult = mysqli_query($con,$skillquery);
                    while($skillrow = mysqli_fetch_assoc($skillresult)) { ?>
                    <tr>
                        <td><?php echo $skillrow["skillid"] ?></td>
                        <td><?php echo $skillrow["id"] ?></td>
                        <td><?php echo $skillrow["username"] ?></td>
                        <td><?php echo $skillrow["iconfilename"] ?></td>
                        <td><?php echo $skillrow["skillname"] ?></td>
                        <td><?php echo $skillrow["skilllevel"] ?></td>
                        <td align="center"><a href="skillset.php?id=<?php echo $skillrow["skillid"] ?>">Edit</a> or <a href="skill_delete.php?id=<?php echo $skillrow["skillid"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
               <h2>Contact Information</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>contactid</th>
                        <th>id</th>
                        <th>username</th>
                        <th>location</th>
                        <th>contactemail</th>
                        <th>phonenumber</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $exp_query="Select * from contact ORDER BY contactid;";
                    $expresult = mysqli_query($con,$exp_query);
                    while($contactrow = mysqli_fetch_assoc($expresult)) { ?>
                    <tr>
                        <td><?php echo $contactrow["contactid"] ?></td>
                        <td><?php echo $contactrow["id"] ?></td>
                        <td><?php echo $contactrow["username"] ?></td>
                        <td><?php echo $contactrow["location"] ?></td>
                        <td><?php echo $contactrow["contactemail"] ?></td>
                        <td><?php echo $contactrow["phonenumber"] ?></td>
                        <td align="center"><a href="contact.php?id=<?php echo $contactrow["contactid"] ?>">Edit</a> or <a href="contact_delete.php?id=<?php echo $contactrow["contactid"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>       
            <br>
            <br>
            <br>
            <div class="row">
               <h2>Experience</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>expid</th>
                        <th>id</th>
                        <th>username</th>
                        <th>exp_title</th>
                        <th>exp_description</th>
                        <th>exp_time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $exp_query="Select * from experience ORDER BY expid;";
                    $expresult = mysqli_query($con,$exp_query);
                    while($exprow = mysqli_fetch_assoc($expresult)) { ?>
                    <tr>
                        <td><?php echo $exprow["expid"] ?></td>
                        <td><?php echo $exprow["id"] ?></td>
                        <td><?php echo $exprow["username"] ?></td>
                        <td><?php echo $exprow["exp_title"] ?></td>
                        <td><?php echo $exprow["exp_description"] ?></td>
                        <td><?php echo $exprow["exp_time"] ?></td>
                        <td align="center"><a href="experience.php?id=<?php echo $exprow["expid"] ?>">Edit</a> or <a href="exp_delete.php?id=<?php echo $exprow["expid"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>  

            <br>
            <br>
            <br>
            <div class="row">
               <h2>Education</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>eduid</th>
                        <th>id</th>
                        <th>username</th>
                        <th>edu_title</th>
                        <th>edu_description</th>
                        <th>edu_date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $edu_query="Select * from education ORDER BY eduid;";
                    $eduresult = mysqli_query($con,$edu_query);
                    while($edurow = mysqli_fetch_assoc($eduresult)) { ?>
                    <tr>
                        <td><?php echo $edurow["eduid"] ?></td>
                        <td><?php echo $edurow["id"] ?></td>
                        <td><?php echo $edurow["username"] ?></td>
                        <td><?php echo $edurow["edu_title"] ?></td>
                        <td><?php echo $edurow["edu_description"] ?></td>
                        <td><?php echo $edurow["edu_date"] ?></td>
                        <td align="center"><a href="education.php?id=<?php echo $edurow["eduid"] ?>">Edit</a> or <a href="edu_delete.php?id=<?php echo $edurow["eduid"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div> 
            <br>
            <br>
            <br>
            <div class="row">
               <h2>Language Set</h2>
               <table class="table">
                    <thead>
                    <tr>
                        <th>langid</th>
                        <th>id</th>
                        <th>username</th>
                        <th>langname</th>
                        <th>langlevel</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php
    
                    $lang_query="Select * from lang_skill ORDER BY langid;";
                    $langresult = mysqli_query($con,$lang_query);
                    while($langrow = mysqli_fetch_assoc($langresult)) { ?>
                    <tr>
                        <td><?php echo $langrow["langid"] ?></td>
                        <td><?php echo $langrow["id"] ?></td>
                        <td><?php echo $langrow["username"] ?></td>
                        <td><?php echo $langrow["langname"] ?></td>
                        <td><?php echo $langrow["langlevel"] ?></td>
                        
                        <td align="center"><a href="langskill.php?id=<?php echo $langrow["langid"] ?>">Edit</a> or <a href="language_delete.php?id=<?php echo $langrow["langid"] ?>">delete</a></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>     
</html>