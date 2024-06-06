<?php
@include 'config.php';
session_start();
session_unset();
session_destroy();
header('Location:../reset/login_form.php');
?>