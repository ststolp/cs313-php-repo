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
   $query = "SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   INNER JOIN author a ON b.author_id = a.author_id";
   $statement = $db->prepare($query);
   $statement->execute();

   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
	   $title = $row['b.title'];
	   $fname = $row['a.fname'];
	   $lname = $row['a.lname'];
	   $publisher = $row['b.publisher'];
	   $year = $row['b.year'];
      echo "<p><b>$title</b> by $fname $lname</p><p>publisher $publisher, $year.</p>"; 
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