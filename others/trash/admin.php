


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

   

    <section>
       
        <div class="navbar" id="navigation">
            <img src="logo.png" alt="">
            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="#"> Dashboard </a></li>
                <li><i class="fa-solid fa-copy"></i><a href="approval.php"> Approval </a></li>
                <li><i class="fa-sharp fa-solid fa-chart-simple"></i><a href="#">  </a></li>
            </ul>
            <ul class="bottom-nav">
                <hr>
                <li><i class="fa-solid fa-gear"></i><a href="#"> Settings </a></li>
                <li><i class="fa-solid fa-power-off"></i><a href="#"> Logout </a></li>
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
                <div class="color-box">
                    <div class="box skyblue">
                        <p> <i class="fa-solid fa-thumbs-up"></i> </p>
                        <p> Total Students </p>
                        <h3> 50,120 </h3>
                    </div>
                    <div class="box yellow">
                        <p><i class="fa-solid fa-comment"></i></p>
                        <p> Total Complete </p>
                        <h3> 25,120 </h3>
                    </div>
                    <div class="box purple">
                        <p> <i class="fa-solid fa-share"></i> </p>
                        <p> Total Incomplete </p>
                        <h3> 10,320 </h3>
                    </div>
                    <div class="box red">
                        <p> <i class="fa-sharp fa-solid fa-floppy-disk"></i> </p>
                        <p> Active User </p>
                        <h3> 20,129 </h3>
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