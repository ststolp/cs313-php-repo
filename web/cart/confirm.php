<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Order</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    <?php
    echo "Order Information: <br>";
    foreach($_SESSION as $key=>$value) {
        echo "{$value}";
    }
    ?>
</body>
</html>