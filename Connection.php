<?php 
 $con=new mysqli("localhost","root","","cocktail");              // Create connection
   if ($con->connect_error) {                                     // Check if  connection is eshtablished or 
           die("Connection failed: " . $con->connect_error); } 

  header("profile.php");
 ?>