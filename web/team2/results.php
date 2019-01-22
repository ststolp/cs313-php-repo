<!DOCTYPE html>
<head>
</head>
<body>
<?php
    
    echo "Your name is: " . $_POST["name"]
    . "<br> Mailto <a href='" . $_POST["email"] . "'>" . $_POST["email"] . "</a>".
    "<br> Your major is: " . $_POST["major"] .
    "<br> Your comments: " . $_POST["comments"];
    ?>
</body>
</html>