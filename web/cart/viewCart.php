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
    echo "Items: <br>";
   $array = $_POST["item"];
    foreach($array as $value) {
        $_SESSION[$value] = $value;
    }
    foreach($_SESSION as $value) {
        echo "{$value} <br>";
    }
?>
<a href="browse.php">Continue Shopping</a>
<a href="checkOut.php">Go to Checkout</a>
</body>
</html>