<?php
	include('db.php');
	$id=$_GET['id'];
 
	


	mysqli_query($db,"update 'info' set  name='$name', email='$email',
	 country='$country', address='$address', role='$role', username='$username', password='$password' where id='$id'");
	header('location:dash.php');
?>