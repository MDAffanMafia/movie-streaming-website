<?php
include 'database_connectivity.php';


$lat="SELECT * FROM  movie_data";
$data=mysqli_query($connec,$lat);
$data_num=mysqli_fetch_assoc($data);

$get_latest="SELECT * FROM movie_data ORDER BY Id DESC LIMIT 3";
$latest_feched=mysqli_query($connec,$get_latest);
    while($latest_found =mysqli_fetch_assoc($latest_feched))
    {
        echo"<form action='movie_fetcher.php' method='POST'>";
        echo"<div class='col'>";
        echo "<img src='imgfile/".$latest_found['image_path']."' height='250' width='200' style='margin-top: 30px;margin-left:50px;margin-right:20px;' />";
          echo"<div class='noob'>";
            echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;' value='".ucwords($latest_found['movie_name'])."'/>";
          echo"</div>";
        echo"</div>";
        echo"</form>";
    }






?>
