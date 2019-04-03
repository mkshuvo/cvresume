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
        <div class="form"> 
            <p>Welcome <?php echo $_SESSION['username']; ?>!</p> 
            <p>This is secure area.</p> 
            <p><a href="dashboard.php">Dashboard</a></p> 
            <a href="logout.php">Logout</a> 
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
                        <td align="center"><a href="aboutme.php?id=<?php echo $aboutrow["id"] ?>">Edit or delete</a></td>
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
                        <td align="center"><a href="skillset.php?id=<?php echo $skillrow["id"] ?>">Edit or delete</a></td>
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