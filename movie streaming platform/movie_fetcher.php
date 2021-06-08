<?php
session_start();
if(isset($_POST['submit'])){

$name_movie=$_POST['submit'];

include 'database_connectivity.php';
$show_movie="SELECT * FROM movie_data WHERE movie_name='$name_movie'";
$get_video=mysqli_query($connec,$show_movie);

echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$name_movie."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body>";

        echo"<div class='jumbotron-fluid'>";
        echo"<div class='container'>";
        while($video = mysqli_fetch_assoc($get_video)){
            $movie_name = $video['movie_name'];
            $user_attending = $_SESSION['Id'];
            $movie_Id = $video['Id'];
            $views_get = $video['views'];
            $upsate_views = $views_get + 1;
            $updating = "UPDATE movie_data SET views = '$upsate_views' WHERE movie_name='$movie_name' ";
            $updatecount = mysqli_query($connec,$updating);
            //video-uploads\WhatsApp Video 2021-05-19 at 15.52.04.mp4
           //'uploadedFiles/' . $_POST['companyName'];
//'uploads/".$fetchr['imgpath']."'
 echo"<br>";
          echo"<a href='home.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
          echo"<br><br><br><br><br>";
          echo"<div class='embed-responsive embed-responsive-16by9'>";   
          echo'<video controls="controls" class="embed-responsive-item">';
          echo"<source src='movie_uploads/".$video['video_path']."' type='video/mp4'> 
          Unabel to stream.
          </video>
          "; 
          echo"</div>";
          echo"<br>";
        echo "<br><br><h5 style='display: inline;'><br>movie name : </h5><h1 style='display: inline;'>".ucwords($video['movie_name'])."</h1>";
        echo"<br><h5 style='display: inline;' >release year : </h5><h4 style='display: inline;'>".$video['release_date']."</h4>";
        echo"<br><h5 style='display: inline;' >description : </h5><h4 style='display: inline;'>".ucfirst($video['description'])."</h4>";
        echo"<br><h5 style='display: inline;' >runtime : </h5><h4 style='display: inline;'>".$video['run_time']." mins </h4>";
        echo"<br><h5 style='display: inline;' >views : </h5><h4 style='display: inline;'>".$video['views']."</h4>";
        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";



}







?>
