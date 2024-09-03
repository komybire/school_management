<?php
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect("localhost","root","");
if(!$con){
    die('Could not connect:'.mysqli_error());
}


$dbname = "school_db"; 
$sql = "CREATE DATABASE $dbname";
if ($con->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $con->error;
}


$con->close();
?>