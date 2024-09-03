<?php
$Username = "";
$password = "";
$err = "";
$con = mysqli_connect("localhost", "root", "", "school_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $sql = "SELECT * FROM teachers WHERE Username='" . $Username . "' AND password='" . $password . "' limit 1";
    $result = mysqli_query($con, $sql);
    if (empty($Username)) {
        $err = "Username is required";
    } elseif (empty($password)) {
        $err = "Password is required";
    } elseif (mysqli_num_rows($result) == 1) {
        header('Location: dash2.php');
        exit();
    } else {
        $err = "Username or password is incorrect";
    }
}
?>
<html>
<head>
    <title>Login Design</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
	
body{
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	background-color:lightblue;
	background-size:cover;
	background-position:center;
	text-align:center;
}

.form{
    width: 250px;
    height: 250px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: center;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
	
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}
.err{
	color:#fa0909;
}
.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}
.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}
.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}


.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}


ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}



.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}
p{
	color:white;
}
.form {
    width: 400px;
    height: 400px;
    padding: 40px;
}

.form h2 {
    font-size: 28px;
    padding: 12px;
    width: 400px; /* Set the desired width */
}

.form input {
    width: 100%;
    height: 45px;
    font-size: 16px;
}

.btnn {
    width: 100%;
    height: 50px;
    font-size: 20px;
}




*{
    margin: 0;
    padding: 0;
}



.icon{
    width: 200px;
    float: left;
    height: 70px;
}
	</style>
</head>
<body>
    <form action="teacherlogin.php" method="POST">
        <div class="form">
            <h2>Teacher Login</h2>
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