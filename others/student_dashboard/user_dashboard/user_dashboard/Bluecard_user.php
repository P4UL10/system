<?php

require_once '../config.php';
require_once '../function.php';
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
</head>
<body>

   

    <section>
       
        <div class="navbar" id="navigation">
        <img src="../prototype/logo.jpg" alt="">
                    <ul class="center-nav">
                        <li><a href="dashboard_user.php">Dashboard</a></li>
                        <li><a href="Schedule_user.php">Schedule</a></li>
                        <li><a href="Bluecard_user.php">Blue Card </a></li>
            </ul>
            <ul class="bottom-nav">
                <hr>
                <li><a href="#"> Settings </a></li>
                <li><a href="#"> Logout </a></li>
            </ul>
        </div>

      
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

            
            <div class="dashboard">
                <h2 class="heading"> Dashboard </h2>
                <style>
                    
            body {
            background-image:linear-gradient(to right,#cdffd8,#94b9ff);
            }
            </style>
            </body>


            <body Topmargin="100px" Leftmargin="50px" Rightmargin="25">
            <center>
            <table bgcolor="Dodgerblue" height="500px" width="600px">
            <tr>
            <td>
            <tr>
            <td>
            <body>
            <img src="clasj.png" height="50">


            </body>

            </td>
            </tr>
            <tr>
            <td>

            <h2><center> Community of Learners Academy of San Jose </center></h2>
            <h4><center> S.Y_____-20__ </center></h4>
            <h3><center> Registration Card </center></h3>
            <tr>
            <td>
            <tr>
            <td>
            <tr>
            <td>
            <h3><left>LRN________________________ </left></h3>
            <h4><Left> Name___________________________________Level____ </center></h4>
            
            <h4><Left> Address___________________________________Tel________ </Left></h4>
            <h4><Left> Parent's Name__________________________________Gender____ </Left></h4>
            <center> <table bgcolor="Black" width="600"  height="10">
            <tr bgcolor="Dodgerblue">
            <h1><th width="100">FEE</th></h1>
            <th width="60">S1</th>
            <th width="60">S2</th>
            <th width="60">S3</th>
            <th width="100">AMOUNT</th>
            <th width="100">PAYMENT</th>
            <th width="100">BALANCE</th>
            <th width="80">OR#</th>
            <th width="90">DATE</th>
            </tr>
            </td>
            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Tuition</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Lab Fee</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Misc</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>TOTAL</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Books</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Uniform</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>

            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Ftrip</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="Dodgerblue" align="center" width="600" height="20" >
            <td>Monthly</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <table bgcolor="Black" height="20px" width="600px">
            RECORD OF PAYMENT
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td width="50">Date</td>	
            <td width="50">OR#</td>
            <td width="70">Month</td>
            <td width="50">Payment</td>
            <td width="50">Balance</td>
            <td width="40">Signature</td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>June</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>July</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>August</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>September</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>October</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>November</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>December</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>January</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>February</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr bgcolor="DodgerBlue" align="center" width="10" height="20" >	
            <td></td>	
            <td></td>
            <td>March</td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </table>
            Assessed by:___________________________Date:_____________


            </td>
            </tr>
            </td>
            </tr>


                </table>
                </center>
            </div>

        
            <div class="activity">
                <h2 class="heading"> Recent Activity </h2>
                <div class="activities">
                    <table>
                        <thead>
                            <tr>
                                <th> user_id </th>
                                <th> Email </th>
                                <th> name </th>
                                <th> user_type </th>
                                <th> profile </th>
                                <th>Approval</th>
                                <th>Status </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['user_type']; ?></td>
                                    
                                    <td>
                                        <form method="post"><button class ="approve"><span>approve</span></button>
                                    <span>  </span>
                                    <button class ="remove"><span>remove</span></button></form></td>
                                    
                                    
                            </tr>
                                
                            <?php
                                }

                                ?>
                            <?php 
                                if(isset($_POST['approve'])){

                                    $id = $_POST['user_id'];
                                    $select = "UPDATE user_form SET status = 'approved' WHERE user_id = '$user_id' ";
                                    $resut = mysqli_query($conn,$select);
                                    header("location:admin.php");
                                }


                                if(isset($_POST['delete'])){

                                    $id = $_POST['user_id'];
                                    $select = "DELETE  FROM user_form  WHERE user_id = '$user_id' ";
                                    $resut = mysqli_query($conn,$select);
                                    header("location:admin.php");
                                }

                                ?>


                                
                            </tr>
                            </div>
            </div>
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