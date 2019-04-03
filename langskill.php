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
                <h3>language Information Form</h3>
    <?php
    require('auth.php');
    require('db.php');
    $id=$_REQUEST['id'];
    $query = "SELECT * FROM lang_skill where langid='".$id."'";
    $result = mysqli_query($con,$query) or die ( mysqli_error($con));
    $row = mysqli_fetch_assoc($result);

    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
    
    
        $langname = str_replace("'", "\'", $_REQUEST['langname']);
        $langlevel = str_replace("'", "\'", $_REQUEST['langlevel']);
        $update="UPDATE lang_skill SET  langname='".$langname."' , langlevel='".$langlevel."' WHERE langid='".$id."'";
        mysqli_query($con, $update) or die ( mysqli_error($con));
        $status = "Record Updated Successfully. </br></br>
        <a href='dashboard.php'>View Updated Record</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
        }else {
        ?>
        
                    <form action="" method="POST" role="form"> 
                   
                        <input type="hidden" name="new" value="1" />
                        <input name="lang_id" type="hidden" value="<?php echo $row['lang_id'];?>" />
                        <div class="form-group"> 
                            <label for="langname">langname</label>                             

                            <input type="text" class="form-control" name="langname" placeholder="Enter langname" value="<?php echo $row['langname']; ?>" /> 
                        </div>                         
                        <div class="form-group"> 
                            <p>Value must me (1-10)</p>
                            <label for="langlevel">langlevel</label>                             

                            <input type="text" class="form-control" name="langlevel" placeholder="Enter langlevel" value="<?php echo $row['langlevel']; ?>" /> 
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