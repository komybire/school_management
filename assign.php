<!DOCTYPE html>
<html>
<head>
    <title>Teacher Assignment - Result</title>
    <style>
        body {
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 150px;
        }
    </style>
</head>
<body>
    <h1>Teacher Assignment - Result</h1>
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
    if (isset($_POST["teacherName"], $_POST["subject"], $_POST["class"], $_POST["program"])) {
        // Get form data
        $teacherName = $_POST['teacherName'];
        $subject = $_POST['subject'];
        $class = $_POST['class'];
        $program = $_POST['program'];

        // Validate form data
        $isValid = !empty($teacherName) && !empty($subject) && !empty($class) && !empty($program);

        if ($isValid) {
            // Save teacher assignment to database
            $sql = "INSERT INTO teacher_assignment (teachername, subject, class, program) VALUES ('$teacherName', '$subject', '$class', '$program')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Teacher assigned successfully.</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        } else {
            echo "<p>Invalid form submission. Please fill in all the fields.</p>";
        }
    }

    // Check if delete action is requested
    if (isset($_GET["action"]) && $_GET["action"] === "delete" && isset($_GET["id"])) {
        $id = $_GET["id"];
        // Delete the teacher assignment from the database
        $sql = "DELETE FROM teacher_assignment WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Teacher assignment deleted successfully.</p>";
        } else {
            echo "<p>Error deleting teacher assignment: " . $conn->error . "</p>";
        }
    }

    // Display teacher assignments in a table
    $sql = "SELECT * FROM teacher_assignment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr>";
        while ($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                echo "<th>" . ucfirst($key) . "</th>"; // Display column names as table headers
            }
            echo "<th>Actions</th>"; // Add a column for actions
            break; // Exit the foreach loop after displaying column headers once
        }
        echo "</tr>"; // Move the closing </tr> tag here

        // Display data rows
        $result->data_seek(0); // Reset result pointer to fetch data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            $id = isset($row['id']) ? $row['id'] : ''; // Check if 'id' key exists in the array
            echo "<td><a href='update.php?id=$id'>Update</a> | <a href='Delete.php?id=$id'>Delete</a></td>"; // Add update and delete links
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data found in the database.</p>";
    }

    // Close connection
    $conn->close();
    ?>

    <a href="teacherass.php">Go Back</a>
</body>
</html>