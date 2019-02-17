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


$title = $_POST['title'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$year = $_POST['year'];
$publisher = $_POST['publisher'];
$author_id = $_POST['author'];
$genre = $_POST['genre'];
$new_genre = $_POST['new_genre'];

if ($new_genre != "") {
    $query = "INSERT INTO genre (genre) 
    VALUES (:genre)";
    $statement_new_genre = $db->prepare($query);
    $statement_new_genre->bindValue(':genre', $new_genre);
    $statement_new_genre->execute();

      $query = "SELECT genre_id FROM genre WHERE 
      genre = $new_genre";
      $statement = $db->prepare($query);
      $statement->execute();
      $genre_id = $statement->fetch(PDO::FETCH_ASSOC);
    $genre = $genre_id;
}

if ($fname != "") {
    $query = "INSERT INTO author (fname, lname, genre) 
    VALUES (:fname, :lname, :genre)";
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
     $statement->bindValue(':lname', $lname);
      $statement->bindValue(':genre', $genre);
      $statement->execute();
      
      $query = "SELECT author_id FROM author WHERE 
      fname = $fname AND lname = $lame";
      $statement = $db->prepare($query);
      $statement->execute();
      $author_id = $statement->fetch(PDO::FETCH_ASSOC);
}


    $query = "INSERT INTO books (title, author_id, patron_id, due_date, year, publisher) 
    VALUES (:title, :author_id, (SELECT patron_id FROM patron WHERE fname = 'The'), :due_date, :year, :publisher)";
    $statement = $db->prepare($query);

    $statement->bindValue(':title', $title);
	$statement->bindValue(':author_id', $author_id);
   // $statement->bindValue(':patron_id', );
    $statement->bindValue(':due_date', "LOCALTIMESTAMP(2)");
    $statement->bindValue(':year', $year);
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