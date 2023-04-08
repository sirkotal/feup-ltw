<?php

function getDatabaseConnection() {
    $db = new PDO('sqlite:../sqlite-db-creation/news.db');

    return $db;
}?>