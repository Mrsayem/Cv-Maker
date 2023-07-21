<!--checking the connection,login details-->
<?php
$showerror = false;
$login = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'partials/dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "Select * from info where Username='$username'and password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        $showerror = true;
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php require 'partials/navbar.php' ?>
    <?php
    //this is for alert if succesfull login else danger for unauthorized login
    if ($login==true) {
        echo '<div class="alert alert-primary" role="alert">
            succesfully loged in!
          </div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-danger" role="alert">
            wrong password or username!
          </div>';
    }
    ?>
    <!--login information-->
    <div class="container-2">
        <h1 class="text-center">Login Here</h1>
        <form action='/Cvmaker/public/login.php' method="POST">
            <div class="mb-3 col-md-6 ">
                <label for="username" class="form-label">UserName</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    
</body>

</html>