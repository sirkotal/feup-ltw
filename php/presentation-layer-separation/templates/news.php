<?php

declare(strict_types=1);

function output_article($article, $comments = null) { 
    $id = $article['id'];
    $title = $article['title'];
    $introduction = $article['introduction'];
    $text = $article['fulltext'];
    $tags = $article['tags'];
    $a_comments = $article['comments'];
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

    <?php if ($comments !== null) { 
            output_comments($comments);
    }

    output_article_footer($article); ?>
  </article>
<?php }

function output_article_footer($article) {
  $id = $article['id'];
    $title = $article['title'];
    $introduction = $article['introduction'];
    $text = $article['fulltext'];
    $tags = $article['tags'];
    $a_comments = $article['comments'];
    $published = $article['published'];
    $name = $article['name'];
?> 
  <footer>
    <span class="author"><?= $name ?></span>
    <span class="tags">
    <?php foreach (explode(',', $tags) as $tag) { ?>
      <a href=".">#<?= $tag ?></a>
    <?php } ?>
    </span>
    <span class="date"><?= date('F j', $published) ?></span>
    <a class="comments" href="article.php?id=<?= $id ?>#comments"><?= $a_comments ?></a>
  </footer>
<?php } ?>

<?php function output_articles($articles) { ?>
  <section id="news">
    <?php foreach ($articles as $article) { ?>
      <?php output_article($article) ?>
    <?php } ?>
  </section>  
<?php } ?>
