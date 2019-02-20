<?php
session_start();
require_once("dbConnect.php");
$db = get_db();
$user_id = $_SESSION['user_id'];
$items_amount = $_SESSION['items_amount'];
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
<a href = "home_library.php">Home</a>
    <p>Items will be available until the date 
    listed below.</p>
    <h3><?php echo "$items_amount"; ?> items checked out</h3>
    <p>Title                       Due</p>
<?php
    $query = "SELECT b.title, bp.due_date, bp.checked_out FROM books b
    INNER JOIN book_patron bp ON b.book_id = bp.book_id
    INNER JOIN patron p ON p.patron_id = bp.patron_id";
    $statement = $db->prepare();
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $title = $row['title'];
        $due_date = $row['due_date'];
        $checked_out = $row['checked_out'];
          echo "<p>$title             $due_date</p>";
    }
  echo "<p>$checked_out</p>";
  ?>
</body>
</html>