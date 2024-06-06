<?php 

session_start();

function signup($data)
{
	$errors = array();
 
	if(!preg_match('/^[a-zA-Z]+$/', $data['name'])){
		$errors[] = "Please enter a valid name";
	}

	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}

	if($data['password'] != $data['cpassword']){
		$errors[] = "Passwords must match";
	}

	$check = database_run("select * from user_form where email = :email limit 1",['email'=>$data['email']]);
	if(is_array($check)){
		$errors[] = "That email already exists";
	}

	if(count($errors) == 0){

		$arr['name'] = $data['name'];
		$arr['email'] = $data['email'];
		$arr['password'] = hash('sha256',$data['password']);
		$arr['date'] = date("Y-m-d H:i:s");

		$query = "insert into user_form (name,email,password,date) values 
		(:name,:email,:password,:date)";

		database_run($query,$arr);
	}
	return $errors;
}




function database_run($query,$vars = array())
{
	$string = "mysql:host=localhost;dbname=user_db";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){

	$user_id = $_SESSION['USER']->user_id;
	$query = "select * from user_form where user_id = '$user_id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];

		if($row->email == $row->email_verified){

			return true;
		}
	}
 
	return false;
 	
}

