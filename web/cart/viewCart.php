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
   $array = $_GET["item"];
    foreach($array as $key=>$value) {
        $_SESSTION[$key] = $value;
    }
    foreach ($_SESSION as $key=>$item) {
        echo "$item<br>";
    }
?>
<a href="browse.php">Continue Shopping</a>
<a href="checkOut.php">Go to Checkout</a>
</body>
</html>