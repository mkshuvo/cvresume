<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM skills WHERE skill_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dashboard.php"); 
?>