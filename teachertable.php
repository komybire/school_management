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
$sql = "CREATE TABLE Teachers (
    FirstName VARCHAR(15),
	MiddleName VARCHAR(15),
    LastName VARCHAR(15),
	Email VARCHAR(15),
    Age INT,
	Phone VARCHAR(15),
	Username VARCHAR(50),
	password VARCHAR(50)
)";

if ($con->query($sql) === TRUE) {
    echo "Table 'Teachers ' is created successfully";
} else {
    echo "Error creating table: " . $con->error;
}


$con->close();
?>