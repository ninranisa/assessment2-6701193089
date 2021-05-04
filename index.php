<?php

include "koneksi.php"

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>StudentsIP. | Input IP</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">StudentsIP.</a>
               </div>

                <!-- MENU LINKS -->
                              <div class="collapse navbar-collapse">
                                   <ul class="nav navbar-nav navbar-nav-first">
                                        <li class="active"><a href="home.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li class="dropdown">
                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IPK<span class="caret"></span></a>

                                             <ul class="dropdown-menu">
                                                  <li><a href="ipdata.php">View IP</a></li>
                                                  <li><a href="input.html">Input IP</a></li>
                                             </ul>
                                        </li>
                                        <li><a href="logout.php"> LogOut</a></li>
                                   </ul>
                              </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Input IPK</h1>

                    <br>

                    <p class="lead"></p>
               </div>
          </div>
     </section>


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="insert.php" method="post">
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter semester" name="semester" required>

                                   <input type="text" class="form-control" placeholder="Enter ipk" name="ipk" required>

                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="simpan" value="Save">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>