<?php 
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect("localhost","root","");
if(!$con){
  die('Could not connect:'.mysql_error());
}
else{
echo "connection successfuly stablished";
}
?>