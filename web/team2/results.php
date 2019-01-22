<!DOCTYPE html>
<head>
</head>
<body>
<?php
    echo "Your name is: " . $_GET["name"]
    . "<br> Mailto <a href='" . $_GET["email"] . "'>" . $_GET["email"] . "</a>".
    "<br> Your major is: " . $_GET["major"] .
    "<br> Your comments: " . $_GET["comments"];
    ?>
</body>
</html>