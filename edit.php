<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from info where id='".$id."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">


<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$country = $_REQUEST["country"];
$address =$_REQUEST['address'];
$role =$_REQUEST['role'];
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

$update="update info set 
name='".$name."', 
email='".$email."',

country='".$country."',
address='".$address."',
role='".$role."',

username='".$username."',
password='".$password."'
where id='".$id."'";
mysqli_query($db, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='dash.php'> Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>


<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
<div class="row">
	<div class="col-md-3">
	
</div>
	<div class="col-md-5">
	

<h4>Update Record</h4>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input  name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input class="form-control"  type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>

<p><input class="form-control" type="email" name="email" placeholder="Enter email" 
required value="<?php echo $row['email'];?>" /></p>
<select class="form-group" name="country" style="width: 100%;padding: 10px 20px;border: 1px solid #dedede;margin-bottom: 20px;outline: none;transition: all 0.2s ease-in-out;-moz-transition: all 0.2s ease-in-out;-webkit-transition: all 0.2s ease-in-out;-o-transition: all 0.2s ease-in-out;color: #5a5a5a;font-size: 13px;font-family: 'Montserrat', sans-serif;" value="<?php echo $row['country'];?>" required="">
        <option value="">Please Select </option>
     


<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>







      </select>
<p><input class="form-control" type="text" name="address" placeholder="Enter address" 
required value="<?php echo $row['address'];?>" /></p>

<p><input class="form-control" type="text" name="role" placeholder="Enter role" 
required value="<?php echo $row['role'];?>" /></p>

<p><input class="form-control" type="text" name="username" placeholder="Enter username" 
required value="<?php echo $row['username'];?>" /></p>




<p><input class="form-control" type="password" name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" /></p>
<p><input name="submit" type="submit" class="btn btn-primary" value="Update" /></p>
</form>
<?php } ?>
</div></div>
</div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>





