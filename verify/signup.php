<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link rel="stylesheet" href="../css/style.css">
    <style>
  
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
	<div  class="form-container">
	<div>

		
		
		<form id="form" method="post">
	
		<h3>Register Now</h3>
        <?php
        if(isset($errors)){
        foreach($errors as $error){
        echo '<span class="error-msg">'.$error.'</span>';
        }
    }
?>
		<div class="inside">
			<input type="text" class="input"  name="name" required placeholder="name"><br>
			<input type="text" class="input"  name="email" required placeholder="Email"><br>
			<input type="text" class="input"  name="password" required placeholder="Password"><br>
			<input type="text" class="input"  name="cpassword" required placeholder="Retype Password"><br>
			<br>
			</div>
			<div class="checkbox">
                <input type="checkbox" id="check" required>
                By continuing you agree to <a href="#" id="showTerms">Terms and Conditions</a>
           
			<div class="inside">
			<input type="submit" name="submit" value="Signup" class="form-btn">
			</div>
			 <p>Already have an account? <a href="login.php">Login now</a></p>
		</form>
	</div>
	</div>
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