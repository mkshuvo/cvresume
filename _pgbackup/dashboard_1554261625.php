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
                <div class="col-md-4 col-lg-3"> 
</div>
                <div class="col-md-4 col-lg-6"> 
                    <a href="#" class="btn btn-success">Experience</a>
                </div>
            </div>
        </div>
    </body>     
</html>