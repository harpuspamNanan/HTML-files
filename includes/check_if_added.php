<?php 
  function check_if_added_to_cart($item_id)
  {
    include 'common.php';
    if (isset($_SESSION['email'])) 
    { 
      header('location: products.php');
    }
    $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    $select_query = "SELECT * FROM  user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    if (mysqli_num_rows >= 1)
     {
      return 1;
     }    
    else 
    {
     return 0; 
    } 
  }