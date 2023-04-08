<?php
require_once('database/connection.php');
require_once('database/news.php');
require_once('database/comments.php');

require_once('templates/common.php');
require_once('templates/news.php');

$id = $_GET['id'];

$db = getDatabaseConnection();
$article = getArticle($db, $id);
$comments = getComments($db, $id);

output_header();
output_one_article($article, $comments);
output_footer();
?>