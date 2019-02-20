<?php
session_sart();
require_once("dbConnect.php");
$db = get_db();

$checkout = $_POST['checkout'];
$_SESSION['items_amount'] = count($checkout);
$username = $_SESSION['username'];
if ($username == "") {
    header("Location: library.php");
}
$query = "SELECT patron_id FROM patron WHERE username = '$username'";
$statement = $db->prepare($query);
$statement->execute();
$user_id_array = $statement->fetch(PDO::FETCH_ASSOC);
$user_id = $user_id_array['patron_id'];
$_SESSION['user_id'] = $user_id;
foreach($checkout as $newBook) {
    $query = "INSERT INTO book_patron (book_id, patron_id, due_date, checked_out)
    VALUES (:book_id, :patron_id, CURRENT_DATE + interval '30' day, CURRENT_DATE)";
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $newBook);
    $statement->bindValue(':patron_id', $user_id);
    $statement->execute();
}



header("Location: receipt.php");
die();

?>