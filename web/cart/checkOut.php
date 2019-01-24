<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
<h1>Please enter your address</h1>
<form action="confirm.php" method="get">
<input type="text" name="address">
<input type="submit">
<a href="viewCart.php">Return to Cart</a>
<a href="confirm.php">Confirm Purchase</a>
</body>
</html>