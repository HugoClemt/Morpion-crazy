<?php
include_once __DIR__ . '/database.php';

//Cette requête SQL extrait les noms et les points associés des trois meilleurs scores
// Utilise la fonction "databaseRead" pour exécuter une requête SQL de lecture
$hight_score = databaseRead(
    "SELECT name, point FROM score ORDER BY point DESC
LIMIT 3;"
);







