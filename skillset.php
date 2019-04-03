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
    $query = "SELECT * FROM skills where skillid='".$id."'";
    $result = mysqli_query($con,$query) or die ( mysqli_error($con));
    $row = mysqli_fetch_assoc($result);

    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
    
    
        $iconfilename = str_replace("'", "\'", $_REQUEST['iconfilename']);
        $skillname = str_replace("'", "\'", $_REQUEST['skillname']);
        $skilllevel = $_REQUEST['skilllevel'];
        $update="UPDATE skills SET iconfilename='".$iconfilename."' , skillname='".$skillname."' , skilllevel='".$skilllevel."'
        WHERE skillid='".$id."'";
    mysqli_query($con, $update) or die ( mysqli_error($con));
    $status = "Record Updated Successfully. </br></br>
    <a href='dashboard.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
        
                    <form action="" method="POST" role="form"> 
                   
                        <input type="hidden" name="new" value="1" />
                        <input name="skillid" type="hidden" value="<?php echo $row['skillid'];?>" />
                        <div class="form-group"> 
                            <label for="iconfilename">iconfilename</label>                             

                            <input type="text" class="form-control" name="iconfilename" placeholder="Enter iconfilename" value="<?php echo $row['iconfilename']; ?>" /> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="skillname">skillname</label>                             

                            <input type="text" class="form-control" name="skillname" rows="3" placeholder="Enter skillname" value="<?php echo $row['skillname']; ?>" />
                        
                        </div>                         
                        
                        <div class="form-group"> 
                            <label for="skilllevel">skilllevel</label>                             

                            <input type="text" class="form-control" name="skilllevel" placeholder="Enter skilllevel" value="<?php echo $row['skilllevel']; ?>" /> 
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