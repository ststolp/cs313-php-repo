<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <script>
    function address() {
        <?php
        $string = $dom->getElementById('address');
        $address = $string->nodeValue;
        $_SESSION["address"] = $address;
        ?>
    }
    </script>
</head>
<body>
<h1>Please enter your address</h1>
<input id="address" type="text" onchange="address()">
<a href="viewCart.php">Return to Cart</a>
<a href="confirm.php">Confirm Purchase</a>
</body>
</html>