<?php
session_start(); 
require('response.php');
require('dbconnect.php');

if(isset($_POST['register'])) {
    if(empty($_POST['username'])) {
        $response->JSONError('Username is empty!');
    } else if(empty($_POST['password'])) {
        $response->JSONError('Password is empty!');
    } else if(empty($_POST['passwordConfirmation'])) {
        $response->JSONError('PassowrdConfirmation is empty!');
    } else {
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];
    }

    if(strlen($username)<4){
        $response->JSONError('Username is too short!');
    } else if(strlen($password)<4){
        $response->JSONError('Password is too short!');
    }

    if(strcmp($password,$passwordConfirmation)!==0) {
        $response->JSONError('Password confirmation check failed!');
    }

    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    
    if(!$stmt->execute()) {
        $response->JSONError('DB execute failed!');
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$row) {
        $response->JSONError('Fetching a row from the PDOStatement object failed!');
    }

    if($row['num'] > 0){
        $response->JSONError('Username already exists!');
    }
    
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
 
    if(!$stmt->execute()) {
        $response->JSONError('DB execute failed!');
    }

    if($stmt->rowCount()<=0) {
        $response->JSONError('No lines were affected!');
    }
    $response->JSONSucces('You have successfully registered!');
} else {
    $response->JSONError('Parameter login is not set!');
}

?>