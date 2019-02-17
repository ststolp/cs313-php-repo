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

// 	$query = "INSERT INTO patron (fname, lname) 
// VALUES ('The', 'Librarian')";

// $query2 = "INSERT INTO genre ( genre)
// VALUES ('Action')";

// $query3 = "INSERT INTO author (fname, lname, genre_id)
// VALUES ('Suzanne', 'Collins', (SELECT genre_id FROM genre WHERE genre = 'Action') )";

// $query4 = "INSERT INTO books (title, author_id,
// patron_id, due_date, year, publisher)
// VALUES ('The Hunger Games', (SELECT author_id FROM author WHERE lname = 'Collins'), 
// (SELECT patron_id FROM patron WHERE fname = 'The')
// , LOCALTIMESTAMP(2) + interval '30' day, '2008-10-10 10:10:10', 'Scholastic')";

// $query5 = "INSERT INTO books ( title, author_id,
// patron_id, due_date, year, publisher)
// VALUES ( 'Catching Fire', (SELECT author_id FROM author WHERE lname = 'Collins')
// , (SELECT patron_id FROM patron WHERE fname = 'The')
// , LOCALTIMESTAMP(2) + interval '30' day, '2009-10-10 10:10:10', 'Scholastic')";

// $query6 = "INSERT INTO books (title, author_id,
// patron_id, due_date, year, publisher)
// VALUES ('Mockingjay', (SELECT author_id FROM author WHERE lname = 'Collins')
// , (SELECT patron_id FROM patron WHERE fname = 'The')
// , LOCALTIMESTAMP(2) + interval '30' day, '2010-10-10 10:10:10', 'Scholastic')";

// $query7 = "INSERT INTO author (fname, lname, genre_id)
// VALUES ( 'Classandra', 'Clare', (SELECT genre_id FROM genre WHERE genre = 'Action'))";

// $query8 = "INSERT INTO books (title, author_id,
// patron_id, due_date, year, publisher)
// VALUES ( 'City of Bones', (SELECT author_id FROM author WHERE fname = 'Classandra'),
//  (SELECT patron_id FROM patron WHERE fname = 'The')
// , LOCALTIMESTAMP(2) + interval '30' day, '2007-10-10 10:10:10', 'Margaret K. McElderry')";

// $query9 = "INSERT INTO author (fname, lname, genre_id)
// VALUES ('Clive', 'Cluster', (SELECT genre_id FROM genre WHERE genre = 'Action'))";

// $query10 = "INSERT INTO books (title, author_id
// , patron_id, due_date, year, publisher)
// VALUES ('Sahara', (SELECT author_id FROM author WHERE fname = 'Clive')
// , (SELECT patron_id FROM patron WHERE fname = 'The')
// , LOCALTIMESTAMP(2) + interval '30' day, '1992-10-10 10:10:10', 'Simon & Schuster')";

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