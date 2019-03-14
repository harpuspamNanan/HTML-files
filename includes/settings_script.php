<?php require 'common.php';
     if (isset($_SESSION['email'])) 
     {
       header('location: index.php');
     }
    session_start();
    $password= $_GET['password'];
    $user_id= $_SESSION['id'];
    $update_name_query = "UPDATE users SET password = '$password' WHERE id= '$user_id'";
    $update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
?>
