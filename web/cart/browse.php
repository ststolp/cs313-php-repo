<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>browse</title>
    <script>
        function buy($item) {
            <?php 
               $_SESSION[$item] = $item;
            ?>
        }
    </script>
</head>
<body>
<h1>Alien Attack Preparedness</h1>
<p>Fleet of trained Fighter Pilots</p>
<button onclick="buy('Alien Space Fleet')">Purchase</button>
<p>Alien Repellent</p>
<button onclick="buy('Space Repellent')">Purchase</button>
<p>High Frequency Speakers</p>
<button onclick="buy('High Frequency Speakers')">Purchase</button>
<p>The Common Cold</p>
<button onclick="buy('The Cold')">Purchase</button>
<p>Laser Cannon Security System</p>
<button onclick="buy('Laser Cannon Security System')">Purchase</button>
<a href="viewCart.php">Go to Cart</a>
</body>
</html>