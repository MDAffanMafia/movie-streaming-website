<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>selfpromoMovie</title>
  <link rel="stylesheet" href="static/homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> </a>
            <span class="navbar-text" style="color:red;">selfpromoMovie HUB</span>
             
            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['Id'])) {
                if ($_SESSION['Id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>";
                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br>";
                  include 'database_connectivity.php';
                  $Id = $_SESSION['Id'];
                  $quer = "SELECT * FROM user_info WHERE Id = '$Id' ";
                  $quer2 = "SELECT * FROM movie_data WHERE Id in (SELECT Id from movie_data where Id = '$Id') ";
                  $latest="SELECT * FROM movie_data ORDER BY Id DESC LIMIT 1";
                  $check = mysqli_query($connec,$quer);
                  $get_latest=mysqli_query($connec,$latest);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($connec,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
                  $lat=mysqli_fetch_assoc($get_latest);
                  include 'get_homethumb.php'; 
              echo"</div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie_fetcher.php' method='POST'>
                    <h4 style='color:black;font-size:30px;'>Recent :
                    <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($lat['movie_name'])."'/></h4>
                    </form>
                  </div>
                  <div class='col'>
                    <form action='fetch_user.php' method='POST'>
                      <select  name='option' style='padding:5px;' id=search>
                        <option selected>Search By</option>
                        <option value='movie_name'>Name</option>
                        <option value='release_date'>Release year</option>
                      </select>
                      <input type='text' placeholder='Enter..' style='margin-left:10px;margin-top:10px;padding:5px;' name='textoption'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>
                </div>";
                  
                  ?>
      <div class="jumbotron">
        <h2 style='margin-top:0px;padding-top:0px;'>Latest updated</h2>
          <div class="row">
          <?php
              include 'fetch_recent.php';
             ?>
          </div>
      </div>
      <div class="jumbotron">
        <h2>  All movies</h2>
        <?php
              include 'fetch_all.php';
             ?>
          </div>


      </div>

  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="">selfpromo.org(prvate limited)</a>
    </div>

  </footer>
  </body>
</html>
