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

if ($password != "") {

    $query = "SELECT password FROM patron WHERE username = '$username'";
    $statement = $db->prepare($query);
    $statement->execute();


    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $queried_password = $row['password'];
    
    if (password_verify($password, $queried_password)) {
        $_SESSION['username'] = $username;

        header("Location: home_library.php");
        die();
    }
    else 
    {
        $_SESSION['username'] = "";
       header("Location: home_library.php");
       die();
    }
} else {
    $_SESSION['username'] = "";
    header("Location: home_library.php");
    die();
}


?>