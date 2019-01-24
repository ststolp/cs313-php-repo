<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
</head>
<body>
<?php 
    foreach ($_SESSION as $key=>$item) {
        echo "$item<br>";
    }
?>
<a href="browse.php">Continue Shopping</a>
<a href="checkOutphp">Go to Checkout</a>
</body>
</html>