<?php
// Assuming you have a database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'school_db';

// Connect to the database
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username and new password from the request
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];

    // Check if the username exists in the database
    $stmt = $conn->prepare("SELECT * FROM admininfo WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, update the password in the database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateStmt = $conn->prepare("UPDATE admininfo SET password = ? WHERE username = ?");
        $updateStmt->bind_param("ss", $hashedPassword, $username);
        $updateResult = $updateStmt->execute();

        if ($updateResult) {
            // Password updated successfully
            echo json_encode(['success' => true]);
        } else {
            // Error updating password
            echo json_encode(['success' => false]);
        }
    } else {
        // User not found
        echo json_encode(['success' => false]);
    }
}
?>
