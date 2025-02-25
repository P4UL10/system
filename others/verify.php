<div?php

	require "mail.php";
	require "functions.php";
	check_login();

	$errors = array();

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){
		$vars['code'] =  rand(10000,99999);

		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);
		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$user_id = $_SESSION['USER']->user_id;
					$query = "update user_form set email_verified = email where user_id = '$user_id' limit 1";
					
					database_run($query);

					header("Location: profile.php");
					die;
				}else{
					echo "Code expired";
				}

			}else{
				echo "wrong code";
			}
		}else{
			echo "You're already verified";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
</head>
<body>

	<h1>Verify</h1>

	<div class="form-container"
  
	<br><br>
 	<div>
			<br>an email was sent to your address. paste the code from the email here<br>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div><br>

		<form method="post">
			<input type="text" name="code" placeholder="Enter your Code"><br>
 			<br>
			 <?php if(!check_verified()):?>
			<a href="verify.php">
				<button>send code</button>
			</a>
		<?php endif;?>
			<input type="submit" value="Verify">
		</form>
	</div>
			 </div>	

</body>
</html>