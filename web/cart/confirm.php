<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cartStyle.css">
    <title>Confirm Order</title>
</head>
<body>
<?php include "header.php";  ?>
<div class="content">
    <h1>Order Confirmation</h1>
    <?php
    $address = htmlspecialchars($_POST["address"]);
    $_SESSION["address"] = $address;
    $_SESSION["city"] = htmlspecialchars($_POST["city"]);
    $_SESSION["code"] = htmlspecialchars($_POST["code"]);
    $_SESSION["country"] = htmlspecialchars($_POST["country"]);
    echo "<b>Order Information: </b><br> <h3>Your Billing Address</h3>" . $_SESSION["address"] . "<br>" .
    $_SESSION["city"] . "<br>" . $_SESSION["code"] . 
    "<br>" . $_SESSION["country"] . "<br><br> <h3>Purchase Items</h3>";
    foreach($_SESSION["cart"] as $key=>$value) {
        echo "{$value} <br>";
    }
    ?>
    </div>
</body>
</html>