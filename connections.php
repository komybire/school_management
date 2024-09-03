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
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

     $username = strtolower(substr($firstName, 0, 2) . str_replace(' ', '', $middleName));

    // Generate a random password for the student
    $password = generateRandomPassword();
	
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO Teachers (FirstName, MiddleName, LastName, Email, Age, Phone, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	    if ($stmt) {
    $stmt->bind_param("ssssssss", $firstName, $middleName, $lastName, $email, $age, $phone, $username, $password);

if ($stmt->execute()) {
            //echo "<script>alert('Data inserted successfully!')</script>";
			header("Location: teacher.php");
			echo "<script>alert('Data inserted successfully!')</script>";
        } else {
            echo "<script>alert('There was an error inserting data.')</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}
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