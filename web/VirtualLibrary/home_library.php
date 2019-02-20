<?php
session_start();
require_once("dbConnect.php");
$db = get_db();
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<head>
<title>Library</title>
</head>
<body>
//header
<a href='Register.php'>Register</a>
<?php
if ($username == "") {
   echo "<a href='sign_in.php'>Sign in</a>";
}
else {
    echo "<a href='Authentication.php?sign_out=true'>Sign Out</a>";
}
?>
<form action='library.php' method='post'>
    <label>Author's last name</label>
    <input type='checkbox' name='method' value='lname'>
    <input type='checkbox' name='method' value='title'>
    <input type='checkbox' name='method' value='genre'>
    <input type='text' placeholder='Search...' name='search' value="">
    <input type='submit' value='search'>
</form>
<h1>Library</h1>
<form action='library.php' method='get'>

<input type="submit" value="See Books">
</form>
</body>
</html>