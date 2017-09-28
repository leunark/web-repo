<?php
header('Content-Type: application/json');
require('response.php');

class TestError {
	public $error;
	public $message; 
}

$obj = new TestError();
$obj->error = 'MyError';
$obj->message = 'This is my Message!';


$response->addElement('User','Kanacke ist ein Fisch trolloltrolt');
$response->addElement('User2','Fisch ist ein Fisch trolloltrolt');
$response->addElement('User3','Fisch ist ein Fisch trolloltrolt');
$response->removeElement('User2');

$response->JSONSuccess('It worked lol.');
$response->JSONError('It failed lol.');


?>