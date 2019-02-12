<?php
    $db = $_SESSION['db'];
    $book = $_POST['Book'];
    $chapter = $_POST['Chapter'];
    $verse = $_POST['Verse'];
    $contents = $_POST['Contents'];
    $topic = $_POST['topic'];
    $statement = $db->prepare('INSERT INTO scripture (book, chapter, verse, contents)
    VALUES (:book, :chapter, :verse, :contents)';);

    $statment->bindValue(':book', $book);
     $statment->bindValue(':chapter', $chapter);
      $statment->bindValue(':verse', $verse);
       $statment->bindValue(':contents', $contents);

$id = $db->lastInsert('scripture_id_sequence');
$statement2 = $db->prepare('INSERT INTO scripture_topic (scripture_id, topic_id) 
VALUES (:scripture_id, :topic_id)';);

$statement2->bindValue('scripture_id', $id);
$statement2->bindValue('scripture_id', $topic);

?>
