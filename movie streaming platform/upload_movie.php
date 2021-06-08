<?php
session_start();
if(isset($_POST['upload']) )
{
    include 'database_connectivity.php';

   
    $movie_name=strtolower($_POST['movie_name']);
    $release_date=$_POST['release_date'];
    $run_time=$_POST['rtime'];
    $views='1';
    $likes='1';
    $description=$_POST['desc'];
    $image_path=$_FILES['iname']['name'];
    $video_path=$_FILES['vname']['name'];
    $sql_Query="INSERT INTO movie_data (movie_name,release_date,views,likes,run_time,description,image_path,video_path) 
    VALUES('$movie_name','$release_date','$views','$likes','$run_time','$description','$image_path','$video_path')";
     
     
     if ($connec->query($sql_Query)===TRUE) {
      header("location:admin.php");
     }
     else {
         echo("there is an error".$connec->error);
     }

}




?>