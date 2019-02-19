<?php
    session_start();
    require_once("dbConnect.php");
    $db = get_db();
 //   $_SESSION['id'] = 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT password FROM user WHERE username = $username";
    $statement = $db->prepare($query);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($row['password'] == $hashed_password) {
        $_SESSION['username'];
    }
    else 
    {
       // header("")
    }



?>