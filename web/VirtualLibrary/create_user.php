<?php
session_start();
require_once("dbConnect.php");
$db = get_db();

$username = $_POST['username'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = 'INSERT INTO user (username, password)
        VALUES (:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username, PDO::PARAM_INT);
$statement->bindValue(':password', $hashed_password, PDO::PARAM_INT);
$db->execute();

header("location: sign_in.php");
die();
?>