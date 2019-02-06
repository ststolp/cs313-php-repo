<!DOCTYPE html>
<head>
</head>
<body>
<?php
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
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
<h1>Scripture Resources</h1>
<?php
   foreach ($db->query('SELECT book, chapter, verse, content FROM scripture') as $row) 
   {
       echo "<p><b>$row['book'] $row['chapter']:$row['verse']</b> - '$row['content']'</p>";
   }
</body>
</html>