<?php
$exits = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // if method is post this whole section will work
  require 'partials/dbconnect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $email = $_POST['email'];
  //checking ifsomene already using the username
  $exitSql = "select * from info where username='$username'";
  $resultSql = mysqli_query($conn, $exitSql);
  $numSql = mysqli_num_rows($resultSql);
  
  if ($numSql == 0) {//if someone isn't using it then this condition will work and information will be stored in db
    $exits = 1; //if this cond. work the exits will be 1 to trigger the condition in the below code
    if ($password == $cpassword) {//checking if password and confirm pass are same or not
      $sql = "INSERT INTO `info` (`Username`, `password`, `email`) VALUES ( '$username', '$password', '$email');";
      $result = mysqli_query($conn, $sql);
    }
  }
  if ($numSql > 0) {
    $exits = 2; //else exits will be 2 to trigger another condition
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <!--using partials for nav-->
  <?php require 'partials/navbar.php' ?>
  <!--will give alert if succesfull then green else red-->
  <?php
  if ($exits == 1) { // this was the trigger part from the above exits
    echo '<div class="alert alert-primary" role="alert">
            succesfully registered!
          </div>';
  } else if ($exits == 2) { 
    echo '<div class="alert alert-danger" role="alert">
            Username exits already!
          </div>';
  }
  ?>
  <!--this is form section-->
  <div class="container-2">
    <h1 class="text-center">SignUp Here</h1>
    <form action='/Cvmaker/public/signup.php' method="POST">
      <div class="mb-3 col-md-6 ">
        <label for="username" class="form-label">UserName</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3 col-md-6">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
      </div>
      <div class="mb-3 col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>