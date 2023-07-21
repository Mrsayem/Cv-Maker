<?php
//if someone is not logged then have to be logged in for logout
session_start();
if($_SESSION['loggedin']!=true){
    header("location: login.php");
    echo "not logged in";
    exit;
}
else 
{
    //if someone already logged in then he can logged out
    session_unset();
    session_destroy();
    echo "<div class='alert alert-primary' role='alert'>
            succesfully logged out!
          </div>";
    header("location: index.php");
}
?>
