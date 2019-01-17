<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
    $file = $_GET['file'];
    if ($file == "home") {
      echo "<p>The file is: $file</p><div>
    <ul>
        <p><a style='font-weight:bold' href='./home.php'>Home</a></p>
        <p><a href='./about.php'>About us</a></p>
        <p><a id='login' href='./team2/login.php'>Log In</a></p>
        </ul>
        </div>";
    } else if ($file == "about") {
       echo "<div>
    <ul>
        <p><a href='./home.php'>Home</a></p>
        <p><a style='font-weight: bold' href='./team2/about.php'>About us</a></p>
        <p><a href='./login.php'>Log In</a></p>
        </ul>
        </div>";
    }
    else {
      echo "<div>
    <ul>
        <p><a href='./home.php'>Home</a></p>
        <p><a href='./about.php'>About us</a></p>
        <p><a style='font-weight:bold' href='./team2/login.php'>Log In</a></p>
        </ul>
        </div>";
    }
?>
</body>
</html>