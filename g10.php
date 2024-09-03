<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the "Students" table for grade 10
$sql = "SELECT id, FirstName, MiddleName, LastName, Gender, Program, Age, parentname, parentPhone, address FROM Students WHERE grade = '10th'";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Create an array to store students assigned to classes
        $students9A = array();
        $students9B = array();

        // Fetch all rows and randomly assign to classes
        while ($row = mysqli_fetch_assoc($result)) {
            $classSection = (rand(0, 1) == 0) ? '10A' : '10B';

            // Assign student to class section
            if ($classSection == '10A') {
                $students10A[] = $row;
            } else {
                $students10B[] = $row;
            }
        }

        // Store students assigned to class 10A in the "grade10table" table
        foreach ($students10A as $student) {
            $insertSql = "INSERT INTO grade10table (FirstName, MiddleName, LastName, Gender, Program, Age, parentname, parentPhone, address, grade)
                          VALUES (
                              '{$student['FirstName']}',
                              '{$student['MiddleName']}',
                              '{$student['LastName']}',
                              '{$student['Gender']}',
                              '{$student['Program']}',
                              {$student['Age']},
                              '{$student['parentname']}',
                              '{$student['parentPhone']}',
                              '{$student['address']}',
                              '10A'
                          )";

            if (mysqli_query($conn, $insertSql)) {
                echo "";
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }

        // Store students assigned to class 10B in the "grade10table" table
        foreach ($students9B as $student) {
            $insertSql = "INSERT INTO grade10table (FirstName, MiddleName, LastName, Gender, Program, Age, parentname, parentPhone, address, grade)
                          VALUES (
                              '{$student['FirstName']}',
                              '{$student['MiddleName']}',
                              '{$student['LastName']}',
                              '{$student['Gender']}',
                              '{$student['Program']}',
                              {$student['Age']},
                              '{$student['parentname']}',
                              '{$student['parentPhone']}',
                              '{$student['address']}',
                              '10B'
                          )";

            if (mysqli_query($conn, $insertSql)) {
                echo "";
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }

        echo "Data storage process completed.";
    } else {
        echo "No records found in the 'Students' table for grade 10.";
    }
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>