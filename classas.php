<?php
 $servername = "localhost"; 
 $username = "root"; 
 $password = "";
 $dbname = "school_db";
 $con = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$con) { die('Could not connect: ' . mysqli_connect_error()); 
 } $sql = "CREATE TABLE teacher_assignment ( TeacherName VARCHAR(15), Subject VARCHAR(15), Class VARCHAR(15),Program VARCHAR(15) )"; 
 if (mysqli_query($con, $sql)) { echo "Table 'teacher_assignment' is created successfully";
 } else
	 {
		 echo "Error creating table: " . mysqli_error($con); 
		 }
		 mysqli_close($con); 
		 ?>