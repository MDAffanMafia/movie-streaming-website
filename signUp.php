


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Registration</title>
   <link rel="stylesheet" href="static/user.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="login.php" class="navbar-brand"> <img src="imgfile/logo.png" alt=""> </a>
           <span class="navbar-text">selfporomo movie hub</span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="login.php" class="nav-link"> SignIn</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1>Create an account</h1>
           <p>It's free and always will be. </p> <br>

           <form class="" action="signUp_setup.php" method="POST">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="First Name" name="fname" value="">

               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="Last Name" name="lname" value="">
               </div>

             </div> <br>
             <input type="number" class="form-control" placeholder="Mobile Number" name="phn" value="">
             <br>
             <input type="email" class="form-control" placeholder="Email Address" name="mail" value="">
             <br>
             <input type="password" class="form-control" placeholder="Password" name="pass" value="">
                   </div>
                 </div>
                 <div class="signupbutton">
                   <br><br>
                   <button type="submit" class="btn btn-success btn-lg" name="sub" value="submit">Sign Up</button>

                 </div>

             </div>
           </form>




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
