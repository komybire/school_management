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
<h1>Teachers Informations</h1>
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

// Select data from the "Teachers" table
$sql = "SELECT FirstName, MiddleName, LastName, Email, Age, Phone FROM Teachers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Display table headers
    echo "<table border='1'>   
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone</th>
            </tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["FirstName"] . "</td>
                <td>" . $row["MiddleName"] . "</td>
                <td>" . $row["LastName"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Age"] . "</td>
                <td>" . $row["Phone"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No records found in the 'Teachers' table.";
}

// Close the database connection
mysqli_close($conn);
?>