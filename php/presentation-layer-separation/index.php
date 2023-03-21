<?php
require_once('./database/connection.php');
require_once('./database/news.php');
require_once('./templates/common.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);
?>

<?php output_header(); ?>
    <section id="news">
      <?php foreach ($articles as $article) { 
              $id = $article['id'];
              $title = $article['title'];
              $introduction = $article['introduction'];
              $text = $article['fulltext'];
              $tags = $article['tags'];
              $comments = $article['comments'];
              $published = $article['published'];
              $name = $article['name'];
      ?>        

      <article>
        <header>
          <h1>
            <a href="article.php?id=<?= $id ?>"><?= $title ?></a>
          </h1>
        </header>
        <img src="https://picsum.photos/600/300?<?= $id ?>" alt="" />
        <p><?= $introduction ?></p>
        <?php foreach (explode("\n", $text) as $p) { ?>
          <p><?= $p ?></p>
        <?php } ?>
        <footer>
          <span class="author"><?= $name ?></span>
          <span class="tags">
            <?php foreach (explode(',', $tags) as $tag) { ?>
              <a href=".">#<?= $tag ?></a>
            <?php } ?>
          </span>
          <span class="date"><?= date('F j', $published) ?></span>
          <a class="comments" href="article.php?id=<?= $id ?>#comments"><?= $comments ?></a>
        </footer>
      </article>
      <?php } ?>
    </section>
<?php output_footer(); ?>