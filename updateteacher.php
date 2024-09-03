<?php
session_start();
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

// Check if the required form fields are set
if (isset($_POST['currentUsername'], $_POST['currentPassword'], $_POST['newUsername'], $_POST['newPassword'])) {
    $currentUsername = $_POST['currentUsername'];
    $currentPassword = $_POST['currentPassword'];
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Validate current username and password using prepared statements
    $selectSql = "SELECT * FROM teachers WHERE username = ? AND password = ?";
    $stmtSelect = $conn->prepare($selectSql);
    $stmtSelect->bind_param("ss", $currentUsername, $currentPassword);
    $stmtSelect->execute();
    $result = $stmtSelect->get_result();

    if ($result->num_rows === 1) {
        // Retrieve the previous username and password
        $row = $result->fetch_assoc();
        $previousUsername = $row['Username'];
        $previousPassword = $row['password'];

        // Update credentials only if the username and password match the previous values
        if ($previousUsername === $currentUsername && $previousPassword === $currentPassword) {
            // Update username and password using prepared statements
            $updateSql = "UPDATE teachers SET username = ?, password = ? WHERE username = ? AND password = ?";
            $stmtUpdate = $conn->prepare($updateSql);
            $stmtUpdate->bind_param("ssss", $newUsername, $newPassword, $currentUsername, $currentPassword);

            if ($stmtUpdate->execute()) {
                echo "Username and password updated successfully.";
            } else {
                echo "Error updating credentials: " . $stmtUpdate->error;
            }

            $stmtUpdate->close(); // Close the update statement
        } else {
            echo "Invalid current username or password.";
        }
    } else {
        echo "Invalid current username or password.";
    }

    $stmtSelect->close(); // Close the select statement
} else {
    echo "Some form fields are missing.";
}

$conn->close();
?>