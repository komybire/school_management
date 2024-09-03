<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "school_db";
$con=mysqli_connect("localhost","root","","school_db");
if(!$con){
    die('Could not connect:'.mysqli_error());
}


$dbname = "school_db"; 
$sql = "CREATE TABLE admininfo (
    
	Username VARCHAR(15),
 
	password VARCHAR(50),
	confirmpassword VARCHAR(50)
)";

if ($con->query($sql) === TRUE) {
    echo "Table 'admininfo ' is created successfully";
} else {
    echo "Error creating table: " . $con->error;
}


$con->close();
?>