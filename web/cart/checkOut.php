<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cartStyle.css">
    <title>Checkout</title>
</head>
<body>
<div class="content">
<h1>Please enter your address</h1>
<form action="confirm.php" method="post">
<input type="text" name="address">
<input type="submit">
<a href="viewCart.php">Return to Cart</a>
<a href="confirm.php">Confirm Purchase</a>
</div>
</body>
</html>