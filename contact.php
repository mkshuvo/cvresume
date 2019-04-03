<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <title>Experience</title>         
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>     
    <body> 
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6 ">
                <h3>Experience Information Form</h3>
    <?php
    require('auth.php');
    require('db.php');
    $id=$_REQUEST['id'];
    $query = "SELECT * FROM contact where contactid='".$id."'";
    $result = mysqli_query($con,$query) or die ( mysqli_error($con));
    $row = mysqli_fetch_assoc($result);

    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
    
    
        $location = str_replace("'", "\'", $_REQUEST['location']);
        $contactemail = str_replace("'", "\'", $_REQUEST['contactemail']);
        $phonenumber = $_REQUEST['phonenumber'];
        $update="UPDATE contact SET location='".$location."' , contactemail='".$contactemail."' , phonenumber='".$phonenumber."'
        WHERE contactid='".$id."'";
    mysqli_query($con, $update) or die ( mysqli_error($con));
    $status = "Record Updated Successfully. </br></br>
    <a href='dashboard.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
        
                    <form action="" method="POST" role="form"> 
                   
                        <input type="hidden" name="new" value="1" />
                        <input name="contactid" type="hidden" value="<?php echo $row['contactid'];?>" />
                        <div class="form-group"> 
                            <label for="location">location</label>                             

                            <input type="text" class="form-control" name="location" placeholder="Enter location" value="<?php echo $row['location']; ?>" /> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="contactemail">contactemail</label>                             

                            <input type="text" class="form-control" name="contactemail" rows="3" placeholder="Enter contactemail" value="<?php echo $row['contactemail']; ?>" />
                        
                        </div>                         
                        
                        <div class="form-group"> 
                            <label for="phonenumber">phonenumber</label>                             

                            <input type="text" class="form-control" name="phonenumber" placeholder="Enter phonenumber" value="<?php echo $row['phonenumber']; ?>" /> 
                        </div> 
                        <button type="submit" class="btn btn-primary">Submit</button>                         
                    </form>                                          
                    <?php } ?>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/popper.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>     
</html>