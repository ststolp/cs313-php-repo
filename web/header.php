<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
    $file = $GLOBALS["file"];
    if ($file == "home") {
      echo "<div>
    <ul>
        <p><a style='font-weight:bold' id='home' href='./home.php'>Home</a></p>
        <p><a id='about' href='./about.php'>About us</a></p>
        <p><a id='login' href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    } else if ($file == "about") {
       echo "<div>
    <ul>
        <p><a id='home' href='./home.php'>Home</a></p>
        <p><a style='font-weight: bold' id='about' href='./about.php'>About us</a></p>
        <p><a id='login' href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    }
    else {
      echo "<div>
    <ul>
        <p><a id='home' href='./home.php'>Home</a></p>
        <p><a id='about' href='./about.php'>About us</a></p>
        <p><a style='font-weight:bold' id='login' href='./login.php'>Log In</a></p>
        </ul>
        </div>"
    }
?>
</body>
</html>