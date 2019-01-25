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
    echo "Order Information: <br> " . $_SESSION["address"] . "<br>";
    foreach($_SESSION["cart"] as $key=>$value) {
        echo "{$value} <br>";
    }
    ?>
    </div>
</body>
</html>