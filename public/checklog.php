<?php
//already explained this is for checking if someone is logged or not
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
else 
{
    header('location: cvgenerate/cvregister.html');
}


?>