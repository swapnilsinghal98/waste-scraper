<?php
session_start();

  if(!isset($_SESSION['name'])){
    header('location: login.php?status=loginagain');
      echo "Please login to continue";
  }
else
{
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
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css"  type="text/css"> 
    
    <title>Team Builder</title>
  </head>
  <body>
  <div class="container-fluid" style="padding:0px; margin-top:10px">
    <div class="form-control">
      <form action="addteam.php" method="post">
              
                <label for="title">Team Name: </label>
                <input type="text" required class="form-control validate-input" name="team_name"  id="team_name" aria-describedby="emailHelp" placeholder="Enter your team name ">
            <div>
            <!--    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" id="email"name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>-->

                <label for="title">Leader's Email: </label>
                <input type="email" required class="form-control validate-input" name="leader_email" aria-describedby="emailHelp" placeholder="Enter your team leader's name" data-validate = "Valid email is required: ex@abc.xyz">
              </div>
              <div class="form-group">
                <label for="desc">Description: </label>
                  <textarea required class="form-control validate-input" name="desc" placeholder="Describe your problem"></textarea>
              </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
          
    </form>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>