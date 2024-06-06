<?php
session_start();

$disable_submit = isset($_SESSION['disable_submit']) && $_SESSION['disable_submit'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <section>
        <div class="menu-bar">
            <img src="../prototype/logo.jpg" alt="">
            <h1>Student Page</h1>
        </div>
        <div class="dashboard" id="dashboard">
            <div class="main-content">
                <div class="main-top">
                    <div class="bars" id="menu">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <h2 class="heading">Dashboard</h2>
                <div class="container">
                    <center>
                        <h1>Enrollment Status</h1>
                    </center>
                    <br>
                    <table width="100%" bgcolor="black" cellspacing="2px">
                        <tr height="65" bgcolor="white">
                            <th width="400">Title</th>
                            <th width="100">Status</th>
                        </tr>
                        <tr height="100" bgcolor="white">
                            <td>Enrollment Form</td>
                            <td>
                                <a href="form.php"><?php if ($disable_submit){echo 'Submitted Already'; }else{ echo 'submit';} ?></a>
                            </td>
                        </tr>
                        <tr height="100" bgcolor="white">
                            <td>View your Information</td>
                            <td><a href="check_info.php">Continue</a></td>
</tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="navbar" id="navigation">
        <img src="../prototype/profile.png" alt="">
        <ul class="center-nav">
            <center><a href="#">Edit Profile</a></center>
            <div class="dashboard-icon"><li><a href="dashboard_user.php">Dashboard</a></li></div>
            <div class="schedule-icon"><li><a href="Schedule_user.php">Schedule</a></li></div>
            <div class="bluecard-icon"><li><a href="Bluecard_user.php">Blue Card</a></li></div>
        </ul>
        <ul class="bottom-nav">
            <hr>
            <li><a href="#">Settings</a></li>
            <div class="logout"><li><a href="../interface/logout.php">logout</a></li></div>
        </ul>
    </div>

    <script>
        const hamburger = document.getElementById('menu');
        const navigation = document.getElementById('navigation');
        hamburger.addEventListener('click', function () {
            navigation.classList.toggle('active')
            console.log('clicked');
        })
        const printbutton = document.getElementById('print');
        printbutton.addEventListener('click', function () {
            print();
        })
    </script>
</body>
</html>
