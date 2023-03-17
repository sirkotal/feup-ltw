<?php
$db = new PDO('sqlite:../sqlite-db-creation/news.db');

$article_stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = :id');
$article_stmt->bindParam(':id', $_GET['id']);
$article_stmt->execute();
$article = article_stmt->fetch();

$id = $_GET['id'];

$stmt = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE news_id = ?');
$stmt->execute(array($_GET['id']));
$comments = $stmt->fetchAll();
?>