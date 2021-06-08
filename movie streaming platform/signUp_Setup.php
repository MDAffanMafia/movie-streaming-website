<?php
session_start();
include 'database_connectivity.php';


$fname=strtolower($_POST['fname']);
$lname=strtolower($_POST['lname']);
$username=$fname." ".$lname;
$contact=$_POST['phn'];
$email=$_POST['mail'];
$pass=$_POST['pass'];


$sql_Query="INSERT INTO user_info(username,password,contact,email)values('$username','$pass','$contact','$email')";
$result=$connec->query($sql_Query);



header("Location:login.php");


?>