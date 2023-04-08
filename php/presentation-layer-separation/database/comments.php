<?php

const comments_query = 'SELECT * FROM comments JOIN users USING (username) WHERE news_id = ?';

function getComments($db, $id) {
    $stmt = $db->prepare(comments_query); 
    $stmt->execute(array($id));
    return $stmt->fetchAll();
}