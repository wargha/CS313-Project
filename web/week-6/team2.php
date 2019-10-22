<?php
require("databaseLoader.php");
$db = get_db();


$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$topic = $_POST['topic'];



$query = 'INSERT INTO scripture (book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
$statement = $db->prepare($query);
$statement->bindValue(':book', $book);
$statement->bindValue(':chapter', $chapter);
$statement->bindValue(':verse', $verse);
$statement->bindValue(':content', $content);
$statement->execute();

$scriptureId = $db->lastInsertId("scriptureid");
foreach ($topic as $topicId)
	{
		echo "ScriptureId: $scriptureId, topicId: $topicId";
		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureid, topicid) VALUES(:scriptureId, :topicId)');
		// Then, bind the values
		$statement->bindValue(':scriptureid', $scriptureId);
		$statement->bindValue(':topicid', $topicId);
		$statement->execute();
	}