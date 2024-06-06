<?php 
@include '../interface/config.php';  
session_start();
if(isset($_POST['submit'])){ 
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pass = md5($_POST['password']);
$select = " SELECT * FROM user_form WHERE email ='$email' && password = '$pass'";    
$result = mysqli_query($conn ,$select);

if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'user'){

        $_SESSION['admin_name'] = $row['name'];
        header('location:login.php');
    }elseif($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        header('location:../admin/admin.php');
    }
}else{
    $error[] = 'incorrect email or password!';
    } 
};






?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>login form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="form-container">
<form id="form" method="post">
    <h3>login</h3>
    <?php
    if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    };
};
    ?>
    <div class="inside">
    <input id="input" type="email" name="email" required placeholder="enter your email ">
    <input id="input" type="password" name="password" required placeholder="enter your password">
<input type="submit" name="submit" value="login now" class="form-btn">
</div>
<p style="font-size:23px;">forgot the password?<a href="forgotpassword.php">Forgot Password</a></p>
<p>don't have an account? <a href="register_form.php">Register now</a></p>
</form>
</div>



</body>
</html>