<?php
  $db = new PDO('sqlite:../sqlite-db-creation/news.db');
  $stmt = $db->prepare('SELECT * FROM news');
  $stmt->execute();
  $articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Listing data from SQLite</title>
  </head>
  <body>
    <h1>Articles</h1>
    <?php foreach( $articles as $article) {
      echo '<h1>' . $article['title'] . '</h1>';
      echo '<p>' . $article['introduction'] . '</p>';
    }?>
  </body>
</html>