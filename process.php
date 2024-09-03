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
<h1>Students Registration Informations</h1>
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $program = $_POST['program'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $parentName = $_POST['parentName'];
    $parentPhone = $_POST['parentphone'];
    $address = $_POST['address'];

    // Generate the username based on the first name and middle name
    $username = strtolower(substr($firstName, 0, 2) . str_replace(' ', '', $middleName));

    // Generate a random password for the student
    $password = generateRandomPassword();

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO students (firstname, middlename, lastname, gender, program, age, grade, parentname, parentphone, address, username, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssssssssssss", $firstName, $middleName, $lastName, $gender, $program, $age, $grade, $parentName, $parentPhone, $address, $username, $password);

        // Execute the statement
        if ($stmt->execute()) {
            //echo "<script>alert('Data inserted successfully!')</script>";
			header("Location: process.php");
        } else {
            echo "<script>alert('There was an error inserting data.')</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}

// Retrieve data from the database and display in table format
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "<th>" . ucfirst($key) . "</th>"; // Display column names as table headers
        }
        echo "<th>Actions</th>"; // Add a new column for actions
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
        echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a> 
        <a href='update.php?id=" . $row['id'] . "'>Update</a></td>";  // Add delete and update buttons
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data found in the database.";
}

// Close connection
$conn->close();

// Function to generate a random password
function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}


?>

<script>
function deleteRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
    // Add code here to perform delete action in the database
}

function updateRow(button) {
    var row = button.parentNode.parentNode;
    // Add code here to perform update action for the specific row
}
</script>