<?php
error_reporting(0);
session_start();

include "koneksi.php";

$level =$_SESSION['level'];
?>
<!DOCTYPE html>
<html lang="en">
<head>


     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="shortcut icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a7247d6a-142c-47a6-a615-f88f13936642/dbf8j7j-e5b54ac0-3107-4c18-aa16-d34345b90543.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvYTcyNDdkNmEtMTQyYy00N2E2LWE2MTUtZjg4ZjEzOTM2NjQyXC9kYmY4ajdqLWU1YjU0YWMwLTMxMDctNGMxOC1hYTE2LWQzNDM0NWI5MDU0My5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ._RcuNCRWbumCjBmc99kFMoov1ukOJjmA4EiUCFOgp_0">

     <title>BEStudio. | Home</title>

     <link rel="stylesheet" href="css/bootstrap.minn.css">
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
                                   <li><a href="index.php">Input IP</a></li>
                              </ul>
                         </li>
                         <li><a href="logout.php"> LogOut</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>StudentsIP.</h1>
                                        <h3>Create, Read, Update and Delete</h3>
                                        <a href="ipdata.php" class="section-btn btn btn-default">View IP</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About Me</h2>

                                   <br>

                                   <p class="lead">Nindya Rifka Annisa <br> D3SI-43-01 <BR> 6701193089</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Nindya Rifka Annisa</h2>
                              </div>

                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 StudentsIP.</p>
                                   <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                              </div>
                         </div>
                    </div>


               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>