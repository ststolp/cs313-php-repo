<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>browse</title>
    <script>
        function add(item) {
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  //  document.getElementById("cart").value = document.getElementById("cart").value++;
                }
            }
            xmlhttp.open("POST", "add.php?page=browse&item=" + item, true);
            xmlhttp.send(); 
        }
        </script>
</head>
<body>
<h1>Alien Attack Preparedness</h1>
<p>Fleet of trained Fighter Pilots</p>
<button onclick="add('Alien Space Fleet')">Add to Cart</button>
<p>Alien Repellent</p>
<button onclick="add('Space Repellent')">Add to Cart</button>
<p>High Frequency Speakers</p>
<button onclick="add('High Frequency Speakers')">Add to Cart</button>
<p>The Common Cold</p>
<button onclick="add('The Cold Virus')">Add to Cart</button>
<p>Laser Cannon Security System</p>
<button onclick="add('Laser Cannon Security System')">Add to Cart</button>
<a href="checkOut.php">Proceed to checkOut</a>
</body>
</html>