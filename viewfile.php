<?php
$uploadDir = 'uploads/';

// Display the uploaded files
if (is_dir($uploadDir)) {
    $uploadedFiles = array_diff(scandir($uploadDir), array('..', '.'));

    if (count($uploadedFiles) > 0) {
        echo "<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Uploaded Files</title>
</head>
<body>
    <h1>Uploaded Files</h1>
    <ul>";
        foreach ($uploadedFiles as $file) {
            echo "<li><a href='$uploadDir$file' target='_blank'>$file</a></li>";
        }
        echo "</ul>
</body>
</html>";
    } else {
        echo "No files uploaded.";
    }
} else {
    echo "Upload directory does not exist.";
}
?>