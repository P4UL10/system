<?php
include '../interface/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Generate verification code
    $code = rand(10000, 99999);
    
    $email = $_POST['email'];


    $query = "INSERT INTO user_form (codes, email) VALUES ('$code', '$email)'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('iss', $code, $email);
    $stmt->execute();

    // Send verification email
    $message = "Your verification code is: $code";
    $subject = "Email verification";
    send_mail($email, $subject, $message);
    echo "Verification code has been sent to your email.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Forgot Password</h3>
            <div class="inside">
                <input type="email" name="email" required placeholder="Enter your email">
                <input type="submit" name="reset" value="Reset" class="form-btn">
            </div>
        </form>
        <form action="" method="post">
            <div class="inside">
                <input type="email" name="email" required placeholder="Enter your email">
                <input type="text" name="codes" required placeholder="Enter verification code">
                <input type="submit" name="verify" value="Verify" class="form-btn">
            </div>
        </form>
    </div>
</body>
</html>
