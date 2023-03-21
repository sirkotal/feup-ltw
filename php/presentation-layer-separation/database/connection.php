<?php
declare(strict_types=1);

function getDatabaseConnection(): PDO {
    $db = new PDO('sqlite:../sqlite-db-creation/news.db');

    return $db;
}