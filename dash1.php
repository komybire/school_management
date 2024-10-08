<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>student Dashboard Panel</title>
</head>
<body>
    <nav>
         <div class="logo-name">
            <div class="logo-image">
               <img src="biro.jpg" alt="">
            </div>

            <span class="logo_name">Secondary And High School</span>
        </div>

        
    

    <div class="menu-items">
            <ul class="nav-links">
                <li class="Teacher-link">
                    <a href="#" onclick="TeacherDropdown()">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Check Account</span>
                        <i class="uil uil-angle-down"></i> 
            
                    </a>
                    <ul class="Teacher-menu" id="TeacherDropdown">
                     
                        <li><a href="changepassword.php">Modify Account</a></li>
                     
                    </ul>
                </li>
          
				
                <li class="student-link">
                    <a href="#" onclick="studentDropdown()">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Text Book</span>
                        <i class="uil uil-angle-down"></i> <!-- Dropdown arrow -->
                    </a>
                    <ul class="dropdown-menu" id="studentDropdown">
                        <li><a href="viewfile.php">Text Book for All Grade</a></li>
                        
                  
                    </ul>
                </li>
                </li>
                <li class="subject-link">
                    <a href="#" onclick="subjectDropdown()">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Subject</span>
                        <i class="uil uil-angle-down"></i> 
                    </a>
                    <ul class="subject-menu" id="subjectDropdown">
                     
						<li><a href="grade9&10.php">view  Grade  9 & 10 subject</a></li>
                        <li><a href="grade11&12natural.php">view Natural Grade  11 & 12 subject</a></li>
                        <li><a href="grade11&12social.php">view Social Grade 11 & 12 subject</a></li>
                        
                 
                    </ul>
                </li>
            
           
            <li>
                <a href="exam.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Exam Schedule</span>
                </a>
            </li>
            <li>
                <a href="first.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">View Result</span>
                </a>
            </li>
            
        </ul>
    
        <ul class="logout-mode">
			<li>
                <a href="studentlogin.php">Logout
                    <i class="uil uil-signout"></i>
                </a>
            </li>
             <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
    </nav>
		<section class="dashboard" style="background-image:url('grade10.jpg');">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text" style="color:white;">Program</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                       
            
                        <span class="text">Grade 9</span>
                       
                    </div>
                    <div class="box box1">
                       
            
                        <span class="text">Grade 10</span>
                       
                    </div>
                    <div class="box box1">
                       

                        <span class="text">Grade 11 And Grade 12</span>
                       
                    </div>
          
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text" style="color:white;">Action Of This Page</span>
                </div>

                <div class="activity-data">
                    <div class="data email">
                        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="high.php" class="nav-link p-0 text-muted" style="color:white;">Home</a></li>
          <li class="nav-item mb-2"><a href="aboutschool.php" class="nav-link p-0 text-muted" style="color:white;">About</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted" style="color:white;">Contact As</a></li>
        </ul>
                    </div>
                    <div class="data email">
                        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="high.php" class="nav-link p-0 text-muted" style="color:white;">Home</a></li>
          <li class="nav-item mb-2"><a href="aboutschool.php" class="nav-link p-0 text-muted" style="color:white;">About</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted" style="color:white;">Contact As</a></li>
        </ul>
                    </div>
                    <div class="data email">
                        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="high.php" class="nav-link p-0 text-muted" style="color:white;">Home</a></li>
          <li class="nav-item mb-2"><a href="aboutschool.php" class="nav-link p-0 text-muted" style="color:white;">About</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted" style="color:white;">Contact As</a></li>
        </ul>
                    </div>
                    <<div class="data email">
                        <ul class="nav flex-column">
         <li class="nav-item mb-2"><a href="high.php" class="nav-link p-0 text-muted" style="color:white;">Home</a></li>
          <li class="nav-item mb-2"><a href="aboutschool.php" class="nav-link p-0 text-muted" style="color:white;">About</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted" style="color:white;">Contact As</a></li>
        </ul>
                    </div>
                    <div class="data email">
                        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="high.php" class="nav-link p-0 text-muted" style="color:white;">Home</a></li>
          <li class="nav-item mb-2"><a href="aboutschool.php" class="nav-link p-0 text-muted" style="color:white;">About</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted" style="color:white;">Contact As</a></li>
        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function TeacherDropdown() {
            const dropdown = document.getElementById('TeacherDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', (event) => {
            const target = event.target;
            if (!target.closest('.Teacher-link')) {
                document.getElementById('TeacherDropdown').style.display = 'none';
            }
        });
    function studentDropdown() {
            const dropdown = document.getElementById('studentDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', (event) => {
            const target = event.target;
            if (!target.closest('.student-link')) {
                document.getElementById('studentDropdown').style.display = 'none';
            }
        });
    function subjectDropdown() {
            const dropdown = document.getElementById('subjectDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', (event) => {
            const target = event.target;
            if (!target.closest('.subject-link')) {
                document.getElementById('subjectDropdown').style.display = 'none';
            }
        });
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
    </script>
</body>
</html>