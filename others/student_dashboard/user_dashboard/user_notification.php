<?php

require_once '../interface/config.php';
require_once '../interface/function.php';
$result = display_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="user_style.css">
</head>
<body>
<div class="menu-bar">
                
      <img src="../prototype/logo.jpg" alt="">
      <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="input">
                    <input type="text" placeholder="Search here...">
                </div>
                <div class="user">
                    <img src="./user.png" alt="">
                </div>
            </div>
      </div>


      <ul>
      </ul>
    </div>
    
   

    <section>

        <div class="navbar" id="navigation">
            <img src="logo.png" alt="">
            <ul class="center-nav">
            
            <li><a href="user_dashboard.php"><img src="../prototype/house.png" alt="logo"> Dashboard </img></a>
               <li> <a href="user_bluecard.php"> <img src="../prototype/blue_card.png" alt="logo"> Blue card </img> </a></li>
               <li><a href="user_notification.php"><img src="../prototype/bell.png" alt="logo"> Notification </img></a></li>
                
            </ul>

            <ul class="bottom-nav">
                <hr>
                <li> <a href="#"> Settings </a></li>
                <li> <a href="#"> Logout </a></li>
            </ul>
        </div>
        </section>
        



</body>

<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })
</script>

</html>