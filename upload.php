<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // File details
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Check if there was no file upload error
    if ($fileError === UPLOAD_ERR_OK) {
        // Specify the directory where you want to store the uploaded files
        $uploadDir = 'uploads/';

        // Create the directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Generate a unique filename to prevent overwriting existing files
        $sanitizedFileName = preg_replace('/[^a-zA-Z0-9_.]/', '_', $fileName);
        $uniqueFileName = uniqid() . '_' . $sanitizedFileName;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueFileName)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $fileError;
    }
}
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>
	<style>
	/* General styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

h1, h2 {
  text-align: center;
  margin-top: 20px;
}

/* Form styles */
form {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

input[type=file] {
  padding: 10px;
  font-size: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  margin-left: 10px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Uploaded files section */
.uploaded-files {
  margin-top: 30px;
  display: flex;
  justify-content: center;
}

.uploaded-files ul {
  list-style-type: none;
  padding: 0;
}

.uploaded-files li {
  margin-bottom: 5px;
}

.uploaded-files a {
  color: #4CAF50;
  text-decoration: none;
}

.uploaded-files a:hover {
  color: #45a049;
}

	</style>
</head>
<body>
    <h1>File Upload</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>

    <h2>Uploaded Files</h2>
    <?php
    // Display the uploaded files
    $uploadDir = 'uploads/';

    // Check if the directory exists
    if (is_dir($uploadDir)) {
        $uploadedFiles = array_diff(scandir($uploadDir), array('..', '.'));

        if (count($uploadedFiles) > 0) {
            echo "<ul>";
            foreach ($uploadedFiles as $file) {
                echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
            }
            echo "</ul>";
        } else {
            echo "No files uploaded.";
        }
    } else {
        echo "Upload directory does not exist.";
    }
    ?>
</body>
</html>