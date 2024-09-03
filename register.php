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
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $stmt = $conn->prepare("INSERT INTO admininfo (Username, password, confirmpassword) VALUES (?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sss", $Username, $password, $confirmpassword);

        if ($stmt->execute()) {
            echo "<script>alert('Data inserted successfully!')</script>";
        } else {
            echo "<script>alert('There was an error inserting data.')</script>";
        }

        $stmt->close();
    } else {
        echo "Error in preparing SQL statement: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Form</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    <div class="login">
        <img src="bg.jpg" alt="login image" class="login__img">

        <form action="" method="POST" class="login__form">
            <h1 class="login__title">Register</h1>
           
            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="text" name="Username" placeholder=" " required class="login__input">
                        <label for="" class="login__label">Username</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" name="password" id="login-pass" placeholder=" " required class="login__input">
                        <label for="" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" name="confirmpassword" id="login-pass" placeholder=" " required class="login__input">
                        <label for="" class="login__label">Confirm Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>
            </div>

            <button class="login__button" type="submit">Register</button>
			<a style="color:white"href="adminlogin.php">Login</a>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>