<?php
include_once __DIR__. '/database.php';
//TODO a revoir
// if (isset($_POST['pseudoMulti1']) && isset($_POST['score'])) {
//     $pseudoMulti1 = cleanStr($_POST['pseudoMulti1']);
//     $score = cleanStr($_POST['score']);


//     $req ="INSERT INTO score SET `pseudoMulti1` = :name, `score` = :point";

//     $args = [
//         "pseudoMulti1" => $pseudoMulti1,
//         "score" => $score
//     ];

//     databaseWrite($req, $args);
//     header('Location: index.php');
// }

// EX
// INSERT INTO score (name, point)
// VALUE ('steve', '16');

$hight_score = databaseWrite(
    "INSERT INTO score (name, point)
    VALUES ('Thomas', '0')
    ON DUPLICATE KEY UPDATE point = '0';"
);

