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
    <form action='Authentication.php' method='post'>
    <label>Username</label>
    <input type='text' name='username' value="">
    <label>Password</label>
    <input type='text' name='password' value="">
    <input type='submit' value='Sign In'>
    </form>

<?php include 'footer.php'  ?>
</body>
</html>