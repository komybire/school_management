
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>School Website</title>
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
	background-color:pink;
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
background-image: url('s1.jpg');
}
.loginform{
	text-align: center; 
margin: 10px 100px 10px ; 
 background-image: url('s1.jpg');
}

.contact{
text-align: center;
margin: 10px 100px 10px ; 
 background-image: url('s1.jpg');"

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
  </head>
<body>

        
    <nav style="padding:20px;margin:2px; background-color:lightblue;" class="navbar navbar-expand-lg">

      <div class="container-fluid">
        <a  class="navbar-brand" href="#"><h1 style="padding-right: 10px; margin: 10px;">Secondary School And High School Website</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <nav style="float:right">
        <div  class="collapse navbar-collapse" id="navbarNavAltMarkup" >
          <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="high.php">Home</a>
        <a class="nav-link" href="aboutschool.php">About School</a>
    

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
      </div>
    </nav>
    </nav>
  </nav>

<div style="background-color:lightblue;">

  <div  class="container" >
  <div class="row">
    <div class="col-4 banner-box"><a>        
    <img class="banner" src="s2.jpg" alt="" height="300" ></a></div>
    <div class="col-6 heading"> <a><h3>Welcome to School Managment
      <br>
    Website and Information System</h3></a>
     <br>
     
    <a><p> School Management System is a complete school <br>manangement software designed to automate a school's<br>diverse operations</p>
     </a></div>
  </div>
</div>
 
</div>

 <div   class="container">
  <div class="row">
     <div   class="col-6"> <h3>Welcome to School Website</h3>
      <br>
  <p>School Management System is a complete school management software designed to automate a school's diverse from class, exams events calendar. 
    <br>
    <br>
    This school software has a powerfull online community to bring parents, teachers and students on a common intractive platform. It is apaperless office automation solution for today's oromia secondary and high school. The school Management system provides the facility to carry out all day to day activities of the school, making them fast, easy, efficient and accurate.
<br>
    <br>

     All these departmants provide various records regarding studants. Most of these track records need to maintain infoirmation about the studants. This information could be the general details like student name, address, performance, attendance etc or specific information related to departmants like collection of data.  </p></div>

    <div class="col-4"><h3 style="background-color: lightblue; padding: 30px;">Latest School News</h3><div class="row g-0">
    <div  class="col-md-4">
      <img  src="G9.jpg" class="img-fluid rounded-start" alt="..."width="100px" height="500px" >
    </div>
    <div  style="background-color: lightgreen;"class="col-md-8">
      <div class="card-body">
        <h5 style="margin:20px;" class="card-title">april 26,2022<br>Latest School News</h5>
        <p class="card-text"></p>
        
      </div>
    </div>
  </div>

  <div  style="background-color: lightpink;" class="row g-0">
    <div class="col-md-5">
      <img style="margin:20px;" src="G10.jpg" class="img-fluid rounded-start" alt="..."width="100px" height="100px" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 style="margin:20px;" class="card-title">may 1,2024<br>Latest School News</h5>
        <p class="card-text"></p>
     
      </div>
    </div>
  </div>




  <div  style="background-color: lightgreen;" class="row g-0">
    <div class="col-md-4">
      <img style="margin:20px;" src="G11.jpg" class="img-fluid rounded-start" alt="..."width="100px" height="100px" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 style="margin:20px;" class="card-title">may 15,2024<br>Latest School News</h5>
        <p class="card-text"></p>
        <p  style="float: right;"class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

</div></div>
  </div>
</div>
     





<!--footer-->


<div class="footer" style="background-color: lightblue;">
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
      <script>
        function toggleDropdowns() {
            const dropdowns = document.getElementById("userDropdowns");
            dropdowns.style.display = (dropdowns.style.display === "none") ? "block" : "none";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>