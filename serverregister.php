<?php
session_start();

// initializing variables
$fullname="";
$username = "";
$email    = "";
$password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login');
if (count($errors) == 0) {
  	$query = "INSERT INTO register (fullname,username, email,password) 
  			  VALUES('$fullname','$username', '$email', '$password')";
          echo "data entered successfully";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');

  }
