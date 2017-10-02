<?php
session_start(); 
require('response.php');
require('dbconnect.php');

if (!isset($_SESSION['username'])) {
	$response->JSONError('You are not logged in!');
}
$username = $_SESSION['username'];

$sql = "SELECT username, name, status FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username);
if(!$stmt->execute()) {
	$response->JSONError('DB execute failed!');
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row) {
	$response->JSONError('Row could not be fetched due to inavailability!');
}
$response->addElement('username',$row['username']);
$response->addElement('name',$row['name']);
$response->addElement('status',$row['status']);
$response->JSONSuccess('User data were fetched successfully!');
?>