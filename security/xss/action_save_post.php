<?php

  $db = new PDO('sqlite:database.db');

  $username = $_POST['username'];
  $text = $_POST['text'];
  
  $username = preg_replace("/[^a-zA-Z\s]/", '', $username);

  $stmt = $db->prepare('INSERT INTO posts VALUES(NULL, ?, ?)');
  $stmt->execute(array($username, $text));

  header('Location: /');
?>