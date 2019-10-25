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

$scriptureId = $db->lastInsertId();
foreach ($topic as $topicId)
	{
		echo "ScriptureId: $scriptureId, topicId: $topicId";
		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO scripture_topic(scriptureid, topicid) VALUES(:scriptureid, :topicid)');
		// Then, bind the values
		$statement->bindValue(':scriptureid', $scriptureId);
		$statement->bindValue(':topicid', $topicId);
		$statement->execute();
    }

    $statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo '<p>';
		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
		echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
		echo '<br />';
		echo 'Topics: ';
		// get the topics now for this scripture
		$stmtTopics = $db->prepare('SELECT name FROM topic t'
			. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
			. ' WHERE st.scriptureId = :scriptureId');
		$stmtTopics->bindValue(':scriptureId', $row['id']);
		$stmtTopics->execute();
		// Go through each topic in the result
		while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
		{
			echo $topicRow['name'] . ' ';
		}
		echo '</p>';
    }