<?php
session_start();
include 'createdb.php'; // Include your database configuration

// Check if the required form fields are set
if (isset($_POST['currentUsername'], $_POST['currentPassword'], $_POST['newUsername'], $_POST['newPassword'])) {
    $currentUsername = $_POST['currentUsername'];
    $currentPassword = $_POST['currentPassword'];
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Validate current username and password using prepared statements
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $currentUsername, $currentPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Retrieve the previous username and password
        $row = $result->fetch_assoc();
        $previousUsername = $row['username'];
        $previousPassword = $row['password'];

        // Update credentials only if the username and password match the previous values
        if ($previousUsername === $currentUsername && $previousPassword === $currentPassword) {
            // Update username and password using prepared statements
            $updateSql = "UPDATE users SET username = ?, password = ? WHERE username = ? AND password = ?";
            $stmt = $conn->prepare($updateSql);
            $stmt->bind_param("ssss", $newUsername, $newPassword, $currentUsername, $currentPassword);

            if ($stmt->execute()) {
                // Redirect to success page
                header("Location: updates.php");
                exit;
            } else {
                echo "Error updating credentials: " . $conn->error;
            }
        } else {
            echo "Invalid current username or password.";
        }
    } else {
        echo "Invalid current username or password.";
    }
} else {
    echo "Some form fields are missing.";
}

$stmt->close();
$conn->close();