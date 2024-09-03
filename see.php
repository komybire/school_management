<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['firstName']) && isset($_POST['middleName'])) {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];

        // Check if the student already exists in the database
        $checkSql = "SELECT * FROM studentinformation WHERE firstName='$firstName' AND middleName='$middleName'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows == 0) {
            // Insert the student's first name and middle name into the database
            $insertStudentSql = "INSERT INTO studentinformation (firstName, middleName) VALUES ('$firstName', '$middleName')";
            if ($conn->query($insertStudentSql) === TRUE) {
                echo "Student information stored in the database.<br>";

                // Retrieve student details from the database
                $sql = "SELECT * FROM student_results WHERE firstName='$firstName' AND middleName='$middleName'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<h2>Student Details:</h2>";
                    echo "<p>Name: " . $firstName . " " . $middleName . "</p>";

                    echo "<table border='1'>";
                    echo "<tr><th>Subject</th><th>Quiz</th><th>Midterm</th><th>Assignment</th><th>Final</th><th>Total</th></tr>";

                    $totalScore = 0;
                    $subjectCount = 0;

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['subject']."</td>";
                        echo "<td>".$row['quiz']."</td>";
                        echo "<td>".$row['midterm']."</td>";
                        echo "<td>".$row['assignment']."</td>";
                        echo "<td>".$row['final']."</td>";
                        echo "<td>".$row['total']."</td>";
                        $totalScore += $row['total'];
                        $subjectCount++;
                        echo "</tr>";
                    }

                    echo "</table>";

                    // Calculate average score
                   if ($subjectCount > 0) {
                        $averageScore = $totalScore / $subjectCount;
                        echo "<p>Average Score: ".$averageScore."</p>";

                        // Assign rank based on average score
                        $rankSql = "SELECT COUNT(*) AS rank FROM (SELECT firstName, middleName, AVG(total) AS avg_total FROM student_results GROUP BY firstName, middleName) AS ranks WHERE avg_total > $averageScore";
                        $rankResult = $conn->query($rankSql);
                        $rankRow = $rankResult->fetch_assoc();
                        $rank = $rankRow['rank'] + 1;

                        echo "<p>Rank: ".$rank."</p>";

                        echo "This is your result.";
                        }
                    } else {
                        echo "No results found for the student.";
                    }
                
}
$conn->close();
			
		
?>