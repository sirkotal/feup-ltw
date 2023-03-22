<?php
require_once('./database/connection.php');
require_once('./database/news.php');
require_once('./templates/common.php');
require_once('./templates/news.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);
?>

<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <title>Super Legit News</title>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/style.css" rel="stylesheet">
        <link href="style/layout.css" rel="stylesheet">
        <link href="style/responsive.css" rel="stylesheet">
        <link href="style/comments.css" rel="stylesheet">
        <link href="style/register.css" rel="stylesheet">
    </head>
    <body>
    <?php output_header() ?>
    <?php output_articles($articles) ?>
    <?php output_footer() ?>
  </body>
</html>