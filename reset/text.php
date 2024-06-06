if(isset($_POST['resend'])){

$email = $_GET['email'];

$mail nеw PHPMailer(true);

$verificationCode = rand(111111,999999);

try {

Smail new PHPMailer(true);

$mail->isSMTP();

$mail->Host='smtp.gmail.com';

$mail->SMTPAuth = true;

$mail->Username 'print.my.shirts.help@gmail.com';


$mail->Password = '2.



$mail->SHTPSecure = 'ssl';



$mail->Port 465;





$mail->setFrom 'print.my.shirts.help@gmail.com');



$mail->addAddress: $email;



$mail->IsHTML(true);



$mail->Subject Email Verification';



$mail->Body *<p> Your Verification code is: SverificationCode. </p>';



Sverify_email mysqli query($conn, "SELECT FROM customer WHERE email 'Semail'");

if mysqli_num_rows(Sverify_mail)>

mysqli query($conn, "UPDATE customer SET code 'SverificationCode WHERE email 'Semail' "); header("Location:verificationCode.php?email-Sumail");


$mail->send()

} catch (Exception $e) {
}
}