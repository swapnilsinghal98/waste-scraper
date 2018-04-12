<?php
	
	session_start();
	include('dbconn.php');
    $email = $_POST['email'];
	$password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con,$query);	
	if(mysqli_num_rows($result) != 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $_SESSION['name'] = $name;
			header('Location: home.php');
	}
	else{
        
		header("Location: ".$_SERVER['HTTP_REFERER']."?status=login_fail");
	}
		
		
/*	
	session_start();
	include('dbconn.php');
    
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$result = mysqli_query($con, "SELECT name, password FROM users WHERE email = '".$email."' AND password = '".$password."'");
	
	if(mysqli_num_rows($result) != 0) {
			$_SESSION['username'] = $name;
			header("Location: ".$_SERVER['HTTP_REFERER']);
	}
	else{
		header("Location: ".$_SERVER['HTTP_REFERER']."?status=login_fail");
	}
		
		
*/?>