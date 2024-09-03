<?php
require 'connect.php';
session_start(); // Start the session

if (!empty($_SESSION["id"])) {
    $id = $_SESSION['id'];
    $result = mysqli_query($con, "SELECT * FROM students WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: studentlogin.php"); // Enclose the URL in double quotes
    exit(); // Terminate the script after redirecting
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
</head>
<body>
<h1>welcome</h1>
<a href="logout.php">logout</a>
</body>
</html>