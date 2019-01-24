<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
    <script>
      function add(item) {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                 //   document.getElementById("cart").value = document.getElementById("cart").value++;
                }
            }
            xmlhttp.open("POST", "add.php?page=viewCart&item=" + item, true);
            xmlhttp.send(); 
        }
    </script>
</head>
<body>
<form action="add.php?page=viewCart" method="post">
<?php 
    echo "Items: ";
    foreach($_SESSION["cart"] as $value) {
        echo "{$value}<input type='checkbox' name='item[]' value='$value'>Remove<br>";
    }
?>
<button type="submit">
<a href="browse.php">Continue Shopping</a>
<a href="checkOut.php">Go to Checkout</a>
</body>
</html>