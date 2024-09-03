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
<h1>Student Result Informations </h1>
</body>
</html>
<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $quiz = $_POST['quiz'];
    $midterm = $_POST['midterm'];
    $assignment = $_POST['assignment'];
    $final = $_POST['final'];
    $subject = $_POST['subject']; // New field

    // Calculate the total
    $total = $quiz + $midterm + $assignment + $final;

    $sql = "INSERT INTO student_results (firstName, middleName, quiz, midterm, assignment, final, total, subject)
            VALUES ('$firstName', '$middleName', '$quiz', '$midterm', '$assignment', '$final', '$total', '$subject')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data inserted successfully!");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display data in table format
$sql_select = "SELECT * FROM student_results";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>First Name</th><th>Middle Name</th><th>Quiz</th><th>Midterm</th><th>Assignment</th><th>Final</th><th>Total</th><th>Subject</th><th>Action</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".(isset($row['firstName']) ? $row['firstName'] : "")."</td>";
        echo "<td>".(isset($row['middleName']) ? $row['middleName'] : "")."</td>";
        echo "<td>".$row['quiz']."</td>";
        echo "<td>".$row['midterm']."</td>";
        echo "<td>".$row['assignment']."</td>";
        echo "<td>".$row['final']."</td>";
        echo "<td>".$row['total']."</td>";
        echo "<td>".$row['subject']."</td>";
        echo "<td><a href='update.php?id=".$row['id']."'>Update</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
