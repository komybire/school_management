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

// Select data from the "grade9table" table for grade 9A
$sql = "SELECT FirstName, MiddleName, LastName, Grade FROM grade9table WHERE Grade = '9A'";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
    <title>Grade 9A Students</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Grade 9A Students</h1>
    <table>
	
        <tr>
            <th style="text-align:center; background-color:lightblue;">Grade 9A Student Name</th>
            
        </tr>
        <table>
    <tr >
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Grade</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr >";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['MiddleName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Grade'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No Grade 9A students found.</td></tr>";
    }
    ?>
</table>
    

    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>