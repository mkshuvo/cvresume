<?php 
if($_SESSION['username'] !==""){
    header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blank Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        require('db.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
                // removes backslashes
            $username = stripslashes($_REQUEST['username']);
                //escapes special characters in a string
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            //Checking is user existing in the database or not
                $query = "SELECT * FROM `users` WHERE username='$username'
        and password='$password'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
                if($rows==1){
                $_SESSION['username'] = $username;
                    // Redirect user to index.php
                header("Location: dashboard.php");
                }else{
            echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
            }
            }else{
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3"> 
</div>
                <div class="col-md-4 col-lg-6">
                    <br/>
                    <br/>
                    <br/>
                    <h1>
            Login To Your Account </h1>
                    <form name="login" action="" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email username</label>
                            <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username"/>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password"/>
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1"/>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
<?php } ?>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
