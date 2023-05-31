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

      <a href="#" class="logo" style="margin-left: -566px;">
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

        <ul class="navbar-list" style="margin-left: -299px;">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link style="margin-left: -84px;">Home</a></li>
          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Logout</a></li>
          <li class="navbar-item">
          <a href="profile.php"class="navbar-link" style="font-size: 20px; margin-left:200px;">Welcome <?=$_SESSION['name'];?></a>
</li>       
</ul>
      </nav>
  </header>
 <div>
  <section class="section course" id="courses" aria-label="course" style="background-color:hsl(170, 75%, 41%); margin-top:50px;">
        <div class="container">
          <h2 class="h2 section-title">Pick A Course To Get Started</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">

                 

                  <h3 class="h3">
                    <a href="website.php" class="card-title">Build Responsive Real- World Websites with HTML and CSS and JavaScript</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">Free</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">
                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>
                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                  <span class="span">8 Weeks</span>
                </div>
                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Java Programming Masterclass for Software Developers</a>
                  </h3>
                  <div class="wrapper">
                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Rating)</p>

                  </div>

                  <data class="price" value="49">FREE</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">35 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">

                 

                  <h3 class="h3">
                    <a href="#" class="card-title">Data Structures</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /7 Rating)</p>

                  </div>

                  <data class="price" value="35">FREE</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">13 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">18 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>
          <hr>
          <ul class="grid-list">
<li>
  <div class="course-card">

    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
      <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
        alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
    </figure>

    <div class="abs-badge">
      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

      <span class="span">3 Weeks</span>
    </div>

    <div class="card-content">

     

      <h3 class="h3">
        <a href="#" class="card-title">Python</a>
      </h3>

      <div class="wrapper">

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>

        <p class="rating-text">(5.0/7 Rating)</p>

      </div>

      <data class="price" value="29">FREE</data>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

          <span class="span">8 Lessons</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

          <span class="span">20 Students</span>
        </li>

      </ul>

    </div>

  </div>
</li>

<li>
  <div class="course-card">

    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
      <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
        alt="Java Programming Masterclass for Software Developers" class="img-cover">
    </figure>

    <div class="abs-badge">
      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

      <span class="span">8 Weeks</span>
    </div>

    <div class="card-content">

   

      <h3 class="h3">
        <a href="#" class="card-title">Aanalytics and data science</a>
      </h3>

      <div class="wrapper">

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>

        <p class="rating-text">(4.5 /9 Rating)</p>

      </div>

      <data class="price" value="49">FREE</data>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

          <span class="span">15 Lessons</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

          <span class="span">35 Students</span>
        </li>

      </ul>

    </div>

  </div>
</li>

<li>
  <div class="course-card">

    <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
      <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
        alt="The Complete Camtasia Course for Content Creators" class="img-cover">
    </figure>

    <div class="abs-badge">
      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

      <span class="span">3 Weeks</span>
    </div>

    <div class="card-content">

    

      <h3 class="h3">
        <a href="#" class="card-title">Website development-MERN Stack</a>
      </h3>

      <div class="wrapper">

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>

        <p class="rating-text">(4.9 /7 Rating)</p>

      </div>

      <data class="price" value="35">FREE</data>

      <ul class="card-meta-list">

        <li class="card-meta-item">
          <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

          <span class="span">13 Lessons</span>
        </li>

        <li class="card-meta-item">
          <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

          <span class="span">18 Students</span>
        </li>

      </ul>

    </div>

  </div>
</li>

</ul>

        </div>
      </section>

      <div class="footer-bottom">
      <div class="container">

        <p class="copyright" style="color:#000">
          Copyright 2023 All Rights Reserved by <a href="#" class="copyright-link">Eduweb</a>
        </p>

      </div>
    </div>

  </footer>


 </div>
</body>
</html>