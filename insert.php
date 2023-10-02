<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'routine_db';

$connection = mysqli_connect($hostname, $username, $password, $dbname);

$name = $_POST['name'];
$subject = $_POST['subject'];
$day = $_POST['day'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql="insert into routine_table(name,subject,day,date,time)values('$name','$subject','$day','$date','$time')";

// $result =mysqli_query($connection,$sql) or die(mysql_error());
$result=$connection->query($sql);

header('location:deshboard.php');
?>