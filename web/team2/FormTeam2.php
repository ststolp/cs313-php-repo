<!DOCTYPE html>
<head>
</head>
<body>
<form action="results.php" method="post">
    Name: <input type="text" name="name">
    Email: <input type="text"  name="email">
    <p> Choose major</p>
    <?php
      $majors = ["CS" => "Computer Science", "WDD"=>"Web Design and Development",
                 "CIT"=>"Computer Information Technology", "CE"=>"Computer Engineering"];
        foreach($majors as $major) {
            echo "<input type='radio' name ='major' value='$major'>$major<br>";
        }
   ?>
    
    <p>Comments</p>
    <textarea name="comments"></textarea>   
    <input type="checkbox" name="check[]" value="NA">North America<br>
    <input type="checkbox" name="check[]" value="SA">South America<br>
    <input type="checkbox" name="check[]" value="Europe">Europe<br>
    <input type="checkbox" name="check[]" value="Asia">Asia<br>
    <input type="checkbox" name="check[]" value="Australia">Australia<br>
    <input type="checkbox" name="check[]" value="Africa">Africa<br>
    <input type="checkbox" name="check[]" value="Antarctica">Antarctica<br>
    <input type="submit">
</form>
</body>
</html>