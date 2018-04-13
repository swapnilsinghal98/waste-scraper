<?php
include('dbconn.php');
session_start();
if(!isset($_SESSION['name'])){
    header ('location : login.php');
}
else
{
    //echo"ENTERED THE SITE";
    $name = $_SESSION['name'];
            echo "<!doctype html>
        <html lang='en''>
          <head>

            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>


            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

            <title>Welcome to Web Scraper</title>
          </head>
          <body>

            <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>

            <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>

            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

            <div class='container-fluid' style='padding: 0'>
                    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
                      <a class='navbar-brand' href='home.php'><img src='https://www.foei.org/wp-content/uploads/2013/07/indonesia-forest610259.jpg' style='width:50px; height:50px'></a>
                      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                      </button>

                      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav mr-auto'>
                          <li class='nav-item active'>
                            <a class='nav-link' href='home.php'>".$name."<span class='sr-only'>(current)</span></a>
                          </li>                
                        </ul>
                        <form class='form-inline my-2 my-lg-0'>
                        <a href='logout.php'> <button class='btn btn-outline-success my-2 my-sm-0' type='button' style='margin:10px'> Logout</button></a>
                        </form>
                      </div>
                    </nav>
              </div>
          </body>
        </html>
        ";
            
    $teamname = mysqli_real_escape_string($con,$_POST['team_name']);
            $email = mysqli_real_escape_string($con,$_POST['leader_email']);
            $desc = mysqli_real_escape_string($con,$_POST['desc']);
    
            $teamname = htmlspecialchars($teamname);
            $email = htmlspecialchars($email);
            $desc = htmlspecialchars($desc);
            
        
            
            $query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) == 0)
            {
            
                echo  "<head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                    <title>Regiteration sucessful</title>
                    <!-- Bootstrap CSS -->
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
                    </head>
                    <body>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
                        <div class='alert alert-warning' role='alert'>
                    <strong>Error! </strong> Leader's Email NOT Registered.
                    </div>
                    <div>
                     <a href='makeateam.php'>  <button class='btn btn-outline-success my-2 my-sm-0' type='button' style='margin:10px'>Make a Team</button></a>
                    </div>

                    </body>
                    </html>";
             }
        
        else
         {
            
            
            //$teamname= ucwords($teamname);
	       $insert = mysqli_query($con, "INSERT INTO teams (`team_name`,`leader_mail`,`job_desc`) VALUES ('".$teamname."','".$email."','".$desc."');");	
	       if ($insert)
           {
                header('location: viewteams.php');
           }
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"  type="text/css"> 
    </head>
</html>