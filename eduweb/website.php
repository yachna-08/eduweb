<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/style.css" rel="stylesheet">
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <!-- fontawasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">
</head>
<body>
<header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="162" height="50" alt="EduWeb logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item" style="font-size:15px;">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item" style="font-size:15px;">
            <a href="#roadmap" class="navbar-link" data-nav-link>Roadmap</a>
          </li>
          <li class="navbar-item"style="font-size:15px;">
          <a href="profile.php"class="navbar-link" style="font-size: 20px; margin-left:200px;">Welcome <?=$_SESSION['name'];?></a>
          </li>
          <li class="navbar-item"style="font-size:15px;">
            <a href="index.php" class="navbar-link" data-nav-link>Logout</a>
          </li>
          
        </ul>

      </nav>

      
      
  </header>

    <style>
        
		.banner{
    width: 80%;
    height: 70%;
    position: absolute;
    top: 25%;
    left: 150px;
    color: #fff;
}

.app-text{
    width: 50%;
    float: left;
    padding-left: 50px;
}

.app-text h3{
    margin-top: 100px;
    font-size: 17px;
    color: #000;
    font-weight: 400;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.app-text h1{
    font-size: 51px;
    position: relative;
    color: #000;
    margin-top: 30px;
    font-weight: 700;
    line-height: 1;
}

.app-text p{
    font-size: 19px;
    margin: 30px 30px 30px 0;
    letter-spacing: 1px;
    color: #000;
    padding-right: 250px;
}

.btn-group{
    display: flex;
    width: 100%;
    position: relative;
}

.btn-group .signup-btn{
    cursor: pointer;
    display: block;
    color: #000;
    text-align: center;
    font-size: 15px;
    font-weight: 700;
    border-radius: 32px;
    background-color: #ffa037;
    padding: 15px 50px;
}

.btn-group .play-btn{
    margin-left: 40px;
    display: inline-flex;
}

.btn-group span{
    color: #000;
    font-size: 15px;
    font-weight: 700;
    margin: auto 20px;
    cursor: pointer;
}

.play-btn-inner{
    height: 50px;
    width: 50px;
    border: 2px solid transparent;
    border-radius: 50%;
    background-color: #000;
}

.play-btn-inner i{
    padding: 15px 19px;
    font-size: 16px;
    cursor: pointer;
}
.app-picture
{
	margin-left: 50%;
}
ul {
    list-style: none;
}
  
.accordion-menu {
    max-width: 2050px;
    margin: 100px auto 20px;
    background: #242d41;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px #000;
    margin-top: -70px;
}

.accordion-menu li:last-child .dropdown{
    border-bottom: 0;
}
.accordion-menu li.active .dropdown {
    color: #fff;
}
.accordion-menu li.active .dropdown .fa-chevron-down {
    transform: rotate(180deg);
}
.dropdown {
    cursor: pointer;
    display: block;
    padding: 15px 15px 15px 45px;
    font-size: 18px;
    border-bottom: 2px solid #2d374d;
    color: #999999;
    position: relative;
    transition: all 0.4s ease-out;
}

.dropdown:hover{
    background: #566f82; /* fallback colour */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#27455c), to(#273a47));
}
  
.dropdown  i {
    position: absolute;
    top: 17px;
    left: 16px;
}

.dropdown .fa-chevron-down {
    right: 12px;
    left: auto;
    transition: transform 0.2s ease-in-out;
}

.submenuItems {
    display: none;
    background: #2d374d;;
    transition: all 2s ease-in-out;
}

.accordion-menu li.active .submenuItems{
    display: block;
}

.submenuItems a {
    display: block;
    color: #66b2ff;
    font-weight: 600;
    padding: 12px 12px 12px 45px;
    transition: all 0.2s ease-out;
    text-decoration: none;
}

.submenuItems a:hover {
    background-color: #5c7185;
    color: #fff;
  }
</style>
<section class="section about" id="about" aria-label="about" style="margin-top: 150px;">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 470;">
              <img src="./assets/images/website.png" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>
           <a href="websitecourse.php"> <img src="./assets/images/Enroll.png" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2" style="margin-left: -400px;top:250px;">
           </a>
            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content" style="top:-500px;">

            <p class="section-subtitle">Build Responsive Real- World Websites with HTML and CSS and JavaScript</p>

            <h2 class="h2 section-title"> 
             <span class="span">When you learn web development, you might start out writing a simple page of HTML text and build up to creating more complex, 
            </span> feature-rich applications designed to be accessed from various Internet-connected devices.
            </h2>

            <p class="section-text">
            start out writing a simple page of HTML text and build up to creating more complex
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Expert Trainers</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Online Remote Learning</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Lifetime Access</span>
              </li>
            </ul>
            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">
          </div>
        </div>
      </section>
            </div>
      <section class="section course" id="roadmap" aria-label="roadmap" style="background-color:hsl(170, 75%, 41%); margin-top:-400px;">
      <div class="container">
        <ul class="accordion-menu">
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-python"></i> 
                    HTML
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems" style="font-size: 15px; color:#fff;">
                  <li><a href="#">Html main level tags</a></li>
                  <li><a href="#">Html sementic elements</a></li>
                  <li><a href="#">List of other commonly used HTML tags</a></li>
                  <li><a href="#">Table elements</a></li>
                  <li><a href="#">Form elements</a></li>
                  <li><a href="#">Multimedia tags</a></li>
                  <li><a href="#">HTML global attributes on elements</a></li>
                </ul> 
            </li>
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-node-js"></i> 
                    CSS
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems" style="font-size: 15px;">
                    <li><a href="#">What is css?</a></li>
                    <li><a href="#">CSS Selectors</a></li>
                    <li><a href="#">CSS Properties</a></li>
                    <li><a href="#">Box model</a></li>
                    <li><a href="#">Values & units</a></li>
                    <li><a href="#">CSS Specificity & Inheritance</a></li>
                    <li><a href="#">Display</a></li>
                    <li><a href="#">Positioning</a></li>
                    <li><a href="#">Static</a></li>
                    <li><a href="#">Relative</a></li>
                    <li><a href="#">Absolute</a></li>
                    <li><a href="#">Fixed</a></li>
                    <li><a href="#">Sticky</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-node-js"></i> 
                  Advance CSS
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems" style="font-size: 15px;">
                    <li><a href="#">Shadows</a></li>
                    <li><a href="#">Gradients</a></li>
                    <li><a href="#">Transforms</a></li>
                    <li><a href="#">Transitions</a></li>
                    <li><a href="#">Animations</a></li>
                    <li><a href="#">CSS Varisables</a></li>
                    <li><a href="#">Media Query</a></li>
                    <li><a href="#">Layouts</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-react"></i> 
                    JavaScript
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems" style="font-size: 15px;">
                    <li><a href="#">Fundamental of JavaScript</a></li>
                    <li><a href="#">Operators</a></li>
                    <li><a href="#">Conditional and control flow statements</a></li>
                    <li><a href="#">Arrays</a></li>
                    <li><a href="#">Functions</a></li>
                    <li><a href="#">Objects & prototypes</a></li>
                    <li><a href="#">class</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-react"></i> 
                    Advance JavaScript
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
                <ul class="submenuItems" style="font-size: 15px;">
                    <li><a href="#">Iterators and Generators</a></li>
                    <li><a href="#">Promises,Async and Await</a></li>
                    <li><a href="#">Collections</a></li>
                    <li><a href="#">Error Handling</a></li>
                    <li><a href="#">Modules</a></li>
                    <li><a href="#">Proxy and Reflection</a></li>
                    <li><a href="#">Dom</a></li>
                </ul>
            </li>
            <li class="link">
                <div class="dropdown">
                    <i class="fa-brands fa-react"></i> 
                    Project
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>
            </li>
        </ul>
    </div>
      <section>
        <div>
</section>
<div class="footer-bottom" >
      <div class="container">

        <p class="copyright" style="color:#000; font-size:15px; height:-50px;">
          Copyright 2023 All Rights Reserved by <a href="#" class="copyright-link" style="color:#fff">Eduweb</a>
        </p>

      </div>
    </div>

  </footer>

<script>
let listElements = document.querySelectorAll('.link');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        if (listElement.classList.contains('active')){
            listElement.classList.remove('active');
        }else{
            listElements.forEach (listE => {
                listE.classList.remove('active');
            })
            listElement.classList.toggle('active');
        }
    })
});</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>