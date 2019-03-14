<?php
  include 'common.php';
  $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
  $user_id= $_POST['user_id'];
  $item_id= $_POST['item_id'];
  $status= $_POST['Added to cart'];
  $user_registration_query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
  $user_registration_submit=mysqli_query($con, $user_registration_query) or die(mysqli_error($con)); 
  header ('location: products.php');
?>  