<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'database_connectivity.php';
$username=$_POST['username'];
$password =$_POST['pass'];

$sql_Query="SELECT * FROM  user_info WHERE username ='$username' AND password= '$password'";


$result =mysqli_query($connec,$sql_Query);
//$id = isset($_GET['id']) ? $_GET['id'] :'';
$row =mysqli_num_rows($result);
if(!$row = $result->fetch_assoc()) {
    echo "incorrect username or password";
  }else {
    session_start();
    $_SESSION['loggedin']=true;
    $id=$row['Id'];
    $_SESSION['username']=$username;
    $_SESSION['Id'] = $row['Id'];
      header("Location: home.php");
    }

}
?>