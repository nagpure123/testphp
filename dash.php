<?php
error_reporting(0);
session_start();
// Include database dbnection file
include_once('db.php');

?>
<style type="text/css">
    .nav-link{
   color: #f9f6f6;
   font-size: 12px;
    } 
    table,td,th{
        font-size: 12px;
    }  
</style>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" dbtent="width=device-width, initial-scale=1">
        <title>Multi user role based application login in php mysqli</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
       <body></head>

       <nav class="navbar navbar-info sticky-top bg-info flex-md-nowrap p-10">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="" style="color: #fff;"><b>Welcome Admin</b></a>
               <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
                 <a class="nav-link" href="logout.php">Hi, <?php echo ucwords($name1); ?> Log out</a>



         </li>
          </ul>
           <br><br><head><a href="ind1.php" class="btn btn-danger" style="background-color:orange;padding: 8px;color: #fff;">back</a>
      </nav>      
      <div class="dbtainer-fluid">
          <div class="row">
         <nav class="col-md-2 d-none d-md-block bg-info sidebar" style="height: 569px">
                 <div class="sidebar-sticky">
                 <ul class="nav flex-column" style="color: #5b5757;">
                <li class="nav-item">
               <a class="nav-link active" href="">
               <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
               </a>
                </li>
            <?php if($_SESSION['ROLE'] == 'admin'){ ?>
            <h6>Sale & Purchase</h6>   
                <li class="nav-item">
               <a class="nav-link" href="">
                       <span data-feather="users"></span>
                   Payment
               </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="">
                   <span data-feather="users"></span>
                   Sales
               </a>
                </li>
                <li class="nav-item">
               <a class="nav-link" href="">
                       <span data-feather="users"></span>
                   Purchases
               </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['ROLE'] == 'admin' || $_SESSION['ROLE'] == 'sub admin' || $_SESSION['ROLE'] == 'agent') { ?>
            <h6>Catalog</h6>      
                <li class="nav-item">
               <a class="nav-link" href="">
                   <span data-feather="users"></span>
                   Products
               </a>
                </li>
                <li class="nav-item">
               <a class="nav-link" href="">
                       <span data-feather="users"></span>
                   Category
               </a>
                </li>   
                <h6>Order & Shipping</h6>
               <li class="nav-item">
                       <a class="nav-link" href="">
                       <span data-feather="users"></span>
                  Shipping
                   </a>
               </li>
               
               <li class="nav-item">
                   <a class="nav-link" href="">
                       <span data-feather="users"></span>
                  Customers
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="">
                  <span data-feather="users"></span>
                  Order
                   </a>
               </li>
            <?php } ?>                  
             </ul>
         </div>
          </nav>
      <main role="main" class="col-md-10">
      <div class="d-flex justify-dbtent-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
          <h1 class="h2">Dashboard</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
           
             <tr>
            <th>Id</th>
            <th>Name</th>
            <th>email</th>
            <th>country</th>
            <th>address</th>
            <th>role</th>
            <th>username</th>
            <th>password</th>
            <th>Edit</th>
            <th>Delete</th>
           <!--  <th>Created</th> -->
         </tr>
          </thead>
          <tbody>
         <?php
                 
           
            $query = "SELECT * FROM info ";
             

                 $result = $db->query($query);
            if ($result->num_rows > 0) {

                   while ($row = $result->fetch_array()) {
             ?>      
             <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['country']?></td>
              <td><?php echo $row['address']?></td>
            <td><?php echo $row['role']?></td>
            <td><?php echo $row['username']?></td>
 <td><?php echo $row['password']?></td>
            <td align="center">
          <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
             </tr>
              <?php   }
         }else{
             echo "<h2>No record found!</h2>";
         } ?>                           
         </tbody>
          </table>
      </div>
       </main>
   </div>
    </div>      
<script src="https://unpkg.com/feather-idbs/dist/feather.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    feather.replace();
</script>         
</body>
</html>