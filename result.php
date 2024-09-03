<?php
// Assuming you have a database connection established
$hostname = 'localhost';
$username_db = 'root';
$password_db = '';
$database = 'school_db';

$connection = mysqli_connect($hostname, $username_db, $password_db, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the username and password exist in the $_POST array
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password from the AJAX request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to retrieve the student's result
    // Modify this query according to your table structure
    $query = "SELECT * FROM students WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result) { // Check if the query executed successfully
        if (mysqli_num_rows($result) > 0) {
            // Display the result in a table format
            echo "<table>";
            echo "<tr><th>Subject</th><th>Score</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['score'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Query failed: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($connection);
?>