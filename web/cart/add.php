<?php
    session_start();
if ($_REQUEST["page"] == "browse") {
    $item = $_REQUEST["item"];
    $_SESSION["cart"][$item] = $item;
    header('Location: browse.php');
   } else {
       foreach($_POST["item"] as $item) {
       unset($GLOBALS[_SESSION]["cart"][$item]);
       }
      header('Location: viewCart.php');
   }
?>
