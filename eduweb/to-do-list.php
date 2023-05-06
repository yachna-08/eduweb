
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
<nav>
            <div class="logo-name" style="font-size: 25px; margin-left:50px; font-weight:bolder; margin-top:20px; color:white;">
            <?=$_SESSION['name'];?>
            </div>
        </div>

        <div class="menu-items">
            <ul class="navLinks">
                <li class="navList">
                    <a href="profile.php">
                        <ion-icon name="home-outline"></ion-icon>
                        <span class="links">Dashboard</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="folder-outline"></ion-icon>
                        <span class="links">Courses</span>
                    </a>
                </li>
                <li class="navList active">
                    <a href="#">
                        <ion-icon name="analytics-outline"></ion-icon>
                        <span class="links">To-Do list</span>
                    </a>
                </li>
                <li class="navList">
                    <a href="#">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="links">Likes</span>
                    </a>
                </li>
            </ul>
            <ul class="bottom-link">
                <li>
                    <a href="#">
                        <ion-icon name="log-out-outline"></ion-icon>
                        <span class="links">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <a href="#">
                        <ion-icon name="moon-outline"></ion-icon>
                        <span class="links">Dark Mode</span>
                        <div class="darkToggle">
                            <span class="switch"></span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <ion-icon class="navToggle" name="menu-outline"></ion-icon>
            <div class="searchBox">
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" placeholder="Search"> 
            </div>
        </div>
    </section>
    
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #6a2c70;
    --nav-color: #6a2c70;
    --dash-color: #fff;
    --logo-color: #fff;
    --text-color: #000;
    --text-color-light: #333;
    --white: #fff;
    --border-color: #ccc;
    --toggle-color: #fff;
    --box1-color: #6fedd6;
    --box2-color: #c1d5a4;
    --box3-color: #ffd39a;
    --title-icon-color: #fff;

    --time-03: all 0.3s linear;
    --time-02: all 0.2s linear;
}

body {
    width: 100%;
    min-height: 100vh;
    background-color: var(--dash-color);
    font-family: 'Poppins', sans-serif;
    /* overflow-x: hidden; */
}

body.dark {
    --primary-color: #3a3b3c;
    --nav-color: #181919;
    --dash-color: #262629;
    --logo-color: #ddd;
    --text-color: #ccc;
    --text-color-light: #ccc;
    --white: #aaa;
    --border-color: #404040;
    --toggle-color: #ddd;
    --box1-color: #3a3b3c;
    --box2-color: #3a3b3c;
    --box3-color: #3a3b3c;
    --title-icon-color: #ddd;
}

::-webkit-scrollbar{
    width: 8px;
    height: 8px;
}
::-webkit-scrollbar-track{
    background-color: #ccc;
    border-radius: 100px;
}
::-webkit-scrollbar-thumb{
    background-color: var(--primary-color);
    border-radius: 100px;
}

nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    background-color: hsl(170, 75%, 41%);
    padding: 10px 0 10px 10px;
    transition: var(--time-03);
}

nav.close {
    width: 72px;
}

nav .logo {
    display: flex;
    align-items: center;
}

nav .logo-image {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

nav .logo-image img {
    width: 45px;
    height: 45px;
    object-fit: cover;
}

nav .logo .logo-name {
    font-size: 22px;
    font-weight: 600;
    color: var(--logo-color);
    margin-left: 30px;
    white-space: nowrap;
    transition: var(--time-02);
}

nav.close .logo .logo-name {
    opacity: 0;
}

nav .menu-items {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    height: calc(100% - 90px);
    justify-content: space-between;

}

nav .menu-items li {
    list-style: none;
}

nav .menu-items li a {
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
}



nav .menu-items li.active a {
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    position: relative;
}

nav .menu-items li a ion-icon {
    color: white;
    font-size: 24px;
    min-width: 45px;
}

nav .menu-items li a .links {
    font-size: 18px;
    color: white;
    transition: var(--time-02);
}

nav.close .menu-items li a .links {
    opacity: 0;
}

nav .menu-items li.active a {
    background-color: var(--dash-color);
}

nav .menu-items li.active a:before {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    right: 0;
    top: -40px;
    border-radius: 50%;
    box-shadow: 20px 20px var(--dash-color);
    pointer-events: none;
}

nav .menu-items li.active a:after {
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    right: 0;
    bottom: -40px;
    border-radius: 50%;
    box-shadow: 20px -20px var(--dash-color);
    pointer-events: none;
}


nav .menu-items li.active a .links {
    color:hsl(170, 75%, 41%);
}

body.dark nav .menu-items li.active a .links,
body.dark nav .menu-items li.active a ion-icon {
    color: white;
}

nav .menu-items li.active a ion-icon {
    color: hsl(170, 75%, 41%);
}

nav .menu-items .mode {
    display: flex;
}

.menu-items .darkToggle {
    position: absolute;
    right: 15px;
    width: 45px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.darkToggle .switch {
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}

.darkToggle .switch:before {
    content: '';
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color:hsl(170, 75%, 41%);
    transition: var(--time-02);
}

body.dark .switch::before {
    left: 20px;
}


.dashboard {
    position: relative;
    left: 250px;
    width: calc(100% - 250px);
    min-height: 100vh;
    background-color: var(--dash-color);
    padding: 10px 15px;
    transition: var(--time-03);
}

nav.close~.dashboard {
    width: calc(100% - 72px);
    left: 72px;
}


.dashboard .top {
    position: fixed;
    background-color: var(--dash-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    left: 250px;
    top: 0;
    padding: 10px 15px;
    width: calc(100% - 250px);
    transition: var(--time-03);
    z-index: 100;
}

nav.close~.dashboard .top {
    width: calc(100% - 72px);
    left: 72px;
}

.dashboard .top .navToggle {
    font-size: 25px;
    color:  var(--text-color);
    cursor: pointer;
}

.top img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.dashboard .top .searchBox {
    position: relative;
    height: 45px;
    border: 1px solid var(--border-color);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    padding: 0 10px;
    width: 80%;
    margin: 0 30px;
}

.dashboard .top .searchBox:focus-within {
    border-color: #0ff9;
    box-shadow: 0 0 5px #0ff9;
}

.top .searchBox input {
    width: 100%;
    height: 100%;
    font-size: 15px;
    border: none;
    background-color: var(--dash-color);
    color: white;
}

.top .searchBox input:focus {
    outline: none;
}

.top .searchBox ion-icon {
    font-size: 22px;
    color: white;
    padding: 0 15px;
}

.container {
    padding-top: 50px;
}

.container .title {
    display: flex;
    align-items: center;
    margin: 60px 0 30px;
}

.container .title ion-icon {
    width: 35px;
    height: 35px;
    padding: 5px;
    background-color: hsl(170, 75%, 41%);
    color: var(--title-icon-color);
    border-radius: 6px;
}

.container .title .text {
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}

.container .boxes {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.container .boxes .box {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: calc(100%/3 - 15px);
    padding: 15px 20px;
    border-radius: 10px;
    background-color: var(--box1-color);
}

.boxes .box ion-icon {
    font-size: 35px;
    color: white;
    margin: 5px;
}

.boxes .box .text {
    font-size: 18px;
    font-weight: 500;
    color: white;
}

.boxes .box .number {
    font-size: 40px;
    font-weight: 500;
    color: white;
}

.boxes .box.box2 {
    background-color: var(--box2-color);
}

.boxes .box.box3 {
    background-color: var(--box3-color);
}

.container .activity .activity-data {
    display: flex;
    justify-content: space-between;
    width: 100%;
    overflow-x: auto;
}

.activity-data .data {
    display: flex;
    flex-direction: column;
    margin: 0 40px;
}

.activity-data .data-title {
    font-size: 18px;
    color: var(--text-color);
    font-weight: 500;
    white-space: nowrap;
}

.activity-data .data-list {
    font-size: 18px;
    color: var(--text-color);
    margin-top: 20px;
    white-space: nowrap;
}

@media (max-width:768px) {
    nav {
        width: 72px;
    }

    nav.close {
        width: 250px;
    }
    nav .logo .logo-name {
        opacity: 0;
    }

    nav.close .logo .logo-name {
        opacity: 1;
    }

    .menu-items li a .links {
        opacity: 0;
    }

    nav.close .menu-items li a .links {
        opacity: 1;
    }

    .dashboard {
        width: calc(100% - 72px);
        left: 72px;
    }

    nav.close~.dashboard {
        width: calc(100% - 250px);
        left: 250px;
    }

    .dashboard .top {
        width: calc(100% - 72px);
        left: 72px;
    }

    nav.close~.dashboard .top {
        width: calc(100% - 250px);
        left: 250px;
    }


    .container .boxes .box {
        width: calc(100%/2 - 15px);
        margin-top: 30px;
    }
}

@media (max-width: 560px) {
    .container .boxes .box{
        width: 100%;
    }
    .activity-data .data-list {
        font-size: 16px;
    }
}

@media (max-width: 425px) {
    nav{
        transform: translateX(-73px);
    }
    nav.close{
        transform: translateX(0);
        width: 73px;
    }
    

    nav.close .logo .logo-name {
        opacity: 0;
    }

    

    nav.close .menu-items li a .links {
        opacity: 0;
    }
    .dashboard {
        width: 100%;
        left: 0px;
    }

    nav.close~.dashboard {
        width: calc(100% - 72px);
        left: 72px;
    }

    .dashboard .top {
        width: 100%;
        left: 0;
    }

    nav.close~.dashboard .top {
        width: calc(100% - 72px);
        left: 72px;
    }

}
.tb
{
    padding: 50px;
}
.table-bordered
{
 padding: 50px;
}
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column {
  float: left;
}

.left, .right {
  width: 25%;
}

.middle {
  width: 50%;
}
/* Responsive layout - when the screen is less than 600px wide, make the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
input[type=checkbox] + label {
  display: block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}

input[type=checkbox] {
  display: none;
}

input[type=checkbox] + label:before {
  content: "\2714";
  border: 0.1em solid #000;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  margin-right: 0.2em;
  vertical-align: bottom;
  color: transparent;
  transition: .2s;
}
.card{

margin:  20px;
}

li{
font-size: 20px;
}
</style>
<script>const names = document.querySelector(".names")
const email = document.querySelector(".email")
const joined = document.querySelector(".joined")
const navBar = document.querySelector("nav")
const navToggle = document.querySelector(".navToggle")
const navLinks = document.querySelectorAll(".navList")
const darkToggle = document.querySelector(".darkToggle")
const body = document.querySelector("body")


navToggle.addEventListener('click',()=>{
    navBar.classList.toggle('close')
})

navLinks.forEach(function (element){
    element.addEventListener('click',function (){
        navLinks.forEach((e)=>{
            e.classList.remove('active')
            this.classList.add('active')
        })
    })
})


darkToggle.addEventListener('click',()=>{
    body.classList.toggle('dark')
})


const fetchedData = fetch("./data.json")
                    .then((data)=>{
                        return data.json()
                    })
                    .then(response=>{
                        console.log(response);
                        const items = response.item
                        let Name = ""
                        let Email = ""
                        let Joined = ""
                        
                        items.forEach((element)=>{
                            Name += `<span class="data-list">${element.name}</span>`
                            Email += `<span class="data-list">${element.email}</span>`
                            Joined += `<span class="data-list">${element.joined}</span>`
                        })
                        names.innerHTML += Name 
                        email.innerHTML += Email 
                        joined.innerHTML += Joined 
                    })</script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>