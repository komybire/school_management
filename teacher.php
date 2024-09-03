
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teacher Registration Form</title>
<link rel="stylesheet" href="dec.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<form action="connections.php" method="post">
  <div class="wrapper">
    <form>
      <h2>Teacher Registration</h2>
      <div class="input-box">
        <div class="input-field">
          <input type="text" id="firstName" placeholder="First Name" name="firstName" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-field">
          <input type="text" id="middleName" placeholder="Middle Name" name="middleName" required>
          <i class='bx bxs-user'></i>
        </div>
		 </div>
		  <div class="input-box">
        <div class="input-field">
          <input type="text" id="lastName" placeholder="Last Name" name="lastName" required>
          <i class='bx bxs-user'></i>
        </div>
		
		
        <div class="input-field">
          <input type="email" id="email" placeholder="Email" name="email" required>
          <i class='bx bxs-envelope'></i>
        </div>
		</div>
		<div class="input-box">
        <div class="input-field">
          <input type="number" id="age" placeholder="Age" name="age" required>
		            <i class='bx bxs-user'></i>
        </div>
        <div class="input-field">
          <input type="number" id="phone" placeholder="Phone Number" name="phone" required>
          <i class='bx bxs-phone'></i>
        </div>
      </div>
      <button type="submit" class="btn">Register</button>
    </form>
  </div>
  </form>
</body>

</html>
