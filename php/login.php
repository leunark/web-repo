<?php
session_start();
require('response.php');
require('dbconnect.php');

if (isset($_SESSION['username'])) {
   $response->JSONSuccess('You are already logged in!');
}

//'login' will be sent from the login button
if(isset($_POST['login'])){
	if(empty($_POST['username'])) {
		$response->JSONError('Username is empty!');
	} else if(empty($_POST['password'])) {
		$response->JSONError('Password is empty');
	} else {
		$username = trim($_POST['username']);
		$password = $_POST['password'];
	}

	$sql = "SELECT * FROM users WHERE username = :username";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':username', $username);
	if(!$stmt->execute()) {
		$response->JSONError('DB execute failed!');
	}

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if(!$row) {
		$response->JSONError('Row could not be fetched due to inavailability!');
	}

	$passwordHash = $row['password'];
	if(!password_verify($password, $passwordHash)){
		$response->JSONError('Username or password is wrong!');
	}
	$_SESSION['username'] = $row['username'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['timestamp'] = $_SERVER['REQUEST_TIME'];
	//Get actual readable time: date('m/d/Y H:i:s', $_SESSION['timestamp']);
	
	$response->JSONSuccess('You successfully logged into your account!');

} else {
	$response->JSONError('Parameter login is not set!');
}
?>