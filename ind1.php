<?php
  session_start();
  // if (isset($_SESSION['ID'])) {
  //     header("Location:dash.php");
  //     exit();
  // }
  // Include database dbnectivity
    
  include_once('db.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $db->real_escape_string($_POST['username']);
      $password = $db->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM info WHERE username = '$username'";
        $result = $db->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $role = $row['role'];
           $name = $row['name']; 

      if ($role =='admin')
    {

   // Initializing Session
   header("location: dash.php"); // Redirecting To Other Page
    }

   elseif ($role == 'subadmin')
   {
   header("location: subadmin.php");
   }
   elseif($role == 'agent')
  {
  header("location: agent.php");
  }
 else
 {

 $error = "Username or Password is invalid";
 }


















            // header("Location:dash.php");
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multi user role based application login in php mysqli</title>
  <meta charset="utf-8">
  <meta name="viewport" dbtent="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="card text-center" style="padding:20px;">
  <h3>Multi user role based application login in php mysqli</h3>
</div><br>
<div class="dbtainer">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
        <form action="" method="POST">
          <div class="form-group">  
            <label for="username">Username:</label> 
            <input type="text" class="form-dbtrol" name="username" placeholder="Enter Username" >
          </div>
          <div class="form-group">  
            <label for="password">Password:</label> 
            <input type="password" class="form-dbtrol" name="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <p>Not registered yet ?<a href="register.php"> Register here</a></p>
            <input type="submit" name="submit" class="btn btn-success" value="Login"> 
          </div>
        </form>
      </div>
  </div>
</div>
</body>
</html>