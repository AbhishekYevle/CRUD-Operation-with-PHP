<?php
  include 'connect.php';

  if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    if(isset($_POST['update'])){
      $name=$_POST['updateName'];
      $email=$_POST['updateEMail'];
      $mobile=$_POST['updateMobile'];
      $password=$_POST['updatePassword'];
  
      $sql = "update `crud` set name='$name', email='$email', mobile='$mobile', password='$password' where id=$id; ";
      $result = mysqli_query($con,$sql);
      if($result){
        header('location:display.php');
      }
      else{
        die(mysqli_error($con));
      }
    }
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />

    <title>CRUD Operation</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="form-group">
          <label >Name :</label>
          <input type="text" 
                 name="updateName" 
                 class="form-control" 
                 placeholder="Enter Your Name" 
                 autocomplete="off">
        </div>
        <div class="form-group">
          <label>Email address :</label>
          <input type="email" 
                 name="updateEMail" 
                 class="form-control" 
                 placeholder="Enter your email"
                 autocomplete="off">
        </div>        
        <div class="form-group">
          <label >Mobile :</label>
          <input type="text" 
                 name="updateMobile" 
                 class="form-control" 
                 placeholder="Enter Your Mobile number"
                 autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password :</label>
          <input type="password" 
                 name="updatePassword" 
                 class="form-control" 
                 placeholder="Password"
                 autocomplete="off">
        </div>
        <button name="update" class="btn btn-primary">Update</button>
      </form>
    </div>
  </body>
</html>
