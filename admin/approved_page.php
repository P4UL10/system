<?php
include 'function_approvals.php';

$approved_result = display_data('approved');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Approvals</title>
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
        }
        .scrollable-table {
            overflow-y: auto;
            max-height: 500px; /* Adjust as needed */
            margin-left:400px;
        }
    </style>
</head>
<body>
    <h1>Pending Approvals</h1>
 
    <div class="scrollable-table">
        <table bgcolor="#757575">
            <tr bgcolor="#D3D3D3" align="center">
                <th width="300">USER_ID</th>
                <th width="600">NAME</th>
                <th width="600">EMAIL</th>
                <th width="500">INFO</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($approved_result)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td></td>";
                echo "</tr>";
            }
            ?>
        </table>
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

<?php
$conn->close();
?>
