<?php
session_start();
require_once("dbConnect.php");
$db = get_db();

$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = 'INSERT INTO patron (username, password)
        VALUES (:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $hashed_password);
$statement->execute();

header("location: sign_in.php");
die();
?>