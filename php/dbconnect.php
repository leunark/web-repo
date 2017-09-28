<?php
	require_once('response.php');

	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'web');
	DEFINE('DB_USER', 'root');
	DEFINE('DB_PASSWORD', '');

	try {
		$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4', DB_USER, DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>