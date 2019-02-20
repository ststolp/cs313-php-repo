<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="lib_style.css">
</head>
<body>
<?php include 'header.php' ?>
    <form action='create_user.php' method='post'>
    <label>Username</label>
    <input type='text' name='username'>
    <label>Password</label>
    <input type='text' name='password'>
    <label>Confirm Password</label>
    <input type='text' name='confirm_password'>
    <input class="button" type='submit' value='Sign In'>
    </form>
<?php include 'footer.php' ?>
</body>
</html>