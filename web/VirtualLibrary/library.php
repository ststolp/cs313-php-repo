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

	$query2 = "CREATE TABLE genre (
	genre_id SERIAL PRIMARY KEY,
	genre VARCHAR(255)
)";

$query3 = "CREATE TABLE author (
	author_id SERIAL PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255),
	genre_id int,
	FOREIGN KEY (genre_id) REFERENCES genre(genre_id)
)";

$query4 = "CREATE TABLE patron (
	patron_id SERIAL PRIMARY KEY,
	fname VARCHAR(255),
    lname VARCHAR(255)
)";

$query5 = "CREATE TABLE books (
	book_id SERIAL PRIMARY KEY,
	title VARCHAR(255),
	author_id int,
    patron_id int,
    due_date DATE,
	year DATE,
	publisher VARCHAR(255),
	FOREIGN KEY (author_id) REFERENCES author(author_id),
    FOREIGN KEY (patron_id) REFERENCES patron(patron_id)
)";

   //$query = "SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   //INNER JOIN author a ON b.author_id = a.author_id";
   //$statement = $db->prepare($query);
   $statement2 = $db->prepare($query2);
   $statement2->execute();

    $statement3 = $db->prepare($query3);
   $statement3->execute();

    $statement4 = $db->prepare($query4);
   $statement4->execute();

    $statement5 = $db->prepare($query5);
   $statement5->execute();
   //$statement->execute();

//   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
 //  {
//	   $title = $row['b.title'];
//	   $fname = $row['a.fname'];
//	   $lname = $row['a.lname'];
//	   $publisher = $row['b.publisher'];
//	   $year = $row['b.year'];
//      echo "<p><b>$title</b> by $fname $lname</p><p>publisher $publisher, $year.</p>"; 
//   }
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
</body>
</html>