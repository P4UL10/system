<?php
require_once '../interface/config.php';
require_once 'function_approval.php';
if(isset($_POST['approve'])){
    $id = $_POST['user_id'];
    $select = "UPDATE user_data SET status = 'approved' WHERE user_id = '$id' ";
    $result = mysqli_query($conn, $select);
    if($result) {
        header("Location: admin_pending.php");
        exit();
    } else {
        echo "Error approving user.";
    }
}
if(isset($_POST['delete'])){
    $id = $_POST['user_id'];
    $select = "UPDATE user_data SET status = 'archived' WHERE user_id = '$id' ";
    $result = mysqli_query($conn, $select);
    if($result) {
        header("Location: admin_pending.php");
        exit();
    } else {
        echo "Error deleting user.";
    }
}
if(isset($_POST['archive'])){
    $id = $_POST['user_id'];
    $select = "UPDATE user_data SET status = 'pending' WHERE user_id = '$id' ";
    $result = mysqli_query($conn, $select);
    if($result) {
        header("Location: admin_archive.php");
        exit();
    } else {
        echo "Error deleting user.";
    }
}

?>