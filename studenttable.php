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
$sql = "CREATE TABLE Students (
    id int AUTO_INCREMENT primary key,
    FirstName VARCHAR(15),
	MiddleName VARCHAR(15),
    LastName VARCHAR(15),
	sex char(4),
	Program VARCHAR(15),
    Age INT,
	grade VARCHAR(15),
	parentname VARCHAR(15),
	parentPhone VARCHAR(15),
	address VARCHAR(50),
	Username VARCHAR(50),
	password VARCHAR(50)
)";

if ($con->query($sql) === TRUE) {
    echo "Table 'students ' is created successfully";
} else {
    echo "Error creating table: " . $con->error;
}


$con->close();
?>