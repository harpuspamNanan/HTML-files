<?php require 'common.php'; 
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Products </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
  <?php include 'header.php';
        include 'check_if_added.php';
  ?>  


    <div class="container">
        <div class="jumbotron">
           <h2>Welcome to our Lifestyle Store! </h2>
           <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place. </p>
        </div>
    
       <div class="row text-center">
           <div class="col-md-3 col-sm-6 thumbnail">
                <div class="matter">
                 <img src="img2/cam1.jpg" class="img-responsive" width="249px" alt="camera">
                   <h4>Panasonic Handycam<br>Price:Rs.5800.00</h4>
                   <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
                </div>          
                </div>
            
           <div class="thumbnail col-md-3 col-sm-6 ">
                <img src="img2/cam2.jpg" class="img-responsive" alt="camera">
                <h4>Canon 5D-S<br>Price:Rs.30000.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
           </div>

           <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img2/cam3.jpg" class="img-responsive" alt="camera">
                    <h4>Pentax K-30<br>Price:Rs.50000.00</h4>
                    <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>
          
            <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="img2/cam4.jpg" class="img-responsive" alt="camera"> 
                       <h4>Sony Smart-focus<br>Price:Rs.12000.00</h4>
                       <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>
       </div>    
    

       <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/watch1.jpg" class="img-responsive" alt="Wrist Watch">
                <h4>Reebok Formal Watch<br>Price:Rs.3000.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>

            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/watch2.jpg" class="img-responsive" alt="Wrist Watch">
                <h4>Foster's Watch<br>Price:Rs.24000.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>
          
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/watch3.jpg" class="img-responsive" alt="Wrist Watch">
                <h4>Formal Watch<br>Price:Rs.650.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>

            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/watch4.jpeg" class="img-responsive" alt="Wrist Watch">
                <h4>Sports Watch<br>Price:Rs.1500.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>
       </div>     


       <div class="row text-center">
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/shirt1.jpg" class="img-responsive" alt="Arrow Shirts">
                <h4>Formal Shirts<br>Price:Rs.2300.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>

            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/shirt2.jpg" class="img-responsive" alt="Leisure Shirts">
                <h4>Leisure T-Shirts<br>Price:Rs.400.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>

            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/shirt3.jpg" class="img-responsive" alt="Designed T-Shirts">
                <h4>Designed T-Shirts<br>Price:Rs.500.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>

            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="img2/shirt4.jpg" class="img-responsive" alt="Swim Shirts">
                <h4>Swim Shirts<br>Price:Rs.800.00</h4>
                <?php if (!isset($_SESSION['email'])) 
                         {
                           ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                           <?php
                         }
                           else
                         {  
                            if (check_if_added_to_cart(1)) 
                            { 
                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            } 
                            else
                            { 
                               ?>
                               <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                               <?php 
                            } 
                         } 
                    ?>
            </div>
       </div>     
    </div>
         
    <?php
    include 'footer.php';
 ?>       


  </body>
</html>   