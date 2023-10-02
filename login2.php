<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'routine_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);


$username = $_POST['username'];

$password = $_POST['password'];

$sql = "select*from routine_login where username='$username' && password= '$password'";
$saiful = mysqli_query($connection, $sql) or die(mysql_error());

$count=mysqli_num_rows($saiful);

if($count==1){
    header('location:deshboard.php');
}
else{
    header("Location:login.php");
    $_SESSION['msg']='Password Incurrect';
}
?>