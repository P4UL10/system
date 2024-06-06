<?php
include '../interface/config.php';
require_once 'function_approval.php';
function highlightSearchTerm($text, $searchTerm) {
    // Case-insensitive search and replace
    return preg_replace('/(' . preg_quote($searchTerm, '/') . ')/i', '<span style="background-color: yellow;">$1</span>', $text);
}

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
$approved = display_data('approved');
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Page</title>
            <link rel="stylesheet" href="admin.css">
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
            max-width:100%;
            max-height: 650px; /* Adjust as needed */
            
        }
        .scrollable-table::-webkit-scrollbar {
            display: solid;
        }
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
        </head>
        <body>
    
    <section>
        <div class="menu-bar">
            <img src="../prototype/logo.jpg" alt="">
            <h1>Admin Page</h1>
            <form method="GET">
            <input type="text" name="search" placeholder="Search by name...">
            <input type="submit" value="Search">
        </form>
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
        
</head>
<body>
    <h1>INFORMATION</h1>
<center>
<div class="scrollable-table">
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>BIRTHDATE</th>
            <th>GENDER</th>
            <th>NUMBER</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>MOTHERS_INFO</th>
            <th>FATHERS_INFO</th>
            <th>GRADE_LEVEL</th>
        </tr>
<?php
while($row = mysqli_fetch_assoc($approved) ) {

    $row['fathers_name'] = highlightSearchTerm($row['fathers_name'], $searchTerm);
    echo "<tr>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['last_name'] .",".$row['first_name'] .",". $row['middle_name'] .",".$row['extension_name'] .  "</td>";
    echo "<td>" . $row['birthdate'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['number'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['mothers_name'] .",".$row['mothers_number'] . "</td>";
    echo "<td>" . $row['fathers_name'] .",".$row['fathers_number'] . "</td>";
    echo "<td>" . $row['grade_level'] . "</td>";

    
    echo "</tr>";
}
?>
</table>
</div>
</center>

</body>
</html>
<?php
$conn->close();
?>


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
            <div class="logout-icon"><li><a href="../interface/logout.php">logout</a></li></div>
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
        
                window.onload = function() {
            var searchInput = document.getElementById('search');
            searchInput.focus();
            
            // Scroll to the search input's position
            window.scrollTo({
                top: searchInput.offsetTop - (window.innerHeight / 2),
                behavior: 'smooth'
            });
        };
            </script>
        </body>
        </html>
