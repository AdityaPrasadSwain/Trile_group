<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registation</title>
    <style>
        .container{
            height: 80%;
            width: 60%;
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
    <center><h1>Well come to my php form</h1></center>
     <div class="container">
    <form class="row g-3" action="#" method="post">
    <div class="row g-3">
  <div class="col">
  <label for="inputEmail4" class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname" required>
  </div>
  <div class="col">
  <label for="inputEmail4" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname" required>
  </div>
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your Email" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Enter your Password" name="password" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter your Address" name="address" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Enter your City" name="city" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" required>
      <option>Choose...</option>
      <option>Odisha</option>
      <option>Lucky</option>
      <option>Moon</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" placeholder="Enter your Zip" name="zip" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
  <input class="btn btn-primary" type="submit" value="Submit" name="submit">
  </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php
$servername = "localhost";
$username="root";
$password="";
$database="firstform";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo "<center>Connection Ok.....</center>";
}
else{
    echo "<center>Connection Failed</center>";
}
if($_POST['submit']){
  
    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];
    $city     = $_POST['city'];
    $state    = $_POST['state'];
    $zip      = $_POST['zip'];

    $query = "INSERT INTO moon VALUES ('$fname','$lname','$email','$password','$address','$city','$state','$zip')";

    $data = mysqli_query($conn,$query);

    if($data){
        echo "<center>Data inserted successfull........</center>";
    }
    else{
        echo "<center>Data insertion failed........</center>";
    }
}
?>