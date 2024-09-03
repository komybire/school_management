<?php
$Username = "";
$password = "";
$err = "";
$con = mysqli_connect("localhost", "root", "", "school_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $sql = "SELECT * FROM admininfo WHERE Username='" . $Username . "' AND password='" . $password . "' limit 1";
    $result = mysqli_query($con, $sql);
    if (empty($Username)) {
        $err = "Username is required";
    } elseif (empty($password)) {
        $err = "Password is required";
    } elseif (mysqli_num_rows($result) == 1) {
        header('Location: main.php');
        exit();
    } else {
        $err = "Username or password is incorrect";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page - CodeCraftedWeb</title>
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login">
        <img src="bg.jpg" alt="login image" class="login__img">

        <form action="" method="POST" class="login__form">
            <h1 class="login__title">Login</h1>
            <div class="err">
                <?php echo $err; ?>
            </div>
            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="text" name="Username" placeholder=" " required class="login__input">
                        <label for="" class="login__label">Username</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="password" name="password" id="login-pass" placeholder=" " required class="login__input">
                        <label for="" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>
            </div>

            <div class="login__check">
                <div class="login__check-group">
                    <input type="checkbox" class="login__check-input">
                    <label for="" class="login__check-label">Remember me</label>
                </div>

                <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>

            <p class="login__register">
                Don't have an account? <a href="#">Register</a>
            </p>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>