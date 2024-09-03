
<html>
<head>
    <title>Student Results</title>
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .result-item {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Results</h2>
        <form id="results-form" action="conectionresult_php.php">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="middleName">Middle Name:</label>
            <input type="text" id="middleName" name="middleName" required>

            <label for="quiz">Quiz Result:</label>
            <input type="number" id="quiz" name="quiz" min="0" max="100" required>

            <label for="midterm">Midterm Result:</label>
            <input type="number" id="midterm" name="midterm" min="0" max="100" required>

            <label for="assignment">Assignment Result:</label>
            <input type="number" id="assignment" name="assignment" min="0" max="100" required>

            <label for="final">Final Result:</label>
            <input type="number" id="final" name="final" min="0" max="100" required>

            <input type="submit" value="Submit">
        </form>

        <div id="result-container" class="result-container" style="display: none;">
            <h3>Student Result:</h3>
            <div id="result-items"></div>
        </div>
    </div>

    <script>
        var form = document.getElementById('results-form');
        var resultContainer = document.getElementById('result-container');
        var resultItems = document.getElementById('result-items');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            var firstName = document.getElementById('firstName').value;
            var middleName = document.getElementById('middleName').value;
            var quiz = parseInt(document.getElementById('quiz').value);
            var midterm = parseInt(document.getElementById('midterm').value);
            var assignment = parseInt(document.getElementById('assignment').value);
            var final = parseInt(document.getElementById('final').value);

            var total = quiz + midterm + assignment + final;

            // Check if the student name is in the database (replace with your logic to check the database)
            var isValidStudent = checkDatabase(firstName, middleName);

            if (isValidStudent) {
                // Store the results in the database (replace with your logic to store data in the database)
                storeResults(firstName, middleName, quiz, midterm, assignment, final, total);

                // Display the result to the user
                displayResult(firstName, middleName, quiz, midterm, assignment, final, total);
            } else {
                alert('Invalid student');
            }
        });

        function checkDatabase(firstName, middleName) {
            // Replace with your logic to check the database if the student exists
            // Return true if the student exists, otherwise false
            return true;
        }

        function storeResults(firstName, middleName, quiz, midterm, assignment, final, total) {
            // Replace with your logic to store the results in the database
        }

        functiondisplayResult(firstName, middleName, quiz, midterm, assignment, final, total) {
            resultItems.innerHTML = '';
            resultItems.innerHTML += '<div class="result-item">First Name: ' + firstName + '</div>';
            resultItems.innerHTML += '<div class="result-item">Middle Name: ' + middleName + '</div>';
            resultItems.innerHTML += '<div class="result-item">Quiz: ' + quiz + '</div>';
            resultItems.innerHTML += '<div class="result-item">Midterm: ' + midterm + '</div>';
            resultItems.innerHTML += '<div class="result-item">Assignment: ' + assignment + '</div>';
            resultItems.innerHTML += '<div class="result-item">Final: ' + final + '</div>';
            resultItems.innerHTML += '<div class="result-item">Total: ' + total + '</div>';

            resultContainer.style.display = 'block';
        }
    </script>
</body>
</html>