<?php
require_once '../interface/config.php';

function display_data($status){
    global $conn;
    $query = "SELECT * FROM user_data WHERE status = '$status'";
    $result = mysqli_query($conn,$query);
    return $result;
}
function approved_data($status){
    global $conn;
    $query = "SELECT * FROM user_data WHERE status = '$status'";
    $result = mysqli_query($conn,$query);
    return $result;
}
?>