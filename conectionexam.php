<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this if your MySQL username is different
$password = ""; // Change this if you have set a password for your MySQL server
$dbname = "school_db"; // Change this to the name of your database

try {
    
    // Check if all required POST data is set
    if (
        isset($_POST['firstname']) &&
        isset($_POST['middlename']) &&
        isset($_POST['lastname']) &&
        isset($_POST['subject']) &&
        isset($_POST['quiz']) &&
        isset($_POST['test']) &&
        isset($_POST['assignment']) &&
        isset($_POST['mid_exam']) &&
        isset($_POST['final_exam'])
    ) {
        // Extract values from POST data
        $firstName = $_POST['firstname'];
        $middleName = $_POST['middlename'];
        $lastName = $_POST['lastname'];
        $subject = $_POST['subject'];
        $quizScore = $_POST['quiz'];
        $testScore = $_POST['test'];
        $assignment = $_POST['assignment'];
        $midExamScore = $_POST['mid_exam'];
        $finalExamScore = $_POST['final_exam'];

        // Calculate total score
        $totalScore = $quizScore + $testScore + $assignment + $midExamScore + $finalExamScore;

        // Prepare SQL statement to insert scores into the table
        $stmt = $conn->prepare("INSERT INTO scores (first_name, middle_name, last_name, subject, quiz_score, test_score, assignment, mid_exam_score, final_exam_score, total_score) VALUES (:first_name, :middle_name, :last_name, :subject, :quiz_score, :test_score, :assignment, :mid_exam_score, :final_exam_score, :total_score)");
        // Bind parameters
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':middle_name', $middleName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':quiz_score', $quizScore);
        $stmt->bindParam(':test_score', $testScore);
        $stmt->bindParam(':assignment', $assignment);
        $stmt->bindParam(':mid_exam_score', $midExamScore);
        $stmt->bindParam(':final_exam_score', $finalExamScore);
        $stmt->bindParam(':total_score', $totalScore);
        // Execute the statement
        $stmt->execute();

        // Output success message
        echo "Scores stored successfully!";
    } else {
        // If any required POST data is missing, display an error message
        echo "Error: Please provide all required information and scores.";
    }
} catch (PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
