<?php
$con = mysqli_connect ("localhost", "root", "","ecommerce")    // or is used if 1st operator doesn't work properly then 2nd operator is executed
or die(mysqli_error($con)) ;             // mysqli_error() returns the error msg for most recent mysqli function (Here, it is myqli_connect() ) 
//mysqli_error() tells the reason for error of connection      
// die() function is used to stop the execution of code here IF connection to the database isn't established 
// die() stops the execution of further code

$select_query= "SELECT id, email_id, first_name FROM users";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));

$row=   mysqli_fetch_array($select_query_result);                                      //1
echo $row['id']."<br>";
echo $row['email_id']."<br>";                                                // FOR   HORIZONTAL SPACES  USE   &nbsp
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //2
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //3
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //4
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //5
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //6
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //7
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //8
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //9
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //10
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //11
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

$row=   mysqli_fetch_array($select_query_result);                                      //12
echo $row['id']."<br>";
echo $row['email_id']."<br>";
echo $row['first_name']."<br><br>";

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
    </head>
    <body>