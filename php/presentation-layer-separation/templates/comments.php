<?php

declare(strict_types=1);

function output_form() { ?>
    <form>
        <h2>Add your voice...</h2>
        <label>Username
            <input type="text" name="username" />
        </label>
        <label>E-mail
            <input type="email" name="email" />
        </label>
        <label>Comment
            <textarea name="comment"></textarea>
        </label>
        <button formaction="#" formmethod="post">Reply</button>
    </form>
<?php }

function output_comment($comment) {
    $username = $comment['username'];
    $date = $comment['published'];
    $content = $comment['text'];
?>
    <article class="comment">
        <span class="user"><?= $username ?></span>
        <span class="date"><?= date('F j', $date) ?></span>
        <p><?= $content ?></p>
    </article>
<?php }

function output_comments($comments) { ?>
    <section id="comments">
        <h1><?= count($comments) ?> Comments</h1>
        <?php
        foreach ($comments as $comment) {
            output_comment($comment);
        }
        output_form();
        ?>
    </section>
<?php } ?>