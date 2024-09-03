<html>
<head>
    <title>Change Username and Password</title>
	<style>
	/* Basic form styling */
form {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}
h2{
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

input[type="change"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="change"]:hover {
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
    <div class="container">
        <h2>Change Username and Password</h2>
        <form id="changeForm" method="POST" action="updates.php">
            <label for="currentUsername">Current Username:</label>
            <input type="text" id="currentUsername" name="currentUsername" required>
            <label for="newUsername">New Username:</label>
            <input type="text" id="newUsername" name="newUsername" required>
            <label for="currentPassword">Current Password:</label>
            <input type="password" id="currentPassword" name="currentPassword" required>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            <button type="change">Change</button>
        </form>
    </div>
    <script>
        document.getElementById("changeForm").addEventListener("change", function(event) {
            event.preventDefault(); // Prevent form submission

            var currentUsername = document.getElementById("currentUsername").value;
            var newUsername = document.getElementById("newUsername").value;
            var currentPassword = document.getElementById("currentPassword").value;
            var newPassword = document.getElementById("newPassword").value;

            // Make an AJAX request to the server to update the username and password
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "updates.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                }
            };
            xhr.send(
                "currentUsername=" + encodeURIComponent(currentUsername) +
                "&newUsername=" + encodeURIComponent(newUsername) +
                "&currentPassword=" + encodeURIComponent(currentPassword) +
                "&newPassword=" + encodeURIComponent(newPassword)
            );
        });
    </script>
</body>
</html>