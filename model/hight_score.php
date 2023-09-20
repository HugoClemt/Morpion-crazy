<?php
include_once __DIR__ . '/database.php';

$hight_score = databaseRead(
    "SELECT name, point FROM score ORDER BY point DESC
LIMIT 3;"
);







