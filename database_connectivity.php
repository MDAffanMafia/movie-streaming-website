<?php 
$url="localhost";
$username="root";
$password="";
//$database="miovie";
$connec=mysqli_connect($url,$username,$password,'miovie');
if(! $connec)
{
    die('Could not connect to the server ');
}
?>