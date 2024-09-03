<?php
// Assuming you have a database connection setup

// Retrieve the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the username and password (you may use more secure methods)
if ($username === 'teacher' && $password === 'password') {
    // Redirect to the assessment page if the username and password are correct
    header("Location: assessment.php");
    exit;
} else {
    // Redirect to the login page with an error message if the username or password is incorrect
    header("Location: index.php?error=1");
    exit;
}
?>
<html>
<head>
	<title>Assessment System</title>
<style>
.container {
	width: 300px;
	margin: 0 auto;
	padding: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

h2 {
	text-align: center;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="submit"] {
	width: 100%;
	padding: 10px;
	border: none;
	border-radius: 5px;
	background-color: #4CAF50;
	color: #fff;
	cursor: pointer;
}
</style>
</head>
<body>
	<div class="container">
		<h2>Assessment System</h2>
		<form action="login.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>

			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>