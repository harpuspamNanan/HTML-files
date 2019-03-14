<?php require 'common.php';
  if(!isset($_SESSION))session_start();
?>

<!DOCTYPE html>
<html>
  <head>
     <title>Review your order </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type=" text/css">
       <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  
  <body>
  <?php include 'header.php';
   $_SESSION['user_id']= $user_id;
  ?>
     
      <div class="row">       
        <div class="col-xs-offset-3 col-xs-6 table-responsive">     
         <table class="table table-striped">
             <tbody>
                 <tr><th>Item Number </th>
                     <th>Item Name </th>
                     <th>Price </th>
                     <th> </th>
                </tr>
                
                <tr><td>   </td>	
                    <td>Total</td>	 
                    <td>Rs 0/-</td>      
                    <td> <a href="success.php"><button type="submit" class="btn btn-primary btn-block btn-md">Confirm Order</button></a></td> 
                </tr>    
             </tbody>
          </table>
        </div>  
      </div>



      <br><br><br><br><br><br><br><br><br><br><br><br>
      <?php
          include 'footer.php';
      ?>    
  
    
  </body>
</html>