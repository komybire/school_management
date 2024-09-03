
<html>
<head>
    <title>Reset Password</title>
	<style>
	/* Basic form styling */
form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}
h1{
	text-align:center;
}
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* Additional form styling */

/* Styling for form sections or fieldsets */
fieldset {
  margin-bottom: 20px;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 5px;
}

legend {
  font-weight: bold;
  margin-bottom: 10px;
}

/* Styling for form validation/error messages */
.error-message {
  color: red;
  margin-top: 5px;
}

/* Styling for form success messages */
.success-message {
  color: green;
  margin-top: 5px;
}
	</style>
</head>
<body  style="background-color:lightblue;">
    <h1>Reset Password</h1>
    <form action="changepass.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Change Password">
    </form>
</body>
</html>