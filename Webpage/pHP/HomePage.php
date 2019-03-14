<?php include 'common.php';     // INCLUDE statement doesnt show ERROR if you right wrong name or anything
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
        </style>
    </head>
<body>
  
   <?php
      require 'header.php';      // SAME AS INCLUDE BUT THIS ONE STOPS WHEN SPOTS AN ERROR
   ?>

   <div class="container">   
        <div class="row">
            <h2> Heading </h2>
        </div>
     <?php 
       $str="Hello";
       echo md5($str)."<br>";           //    MD5     encrypts the text in special form   
       echo md5(md5($str));    
     ?>     
   </div>

</body>
</html>            