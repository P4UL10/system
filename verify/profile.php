
<?php
require "functions.php";
check_login();

?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Page</title>
            <link rel="stylesheet" href="../Pre-school/user.css">
            <style>   
                 body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            margin:  auto;
            width: 300px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            background-color:white;
        }
        .scrollable-table {
            overflow-y: auto;
            max-height: 650px; /* Adjust as needed */
            max-width :650px
            
        }
        .scrollable-table::-webkit-scrollbar {
            display: none;
        }
            .dropdown {
            display: none;
            position: sticky;
            background-color: rgb(129,173,244);
            min-width: 100px;
            z-index: 1;
            margin-left:-90px;
            margin-top:20px;
            
            }
            .dropdown.active {
            display: block;
            transition: all 1.4s;
        }
            .dropdown li {
                padding: 10px 12px;
                text-decoration: none;
                display: block;
            }
            
            .dropdown li:hover {
                background-color:  rgb(134, 177, 247);
                color:white;
            }
                


                </style>
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
                        <h2 class="heading">Update Profile</h2>
                        <div class="container">
                        
                   <center> <table bgcolor="white" width="800"  height="10"></center>
                   <br>
                    <br>
                    <form action="" method="post">
                    <tr width="800"><input type="text" name="Last_Name" placeholder="Last_Name" style="width: 200px; height: 40px;">
                    <input type="text" name="First_Name" placeholder="First_Name" style="width: 200px; height: 40px;">
                    <input type="text" name="Second_Name" placeholder="Second_Name" style="width: 200px; height: 40px;">
                    <br><br>
                    <input type="text" placeholder="LRN" style="width: 200px; height: 40px;">
                    <input type="text" placeholder="Gender" style="width: 200px; height: 40px;">
                    <input type="text" placeholder="Age" style="width: 200px; height: 40px;">
                    </tr>
                    <br>
                    <br>
                    <tr bgcolor="white">
                    <input type="text" align="center" placeholder="Email" style="width: 500px; height: 40px;"> 
                    <br><br>
                    <input type="text" align="center" placeholder="Contact Number" style="width: 500px; height: 40px;"> 
                    <br><br>
                    <input type="text" align="center" placeholder="Birthday" style="width: 500px; height: 40px;">
                    </tr>
                    <tr>
                    <input type="submit" align="center" placeholder="Update" style="width: 500px; height: 40px; background-color: green; color:white; cursor: pointer;">
                    </tr>

                    </form>
                        </table>
                                                </div>
                                            </div>

            </section>
        
            <div class="navbar" id="navigation">
                <img src="../prototype/profile.png" alt=""> 
                    <ul class="center-nav">
                    <li><a href="#">Update Profile</a></li>
                    <?php if(check_login(false)):?>
                           <h2> Hi, <?=$_SESSION['USER']->name?></h2>

                            <br><br>
                            <?php if(!check_verified()):?>
                                <a href="verify.php">
                                    <button style="width: 200px; height: 30px; color: white; background-color: green;">Verify Profile</button>
                                </a>
                            <?php endif;?>
                        <?php endif;?>

                                        
                    </ul>
                    <ul class="bottom-nav">
                        <hr>
                        <li></i><a href="#">Settings</a></li>
                        <div class="logout-icon"><li><a href="logout.php">logout</a></li></div>
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
        <?php
        include '../interface/config.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $last_name = mysqli_real_escape_string($conn, $_POST["Last_Name"]);
            $first_name = mysqli_real_escape_string($conn, $_POST["First_Name"]);
            $second_name = mysqli_real_escape_string($conn, $_POST["Second_Name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $age = mysqli_real_escape_string($conn, $_POST["age"]);
            $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
            $LRN = mysqli_real_escape_string($conn, $_POST["LRN"]);
            $number = mysqli_real_escape_string($conn, $_POST["number"]);
            $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
            $sql = "INSERT INTO profile (Last_Name, First_Name, Second_Name. email, age, gender, LRN, number, birthdate ) 
            VALUES ('$last_name', '$first_name', '$second_name', '$email', '$age', '$gender' , '$LRN' , '$number', '$birthdate', '$sql')";
            
        }
        
        
        // Close connection
        mysqli_close($conn);
        
        ?>
