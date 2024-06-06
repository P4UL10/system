<?php
@include 'change_password_process.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <form id="form" method="post">
            <h3>Forgot Password</h3>
            <?php
           
            ?>
            <div class="inside">
            <form action="forgot_password_process.php" method="post">
                <input id="email" type="email" name="email" class="form-control" required placeholder="Enter your email">
                <input type="submit" name="submit" value="Reset Password" class="form-btn">
</form>
            </div>
            <p>Remember your password? <a href="login_form.php">Log in</a></p>
        </form>
    </div>
</body>
</html>
