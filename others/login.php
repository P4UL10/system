<?php  

@include '../interface/config.php';  
require "functions.php";

if(isset($_POST['submit'])){ 
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = md5($_POST['password']);
	$select = " SELECT * FROM user_form WHERE email ='$email' && password = '$pass'";    
	$result = mysqli_query($conn ,$select);
	
	if(mysqli_num_rows($result) > 0 ){
		$row = mysqli_fetch_array($result);
	
		if($row['user_type'] == 'user'){
	
			$_SESSION['admin_name'] = $row['name'];
			header('location:profile.php');
		}elseif($row['user_type'] == 'admin'){
	
			$_SESSION['admin_name'] = $row['name'];
			header('location:../admin/admin.php');
		}
	}else{
		$error[] = 'incorrect email or password!';
		} 
	};

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>

	<?php include('header.php')?>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<form method="post">
			<input type="email" name="email" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<br>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>