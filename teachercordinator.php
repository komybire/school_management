


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
        <h2>Home Room Teacher</h2>
        <form method="post" action="display_student_results.php">
        <label for="firstName">Student First Name:</label>
        <input type="text" name="firstName" id="firstName" required>
        <label for="middleName">Student Middle Name:</label>
        <input type="text" name="middleName" id="middleName" required>
        <input type="submit" value="Search Student">
    </form>

        

</body>
</html>





