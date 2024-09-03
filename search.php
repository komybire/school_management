
<?php
// Assuming you have a database connection already established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_db";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['searchName'])) {
    $searchName = $_GET['searchName'];

    // Perform database query
    // Assuming you are using MySQLi for database operations

    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "SELECT * FROM students WHERE firstname = '$searchName'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any rows were found
    if ($result->num_rows > 0) {
        // Generate the table form
        $table = '<table>';
        $table .= '<tr><th>firstname</th><th>middlename</th><th>lastname</th><th>class</th></tr>';

        // Fetch and display the student data
        while ($row = $result->fetch_assoc()) {
            $table .= '<tr>';
            $table .= '<td>' . $row['firstname'] . '</td>';
            $table .= '<td>' . $row['middlename'] . '</td>';
            $table .= '<td>' . $row['lastname'] . '</td>';
            $table .= '<td>' . $row['class'] . '</td>';
            $table .= '</tr>';
        }

        $table .= '</table>';

        // Display the table
        echo $table;
    } else {
        // Display a message if no student found
        echo 'No student found with that name.';
    }

    $conn->close();
    exit;
}
?>
<html>
<head>
    <title>Student Search</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 0 auto;
        }
        label, input {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = event.target;
            const searchName = form.elements.searchName.value;

            // Send an AJAX request to the server
            fetch('search.php?searchName=' + searchName)
                .then(response => response.text())
                .then(data => {
                    // Display the result in the result div
                    document.getElementById('result').innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
	<script>
	document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = event.target;
    const searchName = form.elements.searchName.value;

    // Send an AJAX request to the server
    fetch('search.php?searchName=' + searchName)
        .then(response => response.text())
        .then(data => {
            // Display the result in the result div
            document.getElementById('result').innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
	</script>
</head>
<body>
    <h1>Student Search</h1>
    <form id="searchForm">
        <label for="searchName">Search by Name:</label>
        <input type="text" id="searchName" name="searchName">
        <input type="submit" value="Search">
    </form>
    <div id="result"></div>
</body>
</html>