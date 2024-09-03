<html>
<head>
<style>
/* Table Styles */
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

/* Table Header Styles */
thead {
  background-color: #007bff; /* Blue header color */
  color: #fff; /* White text color */
}
table,th,td{
	text-align:center;
	
}
thead th {
  padding: 12px 15px;
  text-align: left;
  font-weight: bold;
}
th{
	background-color:lightblue;
}
/* Table Body Styles */
tbody tr {
  border-bottom: 1px solid #ddd;
}

tbody td {
  padding: 10px 15px;
}

tbody tr:nth-of-type(even) {
  background-color: #f5f5f5; /* Alternating row color */
}

tbody tr:hover {
  background-color: #f0f0f0; /* Hover effect */
}

/* Table Footer Styles */
tfoot {
  background-color: #f5f5f5;
  font-weight: bold;
}

tfoot td {
  padding: 10px 15px;
  text-align: right;
}

/* Heading Styles */
h1 {
  text-align: center;
  color: #333;
  font-size: 2.5rem;
  margin-top: 2rem;
  margin-bottom: 1.5rem;
}
body{
	text-align:center;
}
</style>
</head>
<body>

</body>
</html>
<?php
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

    if(isset($_GET['firstName']) && isset($_GET['middleName'])){
        $firstName = $_GET['firstName'];
        $middleName = $_GET['middleName'];

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

            if ($subjectCount > 0) {
                $averageScore = $totalScore / $subjectCount;
                echo "<p>Average Score: ".$averageScore."</p>";

                $rankSql = "SELECT COUNT(*) AS rank FROM (SELECT firstName, middleName, AVG(total) AS avg_total FROM student_results GROUP BY firstName, middleName) AS ranks WHERE avg_total > $averageScore";
                $rankResult = $conn->query($rankSql);
                $rankRow = $rankResult->fetch_assoc();
                $rank = $rankRow['rank'] + 1;

                echo "<p>Rank: ".$rank."</p>";

                $updateSql = "UPDATE studentinformation SET averageScore=$averageScore, rank=$rank WHERE firstName='$firstName' AND middleName='$middleName'";
               
            } else {
                echo "No results found for the student.";
            }
        } else {
            echo "Student not found in the database.";
        }
    }

    $conn->close();
    ?>