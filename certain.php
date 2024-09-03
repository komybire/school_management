<html>
<head>
<style>
body {
    margin: 0;
    padding: 0;
    background-image: url('block.jpg'); /* Replace 'your_image_url.jpg' with the actual URL of your image */
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
}

table {
    margin: 50px auto;
    border-collapse: collapse;
    width: 80%;
    background-color: white;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e9e9e9;
}
h1{
  text-align:center;
    background-color:white;
}
</style>
</head>
<body>
<h1>Yearly Plan</h1>
</body>
</html>
<?php
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $first_reg_date = mysqli_real_escape_string($conn, $_POST['first_reg_date']);
    $first_open_date = mysqli_real_escape_string($conn, $_POST['first_open_date']);
    $first_midterm = mysqli_real_escape_string($conn, $_POST['first_midterm']);
    $first_final_date = mysqli_real_escape_string($conn, $_POST['first_final_date']);
    $first_close_date = mysqli_real_escape_string($conn, $_POST['first_close_date']);

    // Insert data into the database
    $sql = "INSERT INTO semester_dates (semester, registration_date, opening_date, midterm_schedule, final_exam_date, closing_date)
            VALUES ('First Semester', '$first_reg_date', '$first_open_date', '$first_midterm', '$first_final_date', '$first_close_date')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $second_reg_date = mysqli_real_escape_string($conn, $_POST['second_reg_date']);
    $second_open_date = mysqli_real_escape_string($conn, $_POST['second_open_date']);
    $second_midterm = mysqli_real_escape_string($conn, $_POST['second_midterm']);
    $second_final_date = mysqli_real_escape_string($conn, $_POST['second_final_date']);
    $second_close_date = mysqli_real_escape_string($conn, $_POST['second_close_date']);

    // Insert data into the database for the second semester
    $sql = "INSERT INTO semester_dates (semester, registration_date, opening_date, midterm_schedule, final_exam_date, closing_date)
            VALUES ('Second Semester', '$second_reg_date', '$second_open_date', '$second_midterm', '$second_final_date', '$second_close_date')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<?php
// Retrieve data from the database
$sql = "SELECT * FROM semester_dates";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Semester</th><th>Registration Date</th><th>School Opening Date</th><th>Midterm Exam Schedule</th><th>Final Exam Date</th><th>Closing Date</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['semester'] . "</td>";
        echo "<td>" . $row['registration_date'] . "</td>";
        echo "<td>" . $row['opening_date'] . "</td>";
        echo "<td>" . $row['midterm_schedule'] . "</td>";
        echo "<td>" . $row['final_exam_date'] . "</td>";
        echo "<td>" . $row['closing_date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found";
}

$conn->close();
?>
