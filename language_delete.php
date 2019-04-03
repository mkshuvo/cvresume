<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM lang_skill WHERE langid=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dashboard.php"); 
?>