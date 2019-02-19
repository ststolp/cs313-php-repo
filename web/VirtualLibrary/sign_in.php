<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action='Authentication.php' method='post'>
    <label>Username</label>
    <input type='text' name='username'>
    <label>Password</label>
    <input type='text' name='password'>
    <input type='submit' value='Sign In'>
    </form>
</body>
</html>