
<html>
<head>
    <title>Student Result Entry</title>
  <style>
        body {
            background-color: lightblue;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body >
    <div class="container">
        <h2>Student Result Entry</h2>
        <form id="search-form" action="p.php" style="color:white;">
            <label for="firstName" >First Name:</label>
            <input type="text" id="firstName" name="firstName"placeholder="First Name" required><br><br>
            <label for="middleName">Middle Name:</label>
            <input type="text" id="middleName" name="middleName" placeholder="Middle Name"required><br><br>
            <button type="submit">Search</button>
        </form>

        

</body>
</html>




