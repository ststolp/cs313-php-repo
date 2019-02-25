<?php
session_start();
require_once("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<head>
<title>Library</title>
<link rel="stylesheet" type="text/css" href="lib_style.css">
</head>
<body>
<?php include 'header.php';  ?>
<div class="content">
<form action='library.php' method='post'><br>
    <label>Author's last name</label>
    <input type='checkbox' name='method' value='lname'>
    <label>Title</label>
    <input type='checkbox' name='method' value='title'>
     <label>Genre</label>
    <input type='checkbox' name='method' value='genre'>
    <input type='text' placeholder='Search...' name='search' value="">
    <input class="button" type='submit' value='search'>
</form>

<h1>Library</h1>
<form action='library.php' method='get'>
<input class="button" type="submit" value="See Books">
<br>
</form>
</div>
<?php include 'footer.php';  ?>
</body>
</html>