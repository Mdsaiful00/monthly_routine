<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'routine_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);

$id = $_POST['id'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$day = $_POST['day'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "update routine_table set name='$name', subject='$subject' , day='$day' , date='$date' , time='$time' where id='$id'";

$result=mysqli_query($connection,$sql) or die(mysql_error());

header('location:deshboard.php');

?>