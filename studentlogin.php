<?php
$Username = "";
$password = "";
$err = "";
$con = mysqli_connect("localhost", "root", "", "school_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $sql = "SELECT * FROM students WHERE Username='" . $Username . "' AND password='" . $password . "' limit 1";
    $result = mysqli_query($con, $sql);
    if (empty($Username)) {
        $err = "Username is required";
    } elseif (empty($password)) {
        $err = "Password is required";
    } elseif (mysqli_num_rows($result) == 1) {
        header('Location: dash1.php');
        exit();
    } else {
        $err = "Username or password is incorrect";
    }
}
?>
<html>
<head>
    <title>Login Design</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="studentlogin.php" method="POST">
        <div class="form">
            <h2>Login</h2>
            <div class="err">
                <?php echo $err; ?>
            </div>
            <input type="text" name="Username" placeholder="Enter Username Here" required>
            <input type="password" name="password" placeholder="Enter Password Here" required>
            <button class="btnn" name="Login" type="submit">Login</button>
        </div>
    </form>
</body>
</html>