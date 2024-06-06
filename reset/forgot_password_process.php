<?php

    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['reset'])) {
        $email = $_POST['email'];
        header ('verificationcode.php');
    }
    else {
        exit();
    }
   
    
    $mail = new PHPMailer(true);
    

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'paulandrewgallego24@gmail.com';
        $mail->Password   = 'ggjd bpff eeoq pgew';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
    
        $mail->setFrom('paulandrewgallego24@gmail.com', 'Admin');
        $mail->addAddress($email);

        $codes = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body    = 'To reset your password click '$codes' here. </br>Reset your password in a day.';
        $conn = new mySqli('localhost', 'root', '', 'user_db');

        if($conn->connect_error) {
            die('Could not connect to the database.');
        }

        $verifyQuery = $conn->query("SELECT * FROM user_form WHERE email = '$email'");

        if($verifyQuery->num_rows) {
            $codeQuery = $conn->query("UPDATE user_form SET codes = '$codes' WHERE email = '$email'");
        }
        $conn->close();
?>
