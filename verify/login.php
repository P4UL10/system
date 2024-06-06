<?php  
@include '../interface/config.php';  
require "functions.php";



$error = array();

function login($data)
{
    $errors = array();

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    if (count($errors) == 0) {
        $arr['email'] = $data['email'];
        $password = hash('sha256', $data['password']);

        // Modify the query to select based on email and user_type
        $query = "SELECT * FROM user_form WHERE email = :email AND user_type IN ('user', 'admin') LIMIT 1";

        $row = database_run($query, $arr);

        if (is_array($row)) {
            $row = $row[0];

            if ($password === $row->password) {
                // Check user_type to determine whether it's an admin or user
                if ($row->user_type === 'user') {
                    $_SESSION['USER'] = $row;
                    $_SESSION['LOGGED_IN'] = true;
                } elseif ($row->user_type === 'admin') {
                    $_SESSION['ADMIN'] = $row;
                    $_SESSION['LOGGED_IN_ADMIN'] = true;
                }
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $errors = login($_POST);

    if (count($errors) == 0) {
        if (isset($_SESSION['LOGGED_IN'])) {
            header("Location: profile.php");
        } elseif (isset($_SESSION['LOGGED_IN_ADMIN'])) {
            header("Location: ../admin/admin.php");
        }
        die;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
		<div>
	
		</div>
		<div class="form-container">
		<form id="form" method="post">
		<h3>login</h3>
		<div>
			<?php if(count($error) > 0):?>
				<?php foreach ($error as $error):?>
					<span class="error-msg"><?=$error?></span> <br>	
				<?php endforeach;?>
			<?php endif;?>

		</div>
		<div class="inside">
			<input id="input" type="email" name="email" placeholder="Email"><br>
			<input id="input" type="password" name="password" placeholder="Password"><br>
			<br>
			<input type="submit" value="Login" name="submit" class="form-btn">
				</div>
				<p style="font-size:23px;">Forgot the password?<a href="../reset/forgotpassword.php">Forgot Password</a></p>
				<p>don't have an account? <a href="signup.php">Register now</a></p>
				
		</form>
		
	</div>
				</div>
			
</body>
</html>
