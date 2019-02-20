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
<br>
    <form action='create_user.php' method='post'>
    <label>Username</label>
    <input type='text' name='username'><br>
    <label>Password</label>
    <input type='text' name='password'><br>
    <label>Confirm Password</label>
    <input type='text' name='confirm_password'><br>
    <input class="button" type='submit' value='Create Account'>
    </form>
<?php include 'footer.php' ?>
</body>
</html>