<?php
    if(isset($_POST['reset'])) {
        $email = $_POST['email'];
        header ('login_form.php');
    }
    else {
        exit();
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
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

        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset';
        $mail->Body    = '$code';

        $conn = new mySqli('localhost', 'root', '', 'user_db');

        if($conn->connect_error) {
            die('Could not connect to the database.');
        }

        $verifyQuery = $conn->query("SELECT * FROM user_form WHERE email = '$email'");

        if($verifyQuery->num_rows) {
            $codeQuery = $conn->query("UPDATE user_form SET code = '$code' WHERE email = '$email'");
        }
        $conn->close();
?>
