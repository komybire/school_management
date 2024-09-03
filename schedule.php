<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Dates</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
		td{
			 background-color:white;
		}
		h1{
			text-align:center;
		}
    </style>
</head>
<body style="background-color:lightblue;">
    <h1>Yearly Schedule</h1>
    <form action="certain.php" method="post">
        <table>
            <tr>
                <th>Semester</th>
                <th>Registration Date</th>
                <th>School Opening Date</th>
                <th>Midterm Exam Schedule</th>
                <th>Final Exam Date</th>
                <th>Closing Date</th>
            </tr>
            <tr>
                <td>First Semester</td>
                <td><input type="date" name="first_reg_date"></td>
                <td><input type="date" name="first_open_date"></td>
                <td><input type="date" name="first_midterm"></td>
                <td><input type="date" name="first_final_date"></td>
                <td><input type="date" name="first_close_date"></td>
            </tr>
            <tr>
                <td>Second Semester</td>
                <td><input type="date" name="second_reg_date"></td>
                <td><input type="date" name="second_open_date"></td>
                <td><input type="date" name="second_midterm"></td>
                <td><input type="date" name="second_final_date"></td>
                <td><input type="date" name="second_close_date"></td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>
</body>
</html>