<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<section>
    <div class="navbar" id="navigation">
        <img src="logo.png" alt="">
        <ul class="center-nav">
            <li><i class="fa-solid fa-house"></i><a href="#">Dashboard</a></li>
            <li><i class="fa-solid fa-copy"></i><a href="approval.php">Approval</a></li>
            <li class="dropdown">
                <i class="fa-sharp fa-solid fa-chart-simple"></i>
                <a href="#">Dropdown</a>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </li>
        </ul>
        <ul class="bottom-nav">
            <hr>
            <li><i class="fa-solid fa-gear"></i><a href="#">Settings</a></li>
            <li><i class="fa-solid fa-power-off"></i><a href="#">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <!-- Your main content here -->
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
