
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Page</title>
            <link rel="stylesheet" href="admin.css">
            <style>
            .dropdown {
            display: none;
            position: sticky;
            background-color: rgb(129,173,244);
            min-width: 120px;
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
                </style>
        </head>
        <body>
    
    <section>
        <div class="menu-bar">
            <img src="../prototype/logo.jpg" alt="">
            <h1>Admin Page</h1>
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
                     
                </div>
            </div>
        </div>
    </section>

    <div class="navbar" id="navigation">
        <ul class="center-nav">
            <div class="dashboard-icon"><li><a href="admin.php">Dashboard</a></li></div>
            <div class="schedule-icon">
                <li>
                    <a href="#">Approval</a>
                    <ul class="dropdown">
                        <li><a href="admin_approved.php">Approved</a></li>
                        <li><a href="admin_pending.php">Pending</a></li>
                        <li><a href="admin_archive.php">Archived</a></li>
                    </ul>
                </li>
            </div>
            <div class="bluecard-icon"><li><a href="Bluecard_user.php">Card Updator </a></li></div>
        </ul>
        <ul class="bottom-nav">
            <hr>
            <li><a href="#">Settings</a></li>
            <div class="logout-icon"><li><a href="../verify/logout.php">logout</a></li></div>
        </ul>
    </div>

            <script>
                const hamburger = document.getElementById('menu');
                const navigation = document.getElementById('navigation');
                hamburger.addEventListener('click', function () {
                    navigation.classList.toggle('active')
                    console.log('clicked');
                })
                const dropdowns = document.querySelectorAll('.schedule-icon .dropdown');
                dropdowns.forEach(dropdown => {
                dropdown.parentElement.addEventListener('click', function () {
                dropdown.classList.toggle('active');
                     });
                });
            </script>
        </body>
        </html>
