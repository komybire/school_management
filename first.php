<?php
// Database connection details
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database = "school_db";

// Create database connection
$conn = new mysqli($servername, $db_username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM students WHERE username = ? AND password = ? AND firstname = ? AND middlename = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $password, $firstname, $middlename);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Redirect the user to another page
        header("Location: dashboard.php");
        exit;
    } else {
        // Display an error message
        echo "<script>alert('Invalid username, password, firstname, or middlename');</script>";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<html>
<head>
    <title>Student Results</title>
   <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    h2 {
      color: #333;
      text-align: center;
      margin-top: 50px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body style="background-color:lightblue;">
    <h2>Enter Student Details</h2>
    <form method="GET" action="re.php">
	    <label for="firstName">Username:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>
        
        <label for="middleName">Password:</label>
        <input type="text" name="middleName" id="middleName" required><br><br>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>
        
        <label for="middleName">Middle Name:</label>
        <input type="text" name="middleName" id="middleName" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>