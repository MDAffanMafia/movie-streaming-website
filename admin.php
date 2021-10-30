<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Affan</title>
   <link rel="stylesheet" href="static/user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text">selfpromoMovie HUB</span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="home.php" class="nav-link"> Home </a> </li>
             <li class="nav-item"> <a href="logout.php" class="nav-link"> Logout</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1> Upload Movie</h1>
           <p> <b></b> </p> <br>

           <form class="" action="upload_movie.php" method="POST" >

            <input type="text" class="form-control" placeholder="Movie Name" name="movie_name" value=""><br>
             <br>
             <input type="text" class="form-control" placeholder="Genre" name="release_date" value="">
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
             <br>
             <div class="row">
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="iname" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Video : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="30000000">

                              <input type="file" name="vname" value="">
                          </div>
                     </td>
                   </tr>
                 </table>

               </div>
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>


         </div>

       </div>


   </div>

 </header>
 <footer class="page-footer font-small blue">

   <div class="footer-copyright text-center py-3">© 2018 Copyright:
     <a href="">shubhamb756@gmail.com</a>
   </div>

 </footer>
   </body>
 </html>
