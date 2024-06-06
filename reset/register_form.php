<?php 
@include '../interface/config.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string ($conn,$_POST['name']);
$email = mysqli_real_escape_string ($conn,$_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$select = " SELECT * FROM user_form WHERE email ='$email' && password = '$pass'";    
$result = mysqli_query($conn,$select);

if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already  exist!';
 }else 
        if($pass != $cpass){
    $error[] = 'password not matched';
        }else{
        $insert = "INSERT INTO user_form(name, email, password,user_type) VALUES('$name','$email','$pass','user')";
        mysqli_query($conn,$insert);
        header('location:login_form.php');   
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .verify .inputs{
            width: 10%;
            padding: 12px;
            font-size: 20px;
            font-size: 17px;
            margin:8px 0;
            background: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .terms-box {
            display: none;
        }

        .bg {
         
        
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .terms-text {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            position: fixed;
            border:solid black 2px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
    </style>
</head>
<body>
<div id="blur">
    <div class="form-container">
        <form  action="email_verification.php" method="post">
            <h3>Register Now</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <div class="inside">
                <input type="text" class="input" name="name" required placeholder="Enter your fullname">
                <input type="email" class="input" name="email" required placeholder="Enter your email">   
                <input type="password" class="input" name="password" required placeholder="Enter your password">
                <input type="password" class="input" name="cpassword" required placeholder="Confirm your password">
            </div>
            <div class="checkbox">
                <input type="checkbox" id="check" required>
                By continuing you agree to <a href="#" id="showTerms">Terms and Conditions</a>
            </div>
            <div class="inside">
                <input type="submit" name="submit" value="Register Now" class="form-btn">
            </div>
            <p>Already have an account? <a href="login_form.php">Login now</a></p>
        </form>
    </div>
</div>
<div class="bg"></div>
<div class="terms-box">
    <div class="terms-text">
        <h2>Terms And Conditions</h2>
        <p>Greetings User</p>
        <p>Republic Act No. 10173 or Data Privacy Act of 2012 is an act protecting individual personal information in information and communications systems in the government and the private sector, creating for this purpose a national privacy commission, and for other purposes.</p>
        <p>The community Learners Academy of San Jose (CLASJ). Recognizes its responsibility in protecting personal and sensitive information. This notice shall explain the purpose and legal bases for the processing of common personal and sensitive data that CLASJ school process the data collected by submitting all the information.</p>
        <p>By submitting this form, I have read the Data Privacy Policy of the school and fully aware that the institution is committed to protect the privacy right of individuals on personal and sensitive information pursuant to the provisions of Republic Act 10173 or The Data Privacy Act of 2012, its implementing rules and regulations and other relevant policies, including issuances of the National Privacy Commission and applicable laws and regulations relating to privacy and data protection. In this regard, i do hereby give a consent of all information to CLASJ school.</p>
        <h4><p>BY SUBMITTING THIS FORM, YOU CONFIRM THAT YOU HAVE READ AND ACCEPTED THE DECLARATION STATED ABOVE.</p></h4>
        <h4><input type="checkbox" id="acceptCheck"> I Agree To The <span> Terms And Conditions</span> And I Read The Privacy Notice</h4>
        <div class="buttons">
            <button class="accept"style="background-color: green; color:white; margin-left:200px; width:200px; padding:10px; border-radius:10px;">Accept</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('showTerms').addEventListener('click', function() {
        document.querySelector('.bg').style.display = 'block';
        document.querySelector('.terms-box').style.display = 'block';
    });

    document.querySelector('.accept').addEventListener('click', function() {
        if (document.getElementById('acceptCheck').checked) {
            alert('Terms and conditions accepted!');
            document.querySelector('.bg').style.display = 'none';
            document.querySelector('.terms-box').style.display = 'none';
        } else {
            alert('Please check the terms and conditions box.');
        }
    });
</script>

</body>
</html>
