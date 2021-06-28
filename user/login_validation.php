<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(empty($username)){
	$username_error='Insert your name!';
}elseif(strlen($username) < 3 || strlen($username) > 20 || !preg_match("/^[a-zA-Z]+$/ui",$username)) {
	$username_error='Name must consists minimum 3 and maximum 20 english letters!';
}


if(empty($email)){
	$email_error='Insert your email!';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$email_error = 'Email shuold be written this way: name@name.domain !';
}


$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
if(empty($password)){
	$password_error='Insert your password!';
}elseif(!$uppercase || !$lowercase || !$number || strlen($password) < 8){
   $password_error = 'Password must contain at least one big and small letters, one number and be made of at least 8 symbols!';
}

if(empty($username_error) && empty($email_error) && empty($password_error)){
	$current_data=file_get_contents('file.json');	
	$array_data=json_decode($current_data, true);
	foreach($array_data->Students as $item){
		if($item->Username == $username && $item->Email == $email && $item->Password == $password)
		include('thanks.php');
	}
	//header("Location: http://localhost/final/index.php");
}else{
include('login.php');
}
?>