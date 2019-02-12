<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="insertScripture.php" method="post">
    <label>Book</label>
    <input type="text" name="Book"/>
    <label>Chapter</label>
    <input type="text" name="Chapter"/>
    <label>Verse</label>
    <input type="text" name="Verse"/>
    <label>Contents</label>
    <textarea row="4" col="50" name="Contents"></textarea>
    <input type="submit" value="Submit"/>
<?php
//echo "<label>Faith</label";
//echo "<input type='checkbox' name='topic' value='Faith'>";
//echo "<input type='checkbox' name='topic' value='Sacrifice'>
//        <input type='checkbox' name='topic' value='Charity'>;
      try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $_SESSION['db'] = $db;
}


foreach ($db->query('SELECT topic FROM topic') as $row)
{
  echo "<input type='checkbox' name='topic' value='" . $row['id'] . "'>";
}

catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
<input type="submit" value="Submit"/>
</form>
</body>
</html>