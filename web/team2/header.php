<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
    $file = $_SERVER['PHP_SELF'];
    echo "The file name is $file";
    if ($file == "/team2/home.php") {
    echo "<ul>
        <p><a style='font-weight:bold' href='./home.php'>Home</a></p>
        <p><a href='./about.php'>About us</a></p>
        <p><a id='login' href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    } else if ($file == "/team2/about.php") {
       echo "<div>
    <ul>
        <p><a href='./home.php'>Home</a></p>
        <p><a style='font-weight: bold' href='./about.php'>About us</a></p>
        <p><a href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    }
    else {
      echo "<div>
    <ul>
        <p><a href='./home.php'>Home</a></p>
        <p><a href='./about.php'>About us</a></p>
        <p><a style='font-weight:bold' href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    } 
?>
</body>
</html>