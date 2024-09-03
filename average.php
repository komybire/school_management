
<html>
<head>
    <title>Student Form</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 0 auto;
        }
        label, input {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
    </style>
	<script>
	document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const form = event.target;
    const name = form.elements.name.value;
    const studentClass = form.elements.class.value;
    const subjects = form.elements.subjects.value.split(',');

    // Calculate average
    const marks = subjects.map(function(subject) {
        return parseInt(prompt(`Enter the mark for ${subject}`));
    });
    const average = marks.reduce(function(acc, val) {
        return acc + val;
    }, 0) / marks.length;

    // Assign rank
    const rank = parseInt(prompt('Enter the rank'));

    // Prepare result
    const result = {
        name: name,
        class: studentClass,
        subjects: subjects,
        average: average,
        rank: rank
    };

    // Display result
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <h2>Student Result</h2>
        <p><strong>Name:</strong> ${result.name}</p>
        <p><strong>Class:</strong> ${result.class}</p>
        <p><strong>Subjects:</strong> ${result.subjects.join(', ')}</p>
        <p><strong>Average:</strong> ${result.average}</p>
        <p><strong>Rank:</strong> ${result.rank}</p>
    `;

    // You can send the result to the server using AJAX (e.g., using fetch or XMLHttpRequest) to store it in the database
});
	</script>
</head>
<body>
    <h1>Student Form</h1>
    <form id="studentForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
        <label for="subjects">Subjects (comma-separated):</label>
        <input type="text" id="subjects" name="subjects" required>
        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>
    <script src="script.js"></script>
</body>
</html>