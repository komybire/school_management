<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];


    $sql = "SELECT * FROM student_results WHERE firstName='$firstName' AND middleName='$middleName'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Student Results for $firstName $middleName:</h2>";
        echo "<table>";
        echo "<tr><th>Subject</th><th>Result</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['subject']."</td><td>".$row['result']."</td></tr>";
        }

        echo "</table>";


        $averageResult = $conn->query("SELECT AVG(result) as avg_result FROM student_results WHERE firstName='$firstName' AND middleName='$middleName'");
        $avgRow = $averageResult->fetch_assoc();
        echo "<p>Average Result: ".$avgRow['avg_result']."</p>";


        $rank = $conn->query("SELECT COUNT(DISTINCT firstName, middleName) as rank FROM student_results WHERE AVG(result) > (SELECT AVG(result) FROM student_results WHERE firstName='$firstName' AND middleName='$middleName')");
        $rankRow = $rank->fetch_assoc();
        echo "<p>Rank: ".$rankRow['rank']."</p>";
    } else {
        echo "No records found for the student.";
    }
}

$conn->close();
?>
