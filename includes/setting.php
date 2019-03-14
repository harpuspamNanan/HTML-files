<?php require 'common.php';
     if (isset($_SESSION['email'])) 
     {
       header('location: index.php');
     }
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Settings </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
  <?php include 'header.php';
  ?> 

      <div class="elements">
           <h3 class="asd">Change Password</h3> 
           <form method="POST" action="settings_script.php">
                <div class="form-group col-xs-5 "><input type="text" class="form-control"  placeholder="Old Password">    </div>
                <div class="form-group col-xs-5 col-xs-offset-2 "><input type="text" class="form-control"  placeholder="New Password">    </div>
                <div class="form-group col-xs-5"><input type="text" class="form-control"  placeholder="Confirm New Password">    </div>
           </form>
      </div>