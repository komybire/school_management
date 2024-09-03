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
$sql = "CREATE TABLE allsubject (
    subject VARCHAR(15),
	description VARCHAR(15)
)";

if ($con->query($sql) === TRUE) {
    echo "Table 'allsubject ' is created successfully";
} else {
    echo "Error creating table: " . $con->error;
}


$con->close();
?>