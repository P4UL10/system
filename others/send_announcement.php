<?php
$user_id = $_POST['user_id']; 
$email = getEmailFromDatabase($user_id);



if ($email) {
require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

require PHPMailer\PHPMailer\PHPMailer;
require PHPMailer\PHPMailer\Exception;

// Step 2: Check if form is submitted

    $mail = new PHPMailer();


    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'paulandrewgallego24@gmail.com'; // Your SMTP username
    $mail->Password = 'ggjd bpff eeoq pgew'; // Your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // Your SMTP port

    // Step 5: Sender and recipient settings
    $mail->setFrom('paulandrewgallego24@gmail.com', 'Admin');
    $mail->addAddress('$email');

    // Step 6: Email content
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $message;

    // Step 7: Send email
    if ($mail->send()) {
        echo 'Announcement sent successfully!';
    }else{
        echo 'Error sending announcement: ' . $mail->ErrorInfo;
    
    }else{
        echo 'Email address not found for user ID ' . $user_id;
    }
}
   

$conn = new mySqli('localhost', 'root', '', 'user_db');

        if($conn->connect_error) {
            die('Could not connect to the database.');
        }
        function getEmailFromDatabase($user_id) {
        $verifyQuery = $conn->query("SELECT email FROM user_form WHERE user_id = '$user_id'");
        return 'recipient@example.com';
    }
        
?>
