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
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    // Prepare and execute the statement
    $stmt = $conn->prepare("UPDATE allsubject SET description=? WHERE subject=?");
    if ($stmt) {
        $stmt->bind_param("ss", $description, $subject);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Data updated successfully!')</script>";
        } else {
            echo "<script>alert('There was an error updating data.')</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
<html>
<head>
    <title>Edit Subject</title>
      <style>
        body {
            background-color: lightblue;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body >
<h2>Edit Subject</h2>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
        </div>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>