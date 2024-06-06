<?php
require_once 'config.php';

function display_data(){
    global $conn;
    $query = "select * from user_form";
    $result = mysqli_query($conn,$query);
    return $result;
}

?>