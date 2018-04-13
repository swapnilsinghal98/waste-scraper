<?php
session_start();

  if(isset($_SESSION['name'])){
    header('location: home.php');
      
  }


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <style type="text/css">
                    
          .jumbotron, body{
                background-image: url("https://i.pinimg.com/236x/b6/eb/36/b6eb361151b3020e5977492c7ef24768--tile-patterns-pretty-patterns.jpg");
                background-repeat: repeat, cover;
                }
      </style>
    <title>Enviroment Project</title>
  </head>
  <body>
            
        <div class="container-fluid" style="padding: 0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#"><img src="https://www.foei.org/wp-content/uploads/2013/07/indonesia-forest610259.jpg" style="width:50px; height:50px"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                   <a href="login.php">  <button class="btn btn-outline-success my-2 my-sm-0" type="button" style="margin:10px"> Login</button></a>
                   <a href="signup.php"> <button class="btn btn-outline-success my-2 my-sm-0" type="button" style="margin:10px">Sign up</button></a>
                </form>
              </div>
            </nav>
      </div>

      
      <div class="container-fluid" style="padding: 0">
            <div class="jumbotron">
            <h1 class="display-4" style="color:white">Want a Cleaner Greener Enviroment?</h1>
            <h3><p style="color:white">Join Us.</p></h3>
            <p class="lead">
            <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
            </p>
      </div>
          <div class="container-fluid" style="background-image: url('https://dontwasteurwaste.files.wordpress.com/2014/12/motherearth.jpg'); background-repeat: no repeat; background-size:cover">
          
          
          </div>

      
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>