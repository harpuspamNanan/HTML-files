<?php 
  include 'common.php';
  if(!isset($_SESSION))session_start();
  $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
  $password= $_GET['password'];
  $user_id= $_SESSION['user_id'];
  $delete_name_query = "DELETE users WHERE password = '$password' AND id= '$user_id' ";
  $update_name_result = mysqli_query($con, $delete_name_query) or die(mysqli_error($con)); 
  header ('location: cart.php');
?>  