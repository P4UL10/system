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
      <div class="dashboard">
                        <h2 class="heading">Dashboard</h2>
                        <div class="container">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
                                <br>
                                <br>
                                <center>
                        <h1>Enrollment Form</h1>
                    </center>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td><label>Full name:</label></td>
                            <td><input type="text" class="inside" name="last_name" placeholder="Last Name" required></td>
                            <td><input type="text" class="inside" name="first_name" placeholder="First Name"required></td>
                            <td><input type="text" class="inside" name="middle_name" placeholder="Middle Name"required></td>
                            <td><input type="text" class="inside" name="extension_name" placeholder="Extension(optional)"></td>
                        </tr>
                        <tr>
                            <td><label for="date">Birthdate:</label></td>
                            <td><input type="date" class="inside" name="birthdate" placeholder="Birthdate"required></td>
                            <td><label>Gender:</label><input type="text" class="inside" name="gender" placeholder="Gender"required></td>
                        </tr>
                        <tr>
                            <td><label for="number">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="number" placeholder="Mobile Number"required></td>
                            <td><label>Email Address:</label></td>
                            <td><input type="text" class="inside" name="email" placeholder="Email"require> </td>
                        </tr>
                        <tr>
                            <td><label>Full Address:</label></td>
                            <td><input type="text" class="inside" name="Address" placeholder="Address"require></td>
                        </tr>
                        <tr>
                            <td><label>Name of Mother:</label></td>
                            <td><input type="text" class="inside" name="mothers_name" placeholder="Fullname"></td>
                            <td><label for="parentnumber">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="mothers_number" placeholder="Mobile Number"></td>
                        </tr>
                        <tr>
                            <td><label>Name of Father:</label></td>
                            <td><input type="text" class="inside" name="fathers_name" placeholder="Fullname"></td>
                            <td><label for="parentnumber">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="fathers_number" placeholder="Mobile Number"></td>
                        </tr>
                        <tr>
                            <td><label>Grade level:</label></td>
                            <td>
                                <select name="grade_level"required>
                                    <option value="">Choose:</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="grade-11ABM">11ABM</option>
                                    <option value="grade-11STEM">11STEM</option>
                                    <option value="grade-11HUMSS">11HUMSS</option>
                                    <option value="grade-11GAS">11GAS</option>
                                    <option value="grade-11ICT">11ICT</option>
                                    <option value="grade-11H&M">11H&M</option>
                                    <option value="grade-12ABM">12ABM</option>
                                    <option value="grade-12STEM">12STEM</option>
                                    <option value="grade-12HUMSS">12HUMSS</option>
                                    <option value="grade-12GAS">12GAS</option>
                                    <option value="grade-12ICT">12ICT</option>
                                    <option value="grade-12H&M">12H&M</option>
                                </select>
                            </td>
                        </tr>
                    </table>
            
                                <input class="submit" type="submit" value="submit">
                            </form>
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