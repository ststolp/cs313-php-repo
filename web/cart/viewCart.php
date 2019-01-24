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
    foreach($array as &$value) {
        $_SESSTION[] = $value;
        echo "{$value} <br>";
    }
    print_r($_SESSION);
?>
<a href="browse.php">Continue Shopping</a>
<a href="checkOut.php">Go to Checkout</a>
</body>
</html>