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
<?php include "header.php"; ?>
<div class="content">
<h1>Please enter your billing address</h1>
<form action="confirm.php" method="post">
<p>Street Address</p>
<input type="text" name="address">
<p>City</p>
<input type="text" name="city">
<p>Zip code</p>
<input type="text" name="code">
<p>Country</p>
<input type="text" name="country"><br>
<input class="button" type="submit"><br>
<a href="viewCart.php">Return to Cart</a>
</div>
</body>
</html>