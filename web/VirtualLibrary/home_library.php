<?php
session_start();
require_once("dbConnect.php");
$db = get_db();
$logged = $_REQUEST['logged'];
if ($logged != NULL) {
    if ($logged == true) {

    }
}
?>
<!DOCTYPE html>
<head>
<title>Library</title>
</head>
<body>
//header
<a href='Register.php'>Register</a>
<?php
if (logged == NULL) {
   echo "<a href='sign_in.php'>Sign in</a>";
}
else if ($logged == false) {
echo "<a href='sign_in.php'>Sign in</a>";
echo "<p style='color:red'>Invalid username or password</p>";
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