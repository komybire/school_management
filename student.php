<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration</title>
<link rel="stylesheet" href="new.css">

</head>
<body >
<div class="container">
  <form method="post" action="process.php">
    <h1>Student Registration</h1>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required><br><br>

    <label for="middleName">Middle Name:</label>
    <input type="text" id="middleName" name="middleName" required><br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required><br><br>

    Gender:
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <br><br>

    Program:
    <input type="radio" id="social" name="program" value="social">
    <label for="social">Social</label>
    <input type="radio" id="natural" name="program" value="natural">
    <label for="natural">Natural</label>
	<input type="radio" id="general" name="program" value="general">
    <label for="general">General</label>
    <br><br>

    <label for="age">Age:</label>
    <input type="age" id="age" name="age" required><br><br>

    <label for="Grade">Grade:</label>
    <select id="grade" name="grade">
      <option value="9th">grade 9</option>
      <option value="10th">grade 10</option>
      <option value="11th">grade 11</option>
      <option value="12th">grade 12</option>
    </select>
	
    <br><br>
	
    <label for="parentname">Parent Name:</label>
    <input type="text" id="parentName" name="parentName" required><br><br>

    <label for="parentphone">Parent Phone:</label>
    <input type="number" id="parentphone" name="parentphone" required><br><br>
	
    <label for="address">Address:</label>
    <input type="text" id="address" name="address"><br><br>

    <button type="submit">Register</button>
    <button type="reset">Reset</button>
  </form>
</div>

</body>
</html>