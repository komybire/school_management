
<html>
<head>
    <title>View Staff Members</title>
    <style>
       /* General Styles */
body {
  font-family: Arial, sans-serif;
  padding: 20px;
  margin: 0;
  background-color: #f4f4f4;
}

h2 {
  margin-top: 0;
  text-align: center;
  color: #333;
}

/* Staff Card Styles */
.staff-card {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease-in-out;
}

.staff-card:hover {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.staff-card h3 {
  margin-top: 0;
  color: #333;
}

.staff-card p {
  margin: 5px 0;
  color: #666;
}

.staff-card p strong {
  color: #333;
}

/* Responsive Styles */
@media (max-width: 768px) {
  body {
    padding: 10px;
  }

  .staff-card {
    padding: 15px;
  }
}
    </style>
</head>
<body>
    <h2>Staff Members</h2>

    <?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch all staff members from the database
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='staff-card'>";
            echo "<h3>ID: " . $row["id"] . "</h3>";
            echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Position:</strong> " . $row["position"] . "</p>";
            echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No staff members found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>