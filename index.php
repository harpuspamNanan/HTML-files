<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
     if (isset($_SESSION['email'])) 
        { 
          header('location: products.php');
        }
?>

<!DOCTYPE html>
<html>
  <head>
     <title> Lifestyle Store </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
     <?php
        require 'header.php';      // SAME AS INCLUDE BUT THIS ONE STOPS WHEN SPOTS AN ERROR
     ?>
   
    <div id="banner-image">
        <div class="banner-content">
           <h1> We sell Lifestyle </h1>
           <p> Flat 40% OFF on premium brands </p>  
           <a href="products.php" class="btn btn-danger btn-lg active">Shop Now </a>
        </div>     
    </div>  
    
    <?php
       include 'footer.php';
    ?>  
  </body>
</html>

