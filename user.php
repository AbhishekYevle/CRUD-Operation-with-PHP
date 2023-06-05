<?php
  include 'connect.php';

  if(isset($_POST['submit'])){
    $name=$_POST['inputName'];
    $email=$_POST['inputEMail'];
    $mobile=$_POST['inputMobile'];
    $password=$_POST['inputPassword'];

    $sql = "insert into `crud` (name,email,mobile,password) values( '$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con,$sql);
    if($result){
      echo '<script>alert("User Registered.")</script>';
    }
    else{
      die(mysqli_errno($con));
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
                 name="inputName" 
                 class="form-control" 
                 placeholder="Enter Your Name" 
                 autocomplete="off">
        </div>
        <div class="form-group">
          <label>Email address :</label>
          <input type="email" 
                 name="inputEMail" 
                 class="form-control" 
                 placeholder="Enter your email"
                 autocomplete="off">
        </div>        
        <div class="form-group">
          <label >Mobile :</label>
          <input type="text" 
                 name="inputMobile" 
                 class="form-control" 
                 placeholder="Enter Your Mobile number"
                 autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password :</label>
          <input type="password" 
                 name="inputPassword" 
                 class="form-control" 
                 placeholder="Password"
                 autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-primary" ><a href="display.php" class="text-light">Display Users</a></button>
      </form>
    </div>
  </body>
</html>
