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
    <input type='text' name='username' value="">
    <label>Password</label>
    <input type='text' name='password' value="">
    <input type='submit' value='Sign In'>
    </form>
</body>
</html>