<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Retrieve form data
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $middleName = isset($_POST['middleName']) ? $_POST['middleName'] : '';
    $quiz = isset($_POST['quiz']) ? $_POST['quiz'] : '';
    $midterm = isset($_POST['midterm']) ? $_POST['midterm'] : '';
    $assignment = isset($_POST['assignment']) ? $_POST['assignment'] : '';
    $final = isset($_POST['final']) ? $_POST['final'] : '';

    // Step 3: Sanitize and validate input data (optional)
    // You can use functions like mysqli_real_escape_string() or prepared statements to sanitize and validate the data.

    // Step 4: Check if the student exists in the 'students' table
    $sql = "SELECT * FROM students WHERE firstName = '$firstName' AND middleName = '$middleName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Step 5: Insert data into the 'student_results' table
        $insertSql = "INSERT INTO student_results (firstName, middleName, quiz, midterm, assignment, final) VALUES ('$firstName', '$middleName', '$quiz', '$midterm', '$assignment', '$final')";

        if ($conn->query($insertSql) === TRUE) {
            echo "Data stored successfully.";
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    } else {
        echo "Student not found in the database.";
    }

    // Step 7: Close the database connection
    $conn->close();
}
?>
