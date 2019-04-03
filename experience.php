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
                        $query = "SELECT * FROM experience where expid='".$id."'";
                        $result = mysqli_query($con,$query) or die ( mysqli_error($con));
                        $row = mysqli_fetch_assoc($result);

                        $status = "";
                        if(isset($_POST['new']) && $_POST['new']==1)
                        {
                       
                        
                        $exp_title = $_REQUEST['exp_title'];
                        $exp_description = $_REQUEST['exp_description'];
                        $exp_time = $_REQUEST['exp_time'];
                        $update="UPDATE experience SET exp_title='".$exp_title."' , exp_description='".$exp_description."' , exp_time='".$exp_time."'
                        WHERE expid='".$id."'";
                        mysqli_query($con, $update) or die ( mysqli_error($con));
                        $status = "Record Updated Successfully. </br></br>
                        <a href='dashboard.php'>View Updated Record</a>";
                        echo '<p style="color:#FF0000;">'.$status.'</p>';
                        }else {
                        ?>
        
                    <form action="" method="POST" role="form"> 
                   
                        <input type="hidden" name="new" value="1" />
                        <input name="expid" type="hidden" value="<?php echo $row['expid'];?>" />
                        <div class="form-group"> 
                            <label for="-exp_title">exp_title</label>                             

                            <input type="text" class="form-control" name="exp_title" placeholder="Enter exp_title" value="<?php echo $row['exp_title']; ?>" /> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="exp_description">exp_description</label>                             

                            <input type="text" class="form-control" name="exp_description" rows="3" placeholder="Enter exp_description" value="<?php echo $row['exp_description']; ?>" />
                        
                        </div>                         
                        
                        <div class="form-group"> 
                            <label for="exp_title">exp_time</label>                             

                            <input type="text" class="form-control" name="exp_time" placeholder="Enter exp_time" value="<?php echo $row['exp_time']; ?>" /> 
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