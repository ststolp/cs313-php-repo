<?php
    session_start();
if ($_REQUEST["page"] == "browse") {
    $item = $_REQUEST["item"];
    $_SESSION["cart"][$item] = $item;
    header('Location: browse.php');
   } else {
       $item = $_REQUEST["item"];
       unset($_SESSION["cart"][$item]);
      header('Location: viewCart.php');
   }
?>
