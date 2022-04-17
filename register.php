
<?php  include('db.php');
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['register'])) {

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];  
    $folder = "image/".$filename;
    
  $db = mysqli_connect("localhost", "root", "", "test");

    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    // Execute query
    mysqli_query($db, $sql);
    
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
  }








  $name = $_POST['name'];
   $email = $_POST['email'];
  $country = $_POST['country'];
    $address = $_POST['address'];
    $filename  = $_POST['filename'];
   
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
        $db = mysqli_connect("localhost", "root", "", "test");
     $query = "INSERT INTO info (name,email,country,address,role,username,password)
          VALUES ('$name','$email','$country','$address','$role','$username','$password')";
    $result=  mysqli_query($db, $query);
        if($result)  {
          echo "sav";
        }  











}
$result = mysqli_query($db, "SELECT * FROM image");
while($data = mysqli_fetch_array($result))
{

  ?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>





<!-- 
<?php   
include('db.php');
error_reporting(0);

if(isset($_POST['register']))
{


  $name = $_POST['name'];
   $email = $_POST['email'];
  $country = $_POST['country'];
    $address = $_POST['address'];
    $filename  = $_POST['filename'];
   
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
        $db = mysqli_connect("localhost", "root", "", "test");
     $query = "INSERT INTO info (name,email,country,address,role,username,password)
          VALUES ('$name','$email','$country','$address','$role','$username','$password')";
    $result=  mysqli_query($db, $query);
        if($result)  {
      
          header("Location:ind1.php");
        }  

}

 ?>
 -->

















<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script> -->


<style>
@media only screen and (max-width: 767px) {
}

</style>

</head>
<body>
	 		
	<div class="container">
 <div class="row mt-5 mb-5" >
    <div class="col-md-1">  
      
         </div>
<br>
    <div class="col-md-2">  
      <h4>   <a href="ind1.php"> Login here</a> </h4>
         </div>


         <div class="col-md-6">  <h4>Register here</h4>
</div>
 </div>
  <div class="row mt-5 mb-5" >
    <div class="col-md-3">
     
    </div>
    <div class="col-md-6" style="padding: 36px;
    background: aliceblue;">
         <form action="register.php" method="post" enctype="multipart/form-data">


 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name </label>
    <input type="text" name="name" class="form-control"  pattern="[a-zA-Z][a-zA-Z ]{2,}" autocomplete="off" required>
    
  </div>
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email </label>
    <input type="email" name="email" class="form-control" onsubmit="checkEmail();">
   
  </div>

 <div class="mb-3">
   
 
        
        <div class="col-md-12" style="text-align:left;font-weight: 550;">
          <label>Country <span style="color: red;">*</span></label>
          <select class="form-group" name="country" style="width: 100%;padding: 10px 20px;border: 1px solid #dedede;margin-bottom: 20px;outline: none;transition: all 0.2s ease-in-out;-moz-transition: all 0.2s ease-in-out;-webkit-transition: all 0.2s ease-in-out;-o-transition: all 0.2s ease-in-out;color: #5a5a5a;font-size: 13px;font-family: 'Montserrat', sans-serif;" required="">
        <option value="">Please Select </option>
     


<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>







      </select>
      
   
  </div>


   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Select photo</label>
    <input type="file" name="uploadfile" value=""/>
 
  </div>





     <div class="col-md-12" style="text-align:left;font-weight: 550;">
          <label>Role <span style="color: red;">*</span></label>
          <select class="form-group" name="role" style="width: 100%;padding: 10px 20px;border: 1px solid #dedede;margin-bottom: 20px;outline: none;transition: all 0.2s ease-in-out;-moz-transition: all 0.2s ease-in-out;-webkit-transition: all 0.2s ease-in-out;-o-transition: all 0.2s ease-in-out;color: #5a5a5a;font-size: 13px;font-family: 'Montserrat', sans-serif;" required="">
        <option value="">Select Role </option>
     


<option value="admin">Admin</option>
<option value="subadmin">Sub Admin</option>
<option value="agent">agent</option>
 
                            


      </select>







 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username </label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
 <div class="mb-3">
    <label  for="psw" class="form-label">Password </label>
    <input   type="password"  name="password" class="form-control" id="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   
  </div>

    <!--   <div id="message">

        <h3>Password must contain the following:</h3>

        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>

        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>

        <p id="number" class="invalid">A <b>number</b></p>

        <p id="length" class="invalid">Minimum <b>16 characters</b></p>

      </div>
 -->


  <button type="submit" name="register" value="submit" class="btn btn-primary">Register</button>
</form>

    </div>
   
  </div>
</div>		

<script language="javascript">

function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}</script>


<script>
  

  var myInput = document.getElementById(“psw”);

var letter = document.getElementById(“letter”);

var capital = document.getElementById(“capital”);

var number = document.getElementById(“number”);

var length = document.getElementById(“length”)

myInput.onfocus = function() {

  document.getElementById(“message”).style.display = “block”;

}

myInput.onblur = function() {

  document.getElementById(“message”).style.display = “none”;

}

myInput.onkeyup = function() {

    var lowerCaseLetters = /[a-z]/g;

  if(myInput.value.match(lowerCaseLetters)) {

    letter.classList.remove(“invalid”);

    letter.classList.add(“valid”);

  } else {

    letter.classList.remove(“valid”);

    letter.classList.add(“invalid”);

}

var upperCaseLetters = /[A-Z]/g;

  if(myInput.value.match(upperCaseLetters)) {

    capital.classList.remove(“invalid”);

    capital.classList.add(“valid”);

  } else {

    capital.classList.remove(“valid”);

    capital.classList.add(“invalid”);

  }

  var numbers = /[0-9]/g;

  if(myInput.value.match(numbers)) {

    number.classList.remove(“invalid”);

    number.classList.add(“valid”);

  } else {

    number.classList.remove(“valid”);

    number.classList.add(“invalid”);

  }

  if(myInput.value.length >= 8) {

    length.classList.remove(“invalid”);

    length.classList.add(“valid”);

  } else {

    length.classList.remove(“valid”);

    length.classList.add(“invalid”);

  }

}
</script>



</body>
</html>