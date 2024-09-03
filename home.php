
<html>
<head>
  
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
</head>
<body style=" background-color:lightblue;">
    <div class="container">
        <h1>Assign Home Room Teacher</h1>
        <form action="hcon.php" method="post">
            <label for="class">Class:</label>
            <select id="class" name="class" required>
                <option value="">Select a class</option>
                <option value="9A">Grade 9A</option>
                <option value="9B">Grade 9B</option>
                <option value="10A">Grade 10A</option>
                <option value="10B">Grade 10B</option>
				<option value="9A">Grade 11A</option>
                <option value="9B">Grade 11B</option>
                <option value="10A">Grade 12A</option>
                <option value="10B">Grade 12B</option>
            </select>

            <label for="teacherName">Teacher Name:</label>
            <input type="text" id="teacherName" name="teacherName">


            <input type="submit" value="Submit">

        </form>

    </div>
</body>
</html>