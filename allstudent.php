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
<h1>Students Informations</h1>
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

// Prepare and execute the SQL statement
$sql = "SELECT firstname, middlename, lastname, gender, grade FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "<th>" . ucfirst($key) . "</th>"; // Display column names as table headers
        }
        
        echo "</tr>";
        break; // Break after displaying column headers once
    }

    // Display data rows
    $result->data_seek(0); // Reset result pointer to fetch data rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>".$value."</td>";
        }
    }
    echo "</table>";
} else {
    echo "No data found in the database.";
}

// Close connection
$conn->close();
?>
