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
$sql = "CREATE TABLE teacherassign (
    teacher VARCHAR(15),
	subject VARCHAR(15),
	class VARCHAR(15)
)";

if ($con->query($sql) === TRUE) {
    echo "Table 'teacherassign ' is created successfully";
} else {
    echo "Error creating table: " . $con->error;
}


$con->close();
?>