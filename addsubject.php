
<html>
<head>
    <title>Add Subject</title>
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
<body>
    <h2>Add Subject</h2>
    <div class="container">
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" name="description" required>
            </div>

            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>