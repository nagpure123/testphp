<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM info WHERE id=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: dash.php"); 
?>