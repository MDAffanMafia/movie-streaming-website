<?php
include 'database_connectivity.php';
$get_thumbnail="SELECT * FROM movie_data ORDER BY Id DESC LIMIT 1";
$get_img=mysqli_query($connec,$get_thumbnail);
while($get_img1=mysqli_fetch_assoc($get_img))
{
    echo "<img src='imgfile/".$get_img1['image_path']."'  style='height:100%;width:100%' />";
}



?>