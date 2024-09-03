
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
.heading{
margin-left: 150px;
margin-top: 30px;
}
.main{
	margin-top: 20px;
}
.banner{
height: auto; 
margin-top:50px;
margin-left:100px;
width: 100%;	
}
.row{
	margin: 30px;
}
.footer{
	background-color:lightblue;
	 text-align: center;
	 flex-direction: row;
}
.col-md-4{
background-color: lightgreen;

}
.text{
	text-align: center;
	 color: whitesmoke;
margin: 10px 100px 10px ; 
background-image: url('s2.jpg');
}
.loginform{
	text-align: center; 
margin: 10px 100px 10px ; 
 background-image: url('s2.jpg');
}

.contact{
text-align: center;
margin: 10px 100px 10px ; 
 background-image: url('s2.jpg');"
background-color:lightblue;
}






@media (max-width: 500px){

.banner-box{
	width: 100%;
}

.heading{
    width: 100%;
    margin: 0;
    margin-top: 20px;
}

.banner{
    width: 100%;
    margin: 0px;
}
.container{
	flex direction: column;
}
.row{
	flex-direction: column;
	    margin-top: 10px;
}
    .g-0,  {
    --bs-gutter-y: 0;
    width: fit-content;
}
.col-4 {
    flex: 0 0 auto;
    width: 100%;
}
.footer{
	flex-direction: column;
	text-align: center;
	margin: 0px;
}
.text{
	width: 100%;
	margin: 0px;


}
.r5{
	float: center;
}
.loginform{
	width: 100%;
	margin: 0px;
	margin-bottom:5px ;
}
.contact{
	width: 100%;
	margin: 0px;
	margin-bottom: 5px;
}
}
	</style>
	<title>Contact Us</title>
</head>
<body>
    <nav style="padding:20px;margin:2px; background-color:lightblue;" class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a  class="navbar-brand" href="#"><h1 style="padding-right: 10px; margin: 10px;">School Website</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav style="float:right">
        <div  class="collapse navbar-collapse" id="navbarNavAltMarkup" >
          <div class="navbar-nav">
            <a  class="nav-link active" aria-current="page" href="high.php">Home</a>
            <a class="nav-link" href="aboutschool.php">About Project</a>
            
		 <a class="nav-link" href="contact.php">Contact Us</a>
        <div class="dropdown">
            <a class="nav-link" href="#" onclick="toggleDropdowns()">Login</a>
            <ul id="userDropdowns" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
				<li><a href="teacherlogin.php">Teacher</a></li>
                <li><a href="studentlogin.php">Student</a></li>
            </ul>
        </div>
            
          </div>
        </div> 
      </div>
    </nav>
    </nav>
  </nav>


<div class="contact" >
  <div>
    <h2>Contact Us</h2>
    <hr>
<form action action="https:file:///D:/html%20files/login.html?lname=sdfdz56&lname=56">
  
  <label for="lname">Your Name:</label><br>
  <input type="text" id="name" name="name" placeholder="enter  name"><br><br>
  <label for="lname">Your Role:</label><br>
  
  <input type="text" id="Role" name="Role" placeholder="enter  Role" ><br><br>
  
  <div style="margin-bottom: 10px;" class="mb-2">
  <label style="margin-bottom: 10px; for="exampleFormControlTextarea1" class="form-label">Your Massage:</label>
  <textarea  class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="enter your massage............."></textarea>
</div>
 <input style="margin-bottom: 10px;" type="submit"  value="Submit" href ="register.html">

</form> 
    </div>
  </div>
   
<!--footer-->
<div class="b-example-divider"></div>

<div class="footer">
<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        <h5>Services</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Services</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cum Soctis</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Nulla consequat</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Schools</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>Website</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="school website.html" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="about project.html" class="nav-link p-0 text-muted">About</a></li>
          <li class="nav-item mb-2"><a href="gallery.html" class="nav-link p-0 text-muted">Gallery</a></li>
          <li class="nav-item mb-2"><a href="login.html" class="nav-link p-0 text-muted">Login</a></li>
          <li class="nav-item mb-2"><a href="register.html" class="nav-link p-0 text-muted">Registration</a></li>
        </ul>
      </div>

      <div class="col-2">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Best School</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Place</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">New</a></li>
        </ul>
      </div>

       <div class="col-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

       <div class="col-2">
        <h5>Contact</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mail</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">MAssage</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twit</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Information</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>
</div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


