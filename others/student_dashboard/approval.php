<?php
include 'function_approvals.php';
if(isset($_POST['approve'])){
    $id = $_POST['user_id'];
    $select = "UPDATE approval SET status = 'approved' WHERE user_id = '$id' ";
    $result = mysqli_query($conn, $select);
    if($result) {
        header("Location: approval.php");
        exit();
    } else {
        echo "Error approving user.";
    }
}

if(isset($_POST['delete'])){
    $id = $_POST['user_id'];
    $select = "UPDATE approval SET status = 'archived' WHERE user_id = '$id' ";
    $result = mysqli_query($conn, $select);
    if($result) {
        header("Location: approval.php");
        exit();
    } else {
        echo "Error deleting user.";
    }
}
$pending_result = display_data('pending');

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
                <th width="500">STUDENT APPROVAL</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($pending_result)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>
                    <form method='post'>
                        <input type='hidden' name='user_id' value='" . $row['user_id'] ."'>
                        <button type='submit' name='approve' style='background-color:#7ff233; margin-left: 10px; border-radius: 5px; padding: 2px; width: 90px;'>Approve</button>
                        <button type='submit' name='delete' style='background-color:#7ff233; margin-left: 10px; border-radius: 5px; padding: 2px; width: 90px;'>Delete</button>
                    </form>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
