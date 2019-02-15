<?php
require_once("dbConnect.php");
$db = get_db();
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
   
   while ($row = $statement->fetch(PDO:FETCH_ASSOC))
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