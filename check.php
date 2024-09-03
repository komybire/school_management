
<html>
<head>
    <title>Student Result Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #result-table {
            margin-top: 50px;
        }
    </style>
    <script>
        window.onload = function() {
            document.getElementById('login-form').onsubmit = function(e) {
                e.preventDefault();
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;

                // Send an AJAX request to result.php
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'result.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById('result-table').innerHTML = xhr.responseText;
                    }
                };
                xhr.send('username=' + username + '&password=' + password);
            };
        };
    </script>
</head>
<body>
    <h1>Student Result Checker</h1>
    <form id="login-form" method="post" action="display_student_results.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Check Result">
    </form>
    <div id="result-table"></div>
</body>
</html>