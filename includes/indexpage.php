<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
     if (isset($_SESSION['email'])) 
        { 
          header('location: products.php');
        }
?>

<!DOCTYPE html>
 <html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .top_margin
            {
               margin-top:20px;
            }
        </style>
    </head>
    <body>
       <?php
         require 'header.php';      // SAME AS INCLUDE BUT THIS ONE STOPS WHEN SPOTS AN ERROR
       ?>
       