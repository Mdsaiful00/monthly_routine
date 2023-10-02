<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'routine_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);

$delete = $_GET['id'];

$sql="delete from routine_table where id='$delete'";


$result=mysqli_query($connection,$sql) or die(mysql_error());

header('location:deshboard.php');
?>