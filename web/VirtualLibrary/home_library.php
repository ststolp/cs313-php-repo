<!DOCTYPE html>
<head>
<title>Library</title>
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

echo "<h1></h1>";

   foreach ($db->query('SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   INNER JOIN author a ON b.author_id = a.author_id') as $row) 
   {
       echo '<p><b>' . $row['b.title'] . ' by ' . $row['a.fname'] . ' ' . $row['a.lname'] . 
       ' ' . $row['b.publisher'] . ', ' . $row['b.year'] . '</p>';
   }
?>
</body>
</html>