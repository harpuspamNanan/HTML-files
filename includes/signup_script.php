<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
  $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
  $select_query = "SELECT  id FROM users";
  $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
  if (mysqli_num_rows > 0)
  header('location: signup.php?email_error=Email id already exists');
  else
  session_start();
  $name= $_POST['Name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $contact= $_POST['contact'];
  $city= $_POST['city'];
  $address= $_POST['address'];
  $user_registration_query="INSERT INTO users (Name, email, password, contact, city, address) VALUES('$name','$email','$password','$contact','$city','$address')";
  
  $user_registration_submit=mysqli_query($con, $user_registration_query) or die(mysqli_error($con)); 
  mysqli_insert_id($con);
  $_SESSION['email']= $email;
  $_SESSION['id']= mysqli_insert_id($con);
  header('location: products.php');
?>  
