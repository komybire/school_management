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
<h1>Students Informations  For Grade 12A And Grade 12B</h1>
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

// Select data from the "Students" table for grade 12
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

        // Display table headers
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Program</th>
                    <th>Age</th>
                    <th>Parent Name</th>
                    <th>Parent Phone</th>
                    <th>Address</th>
                    <th>Class Section</th>
                </tr>";

        // Output students assigned to class 12A
        foreach ($students12A as $student) {
            echo "<tr>
                    <td>" . $student["id"] . "</td>
                    <td>" . $student["FirstName"] . "</td>
                    <td>" . $student["MiddleName"] . "</td>
                    <td>" . $student["LastName"] . "</td>
                    <td>" . $student["Gender"] . "</td>
                    <td>" . $student["Program"] . "</td>
                    <td>" . $student["Age"] . "</td>
                    <td>" . $student["parentname"] . "</td>
                    <td>" . $student["parentPhone"] . "</td>
                    <td>" . $student["address"] . "</td>
                    <td>12A</td>
                </tr>";
        }

        // Output students assigned to class 12B
        foreach ($students12B as $student) {
            echo "<tr>
                    <td>" . $student["id"] . "</td>
                    <td>" . $student["FirstName"] . "</td>
                    <td>" . $student["MiddleName"] . "</td>
                    <td>" . $student["LastName"] . "</td>
                    <td>" . $student["Gender"] . "</td>
                    <td>" . $student["Program"] . "</td>
                    <td>" . $student["Age"] . "</td>
                    <td>" . $student["parentname"] . "</td>
                    <td>" . $student["parentPhone"] . "</td>
                    <td>" . $student["address"] . "</td>
                    <td>12B</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No records found in the 'Students' table for grade 12.";
    }
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>