<?php
$servername='localhost';
$username= 'root';
$password='';
$databasename='users';

$conn=mysqli_connect($servername,$username,$password,$databasename);//connecting database
if($conn)
{
    //didn't gave any message to show the db is working
}
else 
{
    die("error". mysqli_connect_error());//trigger if the db connect doesn't work
}

?>