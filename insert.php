<?php
$con = mysqli_connect("localhost", "root", "", "school_db");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $FirstName = $_POST['firstname'];
    $MiddleName = $_POST['middleName'];
    $LastName = $_POST['lastname'];
    $Email = $_POST['email'];
    $Age = $_POST['age'];
    $Phone = $_POST['phone'];

    $sql = $con->prepare("INSERT INTO Teachers (FirstName, MiddleName, LastName, Email, Age, Phone) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $FirstName, $MiddleName, $LastName, $Email, $Age, $Phone);

    if ($sql->execute()) {
        echo "<script>alert('Data inserted successfully!')</script>";
    } else {
        echo "<script>alert('There was an error inserting data.')</script>";
    }

    $sql->close();
}

mysqli_close($con);
?>
