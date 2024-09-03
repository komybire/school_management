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


$sql = "SELECT id, FirstName, MiddleName, LastName, Gender, Program, Age, parentname, parentPhone, address FROM Students WHERE grade = '12th'";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Create an array to store students assigned to classes
        $students12A = array();
        $students12B = array();

        // Fetch all rows and randomly assign to classes
        while ($row = mysqli_fetch_assoc($result)) {
            $classSection = (rand(0, 1) == 0) ? '12A' : '12B';

            // Assign student to class section
            if ($classSection == '12A') {
                $students12A[] = $row;
            } else {
                $students12B[] = $row;
            }
        }

      
        foreach ($students12A as $student) {
            $insertSql = "INSERT INTO grade12table (FirstName, MiddleName, LastName, Gender, Program, Age, parentname, parentPhone, address, grade)
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
                              '12A'
                          )";

            if (mysqli_query($conn, $insertSql)) {
                echo "";
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }

        // Store students assigned to class 12B in the "grade12table" table
        foreach ($students12B as $student) {
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
                              '12B'
                          )";

            if (mysqli_query($conn, $insertSql)) {
                echo "";
            } else {
                echo "Error inserting data: " . mysqli_error($conn);
            }
        }

        echo "Data storage process completed.";
    } else {
        echo "No records found in the 'Students' table for grade 12.";
    }
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>