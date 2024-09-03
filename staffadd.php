
<html>
<head>
    <title>Add Staff Member</title>
<style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
			background-color:lightblue;
        }

       

        form {
            width: 400px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
		h2{
			text-align:center;
		}
    </style>
</head>
<body>
        
        <form id="addStaffForm" action="staff.php" method="POST">
		<h2>Add Staff To School</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Add Staff">
        </form>
 
   
</body>
</html>
