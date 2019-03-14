<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
     if (isset($_SESSION['email'])) 
        { 
          header('location: products.php');
        }
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Login </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
       <?php
         require 'header.php';      // SAME AS INCLUDE BUT THIS ONE STOPS WHEN SPOTS AN ERROR
       ?>
  
    <div class="row asdf">
       <div class="col-xs-5">
         <h3 class="text-warning">Login to make a purchase </h3> <br>
         <form method="POST" action="login_submit.php">
            <div class="form-group">
               <label for="email">Email Id :</label> 
               <input type="text" class="form-control" name="email" placeholder="Enter your Registered Mail Id">
               <div><?php echo $_GET ['email_error']; ?> </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password : </label> 
                <input type="text" class="form-control" name="password" placeholder="Please enter your password"><br>
                <div><?php echo $_GET ['password_error']; ?> </div>
            </div>
             <a href="products.php" name="loggedin" class="btn btn-primary btn-block btn-md active">Log in</a><br>
         </form><br>
         <div class="panel-footer block">
                Don't have an Account? Register
            </div>  
        </div>
    </div>    
      
               


    <br><br><br><br><br><br><br><br>
    <?php
       include 'footer.php';
    ?>    
  </body>
</html> 




