<?php
require_once('./database/connection.php');
require_once('./database/news.php');
require_once('./templates/common.php');
require_once('./templates/news.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);
?>

<?php output_header(); ?>
<section id="news">
  <?php output_articles($articles); ?>
</section>
<?php output_footer(); ?> 