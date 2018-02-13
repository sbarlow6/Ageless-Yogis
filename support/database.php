<?php
$dsn = 'mysql:host=localhost;dbname=agelessyogis';
    $username = 'username';
    $password = 'password';

try {
	$db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('database_error.php');
	exit();
}
?>