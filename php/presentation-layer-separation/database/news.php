<?php

const query_news = 'SELECT news.*, users.*, COUNT(comments.id) AS comments
FROM news JOIN users USING (username) LEFT JOIN comments ON comments.news_id = news.id
GROUP BY news.id, users.username
ORDER BY published DESC';

const query_article = 'SELECT * FROM news JOIN users USING (username) WHERE id = ?';

function getAllNews($db) {
    $stmt = $db->prepare(query_news);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getArticle($db, $id) {
    $stmt = $db->prepare(query_article);
    $stmt->execute(array($id));
    return $stmt->fetch();
}
?>