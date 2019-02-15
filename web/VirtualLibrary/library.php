<?php
//require_once("../dbConnect.php");
$db = NULL;
	try {
		$dbUrl = getenv('DATABASE_URL');
		if (!isset($dbUrl) || empty($dbUrl)) {

		}
		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		// Create the PDO connection
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		// If this were in production, you would not want to echo
		// the details of the exception.
		echo "Error connecting to DB. Details: $ex";
		die();
	}
	//$db = get_db();
?>
<!DOCTYPE html>
<head>
</head>
<body>
<h1>The Library</h1>
<?php
try 
{

   $statement = $db->prepare('SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   INNER JOIN author a ON b.author_id = a.author_id');
   $statement->execute();

   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      echo '<p><b>' . $row['b.title'] . ' by ' . $row['a.fname'] . ' ' . $row['a.lname'] . 
       ' ' . $row['b.publisher'] . ', ' . $row['b.year'] . '</p>'; 
   }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
</body>
</html>