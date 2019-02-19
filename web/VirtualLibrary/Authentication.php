<?php
    session_start();
    require_once("dbConnect.php");
    $db = get_db();

    $sign_out = $_REQUEST['sign_out'];
    if ($sign_out != NULL && $sign_out == true) {
        $_SESSION['username'] = "";
        
    }
 //   $_SESSION['id'] = 
    $username = $_POST['username'];
    $password = $_POST['password'];

if ($password != NULL) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT password FROM user WHERE username = $username";
    $statement = $db->prepare($query);
    $statement->execute();


    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if ($row['password'] == $hashed_password) {
        $_SESSION['username'];
        header("Location: home_library.php?logged=true");
    }
    else 
    {
       header("Location: home_library.php?logged=false");
    }
} else {
    header("Location: home_library.php);
}


?>