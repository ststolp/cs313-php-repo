<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>browse</title>
    <script>
        function buy(<?php $item ?>) {
            <?php 
               $_SESSION[$item] = $item;
            ?>
        }
    </script>
</head>
<body>
<h1>Alien Attack Preparedness</h1>
<form action="viewCart.php" method="POST">
<p>Fleet of trained Fighter Pilots</p>
<input type="checkbox" name="item[]" value="Alien Space Fleet">
<p>Alien Repellent</p>
<input type="checkbox" name="item[]" value="Space Repellent">
<p>High Frequency Speakers</p>
<input type="checkbox" name="item[]" value="High Frequency Speakers">
<p>The Common Cold</p>
<input type="checkbox" name="item[]" value="The Cold Virus">
<p>Laser Cannon Security System</p>
<input type="checkbox" name="item[]" value="Laser Cannon Security System">
<input type="submit">
</body>
</html>