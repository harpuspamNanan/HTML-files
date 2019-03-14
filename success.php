<?php require 'common.php';
       if (isset($_SESSION['email'])) 
       {
         header('location: index.php');
       }
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Order Successful ! </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
  <?php include 'header.php';
  ?>
      <div class="succ">
          <div class="colour">
              <h1>Your order is confirmed.</h1>
          </div>    
          <h2> Thank you for shopping with us.<a href="products.php" target="_blank">Click here</a> to purchase any other item.</h2>
      </div>  
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <footer>
        <div class="container">
          <center> 
             <p> Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000 </p>
          </center> 
        </div>
      </footer>
  
  </body>
</html>     