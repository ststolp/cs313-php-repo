<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cart</title>
    <link rel="stylesheet" type="text/css" href="cartStyle.css">
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
<?php  include "header.php";  ?>
<div content="content">
<h1>Your Cart</h1>
<form action="add.php?page=viewCart" method="post">
   <?php 
       echo "Items: ";
       foreach($_SESSION["cart"] as $value) {
           echo "{$value}  Remove: <input type='checkbox' name='item[]' value='$value'><br>";
       }
    ?>
<input type="submit">
</form>
<a href="checkOut.php">Go to Checkout</a>
</div>
</body>
</html>