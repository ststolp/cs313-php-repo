<?php
try
{
require_once("dbConnect.php");

$db = get_db();
//   $query = "SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
//    INNER JOIN author a ON b.author_id = a.author_id";
//    $statement = $db->prepare($query);
//    $statement->execute();

//   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
//   {
// 	   $title = $row['b.title'];
// 	   $fname = $row['a.fname'];
// 	   $lname = $row['a.lname'];
// 	   $publisher = $row['b.publisher'];
// 	   $year = $row['b.year'];
//      echo "<p><b>$title</b> by $fname $lname</p><p>publisher $publisher, $year.</p>"; 
//   }


$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['year'];
$publisher = $_POST['publisher'];
$author_id = $_POST['author'];
$genre_id = $_POST['genre_id'];
$new_genre = $_POST['new_genre'];

if ($new_genre != "") {
    $query = "INSERT INTO genre (genre) 
    VALUES (:genre)";
    $statement_new_genre = $db->prepare($query);
    $statement_new_genre->bindValue(':genre', $new_genre);
    $statement_new_genre->execute();

      $query = "SELECT genre_id FROM genre WHERE 
      genre = '$new_genre'";
      $statement = $db->prepare($query);
      $statement->execute();
      $genre_id_array = $statement->fetch(PDO::FETCH_ASSOC);
    $genre_id = $genre_id_array['genre_id'];
}

if ($fname != "") {
    $query = "INSERT INTO author (fname, lname, genre_id) 
    VALUES (:fname, :lname, :genre_id)";
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
     $statement->bindValue(':lname', $lname);
      $statement->bindValue(':genre_id', $genre_id);
      $statement->execute();
      
      $query = "SELECT author_id FROM author WHERE 
      fname = '$fname' AND lname = '$lame'";
      $statement = $db->prepare($query);
      $statement->execute();
      $author_id_array = $statement->fetch(PDO::FETCH_ASSOC);
      $author_id = $author_id_array['author_id'];
}


    $query = "INSERT INTO books (title, author_id, patron_id, due_date, year, publisher) 
    VALUES (:title, :author_id, (SELECT patron_id FROM patron WHERE fname = 'The'), (SELECT CURRENT_DATE), :year, :publisher)";
    $statement = $db->prepare($query);

    $statement->bindValue(':title', $title);
	$statement->bindValue(':author_id', $author_id);
   // $statement->bindValue(':patron_id', );
    //$statement->bindValue(':due_date', 2000);
    $statement->bindValue(':year', $date);
    $statement->bindValue(':publisher', $publisher);

    $statement->execute();
}

catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

header("Location: library.php");
?>