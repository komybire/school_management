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
    $id = $_POST['id']; // Assuming you have an input field named 'id' in your form
    $firstName = $_POST['firstName'] ?? '';
    $middleName = $_POST['middleName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $program = $_POST['program'] ?? '';
    $age = $_POST['age'] ?? '';
    $grade = $_POST['grade'] ?? '';
    $parentName = $_POST['parentName'] ?? '';
    $parentPhone = $_POST['parentphone'] ?? '';
    $address = $_POST['address'] ?? '';

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("UPDATE students SET firstname=?, middlename=?, lastname=?, gender=?, program=?, age=?, grade=?, parentname=?, parentphone=?, address=? WHERE id=?");
    
    if ($stmt) {
        $stmt->bind_param("ssssssssssi", $firstName, $middleName, $lastName, $gender, $program, $age, $grade, $parentName, $parentPhone, $address, $id);

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
        <a href='updatess.php?id=" . $row['id'] . "'>Update</a></td>"; // Add delete and update links
    }
    echo "</table>";
} else {
    echo "No data found in the database.";
}

// Close connection
$conn->close();
?>

<form method="POST" action="">
    <!-- Your form fields -->
    <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>">
    First Name:<input type="text" name="firstName" value="<?php echo $id ?? ''; ?>"><br>
    Middle Name:<input type="text" name="middleName" value="<?php echo $middleName ?? ''; ?>"><br>
    Last Name:<input type="text" name="lastName" value="<?php echo $lastName ?? ''; ?>"><br>
    gender:<input type="text" name="gender" value="<?php echo $gender ?? ''; ?>"><br>
    program:<input type="text" name="program" value="<?php echo $program ?? ''; ?>"><br>
    age:<input type="text" name="age" value="<?php echo $age ?? ''; ?>"><br>
    grade:<input type="text" name="grade" value="<?php echo $grade ?? ''; ?>"><br>
    parentName:<input type="text" name="parentName" value="<?php echo $parentName ?? ''; ?>"><br>
    parentphone:<input type="text" name="parentphone" value="<?php echo $parentPhone ?? ''; ?>"><br>
    address:<input type="text" name="address" value="<?php echo $address ?? ''; ?>"><br>

    <!-- Save and Reset buttons -->
    <input type="submit" name="update" value="Save">
	  <button type="reset">Reset</button>
</form>