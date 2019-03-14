<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
    $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    $email= $_POST['email'];
    $password= $_POST['password'];
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    md5($password);
    if(isset($_POST['loggedin']))
    {
      if(empty ($email))                            //   ???????????????????????????????????????????????????????? 
      { 
        header('location: login.php?email_error=Please enter email id');
      }
      if(empty ($password))   
      {  
        header('location: login.php?password_error=Please enter Password');
      }    
      if (strlen($password) < 6)
      { 
         header('location: login.php?password_error=Please enter corect password');
      }
    }
    else
    {
        $select_query = "SELECT email, password FROM users";
        $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        if ($select_query_result)
        {
           header('location: cart.php'); 
           session_start();
        }  
        else
        {
            header('location:login.php?email_error=Unsuccessful login');
        } 
    }
    if(mysqli_num_rows == 0)
    {
        echo "No account matched";
    }
    mysqli_insert_id($con);
    $_SESSION['email']= $email;
    $_SESSION['id']= mysqli_insert_id($con);
    header('location: products.php');
?>