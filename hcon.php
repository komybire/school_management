<html>
<head>
<style>
/* Table Styles */
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

/* Table Header Styles */
thead {
  background-color: #007bff; /* Blue header color */
  color: #fff; /* White text color */
}
table,th,td{
	text-align:center;
	
}
thead th {
  padding: 12px 15px;
  text-align: left;
  font-weight: bold;
}
th{
	background-color:lightblue;
}
/* Table Body Styles */
tbody tr {
  border-bottom: 1px solid #ddd;
}

tbody td {
  padding: 10px 15px;
}

tbody tr:nth-of-type(even) {
  background-color: #f5f5f5; /* Alternating row color */
}

tbody tr:hover {
  background-color: #f0f0f0; /* Hover effect */
}

/* Table Footer Styles */
tfoot {
  background-color: #f5f5f5;
  font-weight: bold;
}

tfoot td {
  padding: 10px 15px;
  text-align: right;
}

/* Heading Styles */
h1 {
  text-align: center;
  color: #333;
  font-size: 2.5rem;
  margin-top: 2rem;
  margin-bottom: 1.5rem;
}
body{
	text-align:center;
}
</style>
</head>
<body>
<h1>Home Room Teacher</h1>
</body>
</html>
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

// Create the first table
$sql = "CREATE TABLE IF NOT EXISTS homeroom_teachers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    class VARCHAR(50) NOT NULL,
    teacher_name VARCHAR(100) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table homeroom_teachers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Store the form data in the table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class = $_POST["class"];
    $teacherName = $_POST["teacherName"];

    // Check if a record with the same class already exists
    $checkSql = "SELECT * FROM homeroom_teachers WHERE class = '$class'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Delete the existing record with the same class
        $deleteSql = "DELETE FROM homeroom_teachers WHERE class = '$class'";
        if (mysqli_query($conn, $deleteSql)) {
            echo "Existing record with class $class deleted successfully";
        } else {
            echo "Error deleting existing record: " . mysqli_error($conn);
        }
    }

    // Insert the new data
    $insertSql = "INSERT INTO homeroom_teachers (class, teacher_name)
            VALUES ('$class', '$teacherName')";

    if (mysqli_query($conn, $insertSql)) {
        echo "";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    // Display the data in a table
    echo "<h2>Homeroom Teachers</h2>";
    echo "<table>";
    echo "<tr><th>Class</th><th>Teacher Name</th></tr>";
    $sql = "SELECT * FROM homeroom_teachers";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["class"] . "</td><td>" . $row["teacher_name"] . "</td></tr>";
        }
    }
    echo "</table>";
}

// Close the database connection
mysqli_close($conn);
?>