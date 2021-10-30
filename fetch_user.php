<?php
include 'database_connectivity.php';
if(isset($_POST['submit'])){

$selected_type=$_POST['option'];
$text=strtolower($_POST['textoption']);



$search_movie="SELECT * FROM movie_data WHERE $selected_type = '$text'";
$fetched=mysqli_query($connec,$search_movie);


echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>search</title>";
      echo"<link rel='stylesheet' href='static/ferch_usesr.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body style='background-color:black';>";

        echo"<div class='jumbotron-fluid'>";
        echo"<div class='container'>";
echo"<div class='row'>";
while ($found = mysqli_fetch_assoc($fetched)) {
    echo"<br><br><br>";
    echo"<a href='home.php' id='home' >Back to Home </a>";
    echo"<br><br><br><br><br>";
    echo"<form action='movie_fetcher.php' method='POST' style=' padding:25%'>";
    echo"<div class='col'>";
    echo "<img src='imgfile/".$found['image_path']."' height='250' width='250' style='margin-top: 30px;margin-left:50px;margin-right:20px;border:5px solid white' />";
      echo"<div class='noob'>";
        echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:250px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;' value='".ucwords($found['movie_name'])."'/>";
      echo"</div>";
      echo"</form>";
      echo "<br><h1 style='display: inline;'><br>movie name : </h1><h1 style='display: inline;'>".ucwords($found['movie_name'])."</h1>";
      echo"<br><h5 style='display: inline;' >release year : </h5><h4 style='display: inline;'>".$found['release_date']."</h4>";
      echo"<br><h5 style='display: inline;' >description : </h5><h4 style='display: inline;'>".ucfirst($found['description'])."</h4>";
      echo"<br><h5 style='display: inline;' >runtime : </h5><h4 style='display: inline;'>".$found['run_time']." mins </h4>";
      echo"<br><h5 style='display: inline;' >views : </h5><h4 style='display: inline;'>".$found['views']."</h4>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";

echo"</body>";


echo"</html>";
}







}







?>