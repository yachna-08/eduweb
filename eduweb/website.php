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

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>Roadmap</a>
          </li>

          <li class="navbar-item">
            <a href="course.php" class="navbar-link" data-nav-link>Courses</a>
          </li>
          <li class="navbar-item">
          <a href="#contact"class="navbar-link" style="font-size: 20px; margin-left:200px;">Welcome <?=$_SESSION['name'];?></a>
          </li>
          <i class="fas fa-user" style="font-size: large; line-height: 3.5;"></i>

          <li class="navbar-item">
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
</style>
<section class="section about" id="about" aria-label="about" style="margin-top: 150px;">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 470;">
              <img src="./assets/images/website.png" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>
            <img src="./assets/images/Enroll.png" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2" style="margin-left: -400px;top:250px;">

            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content" style="top:-500px;">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Over 10 Years in <span class="span">Distant learning</span> for Skill Development
            </h2>

            <p class="section-text">
              Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna
              aliquaenim ad
              minim.
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
      <section class="section course" id="courses" aria-label="course" style="background-color:hsl(170, 75%, 41%); margin-top:-400px;">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 300px;">
          Dropdown
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>
      </section>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js" defer></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>