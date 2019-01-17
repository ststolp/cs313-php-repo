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
        <a style='font-weight:bold' id='home' href='./home.php'>Home</a>
        <a id='about' href='./about.php'>About us</a>
        <a id='login' href='./login.php'>Log In</a>
        </ul>
        </div>";
    } else if ($file == "about") {
       echo "<div>
    <ul>
        <a id='home' href='./home.php'>Home</a>
        <a style='font-weight: bold' id='about' href='./about.php'>About us</a>
        <a id='login' href='./login.php'>Log In</a>
        </ul>
        </div>";
    }
    else {
      echo "<div>
    <ul>
        <a id='home' href='./home.php'>Home</a>
        <a id='about' href='./about.php'>About us</a>
        <a style='font-weight:bold' id='login' href='./login.php'>Log In</a>
        </ul>
        </div>"
    }
?>
</body>
</html>