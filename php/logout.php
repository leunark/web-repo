<?php
require('response.php');

session_start();
session_destroy();
$response->JSONSuccess('You successfully logged out!');
?>