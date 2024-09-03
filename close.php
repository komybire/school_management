<?php 
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect("localhost","root","");
if(!$con){
  die('Could not connect:'.mysql_error());
}
mysqli_close($con);
echo "connection is closed";
?>