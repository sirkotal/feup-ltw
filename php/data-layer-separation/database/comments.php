<?php
declare(strict_types=1);

const comments_query = 'SELECT * FROM comments WHERE news_id = ?';

function getComments(PDO $db, int $id) {
    $stmt = $db->prepare(comments_query);
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}