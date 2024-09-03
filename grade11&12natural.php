<html>
<head>
<style>
table {
background-color:white;
width:600;	
text-align:center;
position:center;
margin:auto;
}
h1{
	text-align:center;
}
</style>
</head>
<body background="s1.jpg">
<br><br>
<br><br>
<h1>Natural Grade 11 And Grade 12 Courses<h1>
</body>
</html>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement with the condition
$sql = "SELECT subject, description FROM allsubject WHERE description = 'natural' OR description = 'common'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "<th>" . ucfirst($key) . "</th>"; // Display column names as table headers
        }
        break; // Exit the foreach loop after displaying column headers once
    }
    echo "</tr>"; // Move the closing </tr> tag here

    // Display data rows
    $result->data_seek(0); // Reset result pointer to fetch data rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found in the database.";
}

// Close connection
$conn->close();
?>