<?php
session_start();
require_once("dbConnect.php");
$db = get_db();
$username = $_SESSION['username'];
if ($username == "") {
    header("Location: home_library.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    echo"<h2>Your Books</h2>";
   $query = "SELECT b.title, bp.due_date, bp.checked_out FROM books b
    INNER JOIN book_patron bp ON b.book_id = bp.book_id
    INNER JOIN patron p ON p.patron_id = bp.patron_id
    WHERE bp.patron_id = $user_id";
    $statement = $db->prepare($query);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $title = $row['title'];
        $due_date = $row['due_date'];
        $checked_out = $row['checked_out'];
          echo "<p>$title _____________________$due_date</p>";
    }
    die();
?>
</body>
</html>