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
    <title> User Page </title>
    <link rel="stylesheet" href="user.css">
    <style>

        </style>
</head>
<body>

   

    <section>

      
        <div class="menu-bar">
                <img src="../prototype/logo.jpg" alt="">
                <h1>Student Page</h1>
           
                    </div>
            <div class="dashboard">
            <div class="main-content">
                      <div class="main-top">
                          <div class="bars" id="menu">
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                          </div>
                        </div>
                <h2 class="heading"> Schedule </h2>


            

          

            <center>
                <table bgcolor="black"  width="300" height="50">
            <tr bgcolor= "00BFFF">
            <th width="700">SCHEDULE</th>
            </tr>
            
            </table>
            </center>
            <center>
            <table bgcolor="black" width="900" height="90" cellspacing="2px">
            <tr bgcolor="white">
            <h1><th width="100">Name:</th></h1></left>
            <th width="100">Section:</th>
            </tr>
            <tr bgcolor="white">
            <h1><th width="100">Adviser:</th><h1>
            <th width="100">School year:</th>
            </tr>
            </center>


            <center> <table bgcolor="black" width="900" height="400">
            <tr bgcolor="00BFFF">
            <h1><th width="100">DAY</th></h1>
            <th width="100">MONDAY</th>
            <th width="100">TUESDAY</th>
            <th width="100">WEDNESDAY</th>
            <th width="100">THURSDAY</th>
            <th width="100">FRIDAY</th>
            </tr>
            <tr bgcolor="white" align="center">
            <td>8:00am-10:00am</td>
            <td>ESP</td>
            <td>PE</td>
            <td>ESP</td>
            <td>PE</td>
            <td>CEREMONY</td>
            </tr>
            <tr>
                <tr bgcolor="white" align="center">
                    <td>10:00am-12:00pm</td>
                    <td>TLE</td>
                    <td>SCIENCE</td>
                    <td>TLE</td>
                    <td>SCIENCE</td>
            <td>ESP</td>
            </tr>
            <tr>
                <tr bgcolor="white" align="center">
                    <td>12:00-1:00pm</td>
                    <td>LUNCH BREAK</td>
                    <td>LUNCH BREAK</td>
            <td>LUNCH BREAK</td>
                    <td>LUNCH BREAK</td>
                    <td>LUNCH BREAK</td>
                
            </tr>
            <tr>
                <tr bgcolor="white" align="center">
                    <td>1:00pm-3:00pm</td>
                    <td>AP</td>
                    <td>ENGLISH</td>
            <td>AP</td>
            <td>ENGLISH</td>
                    <td>ENGLISH</td>
                
            </tr>
            <tr>
                <tr bgcolor="white" align="center">
                    <td>3:00-3:30pm</td>
                    <td>BREAKTIME</td>
                    <td>BREAKTIME</td>
                    <td>BREAKTIME</td>
                    <td>BREAKTIME</td>
            <td>BREAKTIME</td>

            </tr>
            <tr>
                <tr bgcolor="white" align="center">
                    <td>3:30-5:30pm</td>
                    <td>MATH</td>
                    <td>FILIPINO</td>
            <td>MATH</td>
                    <td>FILIPINO</td>
                    <td>PE</td>
            </tr>
            </table>
            </center>
                        </div>
    </section>
    <div class="navbar" id="navigation">
    <img src="../prototype/profile.png" alt="">
            <ul class="center-nav">
                    <ul class="center-nav">
                    <div class="dashboard-icon"><li><a href="dashboard_user.php">Dashboard</a></li></div>
                    <div class="schedule-icon"><li><a href="Schedule_user.php">Schedule</a></li></div>
                    <div class="bluecard-icon"><li><a href="Bluecard_user.php">Blue Card </a></li></div>
            <ul class="bottom-nav">
                <hr>
                <li><a href="#"> Settings </a></li>
                <li><a href="#"> Logout </a></li>
            </ul>
        </div>

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