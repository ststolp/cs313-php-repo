<?php
sesstion_start();
?>
<!DOCTYPE html>
<head>
</head>
<body>
<h1>The Library</h1><br>
<?php
$db = $_SESSION['db'];
/*foreach ($db->query('SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   INNER JOIN author a ON b.author_id = a.author_id') as $row) 
   {
       echo '<p><b>' . $row['b.title'] . ' by ' . $row['a.fname'] . ' ' . $row['a.lname'] . 
       ' ' . $row['b.publisher'] . ', ' . $row['b.year'] . '</p>';
   }*/
   $statement = $db->query('SELECT b.title, a.fname, a.lname, b.year, b.publisher FROM books b 
   INNER JOIN author a ON b.author_id = a.author_id');
   while ($row = $statement->fetch(PDO:FETCH_ASSOC))
   {
      echo '<p><b>' . $row['b.title'] . ' by ' . $row['a.fname'] . ' ' . $row['a.lname'] . 
       ' ' . $row['b.publisher'] . ', ' . $row['b.year'] . '</p>'; 
   }
?>
</body>
</html>