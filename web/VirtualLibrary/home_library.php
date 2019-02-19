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
$queried = $_SESSION['queried'];
$password = $_SESSION['password'];
echo "<p>The username is $username</p>
<p>The queried password is $queried and the password is $password</p> ";
echo password_hash("tesing", PASSWORD_DEFAULT);
echo "<br>";
echo password_hash("tesing", PASSWORD_DEFAULT);
if ($username == "") {
   echo "<a href='sign_in.php'>Sign in</a>";
}
else {
    echo "<a href='sign_in.php?sign_out=true'>Sign Out</a>";
}
?>

<!-- <?php 
    // $query = "ALTER TABLE patron
    //           ADD username VARCHAR(255)";
    // $query2 = "ALTER TALBLE patron
    // ADD password VARCHAR(255)";
    // $statement = $db->prepare($query);
    // $statement2 = $db->prepare($query2);
    // $statement->execute();
    // $statement2->execute();

?> -->
<h1>Library</h1>
<form action='library.php' method='get'>
<input type="submit" value="See Books">
</form>
</body>
</html>