
<html>
<head>
    <title>Add Teacher</title>
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
<h2>Add Teacher To Subject</h2>
    <div class="container">
        <form method="POST" action="add_teacher.php">
            <div class="form-group">
                <label for="teacher">Teacher:</label>
                <input type="text" id="teacher" name="teacher" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="class">Class:</label>
                <input type="text" id="class" name="class" required>
            </div>

            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>