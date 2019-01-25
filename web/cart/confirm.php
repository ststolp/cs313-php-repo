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
    <h1>Order Confirmation</h1>
    <div class="content">
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