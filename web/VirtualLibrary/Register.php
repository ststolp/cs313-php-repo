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
<div class="content">
    <form action='create_user.php' method='post'>
    <label>Username</label>
    <input type='text' name='username'><br><br>
    <label>Password</label>
    <input type='password' name='password'><br><br>
    <label>Confirm Password</label>
    <input type='password' name='confirm_password'><br><br>
    <input class="button" type='submit' value='Create Account'>
    </form>
    </div>  
<?php include 'footer.php' ?>
</body>
</html>