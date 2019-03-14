<?php require 'common.php';     // REQUIRE Statement stops further Operation if any ERROR occurs
   if (isset($_SESSION['email'])) 
   { 
     header('location: products.php');
   }
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Sign Up Now ! </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
      <?php include 'header.php';
      ?>    
    
    
    <div class="row asdf">
        <div class="col-xs-5">
          <h2 class="text-warning">SIGN UP</h2> <br>
          <form method="POST" action="signup_script.php">
             <div class="form-group">
                 <label for="Name">Name</label>      
                 <input type="text" class="form-control" id="Name" name="Name" placeholder="Your Name Please">      
             </div>
             <div class="form-group">
                  <label for="Email">Email id : </label>   
                  <input type="text" class="form-control" id="email"  placeholder="Use @ and .com in your mail id too"  required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">   
             </div>
             <div class="form-group">
                  <label for="password">Password : </label>
                  <input type="text" class="form-control" id="password" placeholder="Please include Upper Case,Lower Case char. and at least a Number" required="true" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">    
             </div>
             <div class="form-group">
                  <label for="contact">Contact No.: </label>
                  <input type="text" class="form-control" id="contact" placeholder="Contact"> 
             </div>
             <div class="form-group">
                  <label for="city">City : </label>
                  <input type="text" class="form-control" id="city" placeholder="Your Native City">
             </div>
             <div class="form-group">
                  <label for="address">Address : </label>
                  <input type="text" class="form-control" id="address"  placeholder="Address">
             </div>
             <a href="products.php"><button type="submit"  class="btn btn-primary btn-block btn-lg">Submit </button> <br></a>
          </form>
        </div>
    </div>        
    
    
    <br><br><br><br><br><br><br>
    <?php
       include 'footer.php';
    ?>    
  </body>
</html>    