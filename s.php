<!DOCTYPE html>
<html>
<head>
    <title>Student Results</title>
	 <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

    h2 {
      color: #333;
      text-align: center;
      margin-top: 50px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 8px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    <h2>Enter Student Details:</h2>
    <form method="GET" action="re.php">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br><br>
        
        <label for="middleName">Middle Name:</label>
        <input type="text" name="middleName" id="middleName" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
    
