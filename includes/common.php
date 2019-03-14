<?php

$con = mysqli_connect ("localhost", "root", "","ecommerce")    // or is used if 1st operator doesn't work properly then 2nd operator is executed
or die(mysqli_error($con)) ;             // mysqli_error() returns the error msg for most recent mysqli function (Here, it is myqli_connect() ) 

//mysqli_error() tells the reason for error of connection      
// die() function is used to stop the execution of code here IF connection to the database isn't established 
// die() stops the execution of further code

session_start();

?>