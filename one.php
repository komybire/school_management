
<html>
<head>
    <title>Student Result Entry</title>
<style>
        /* Apply some basic styling to the form elements */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
			
        }
h3 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body style="background:linear-gradient(45deg,#6ac1c5,#bda5ff);">

            <h3>Student Result</h3>
            <form method="post" action="aa.php">
			
            First Name:<input type="text" id="firstName" name="firstName" required>
            
            Middle Name:<input type="text" id="middleName" name="middleName" required>
		
            Subject:<input type="text" id="subject" name="subject" required>
            
               Quiz: <input type="number" id="quiz" name="quiz" min="0" max="10" required>
               
                Midterm:<input type="number" id="midterm" name="midterm" min="0" max="30" required>
              
                Assignment:<input type="number" id="assignment" name="assignment" min="0" max="10" required>
              
                Final:<input type="number" id="final" name="final" min="0" max="50" required><br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

