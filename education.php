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
                <h3>Education Information Form</h3>
    <?php
    require('auth.php');
    require('db.php');
    $id=$_REQUEST['id'];
    $query = "SELECT * FROM education where eduid='".$id."'";
    $result = mysqli_query($con,$query) or die ( mysqli_error($con));
    $row = mysqli_fetch_assoc($result);

    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
    
    
        $edu_title = str_replace("'", "\'", $_REQUEST['edu_title']);
        $edu_description = str_replace("'", "\'", $_REQUEST['edu_description']);
        $edu_date = $_REQUEST['edu_date'];
        $update="UPDATE education SET edu_title='".$edu_title."' , edu_description='".$edu_description."' , edu_date='".$edu_date."'
        WHERE eduid='".$id."'";
        mysqli_query($con, $update) or die ( mysqli_error($con));
        $status = "Record Updated Successfully. </br></br>
        <a href='dashboard.php'>View Updated Record</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
        }else {
        ?>
        
                    <form action="" method="POST" role="form"> 
                   
                        <input type="hidden" name="new" value="1" />
                        <input name="eduid" type="hidden" value="<?php echo $row['eduid'];?>" />
                        <div class="form-group"> 
                            <label for="exp_title">edu_title</label>                             

                            <input type="text" class="form-control" name="edu_title" placeholder="Enter edu_title" value="<?php echo $row['edu_title']; ?>" /> 
                        </div>                         

                        <div class="form-group"> 
                            <label for="edu_description">edu_description</label>                             

                            <input type="text" class="form-control" name="edu_description" rows="3" placeholder="Enter edu_description" value="<?php echo $row['edu_description']; ?>" />
                        
                        </div>                         
                        
                        <div class="form-group"> 
                            <label for="edu_date">edu_date</label>                             

                            <input type="text" class="form-control" name="edu_date" placeholder="Enter edu_date" value="<?php echo $row['edu_date']; ?>" /> 
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