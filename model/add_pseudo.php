<?php
include_once __DIR__ . '/database.php';
// include_once __DIR__ . './../outils.php';

function cleanStr($str) {
    return htmlspecialchars(strip_tags(trim($str)));
}



// echo 'HAAA <br>';
if (isset($_POST['pseudoMulti1']) && isset($_POST['pseudoMulti2'])) {
    $pseudoMulti1 = cleanStr($_POST['pseudoMulti1']);
    $pseudoMulti2 = cleanStr($_POST['pseudoMulti2']);
    // echo 'HOOO<br>';

    $req = "INSERT INTO score (`name`, `point`)
            VALUES 
                (:pseudoMulti1, :point),
                (:pseudoMulti2, :point)
            ON DUPLICATE KEY UPDATE point = point + VALUES(point);";

    // echo 'HUUUUs<br>';
    $args = [
        "pseudoMulti1" => $pseudoMulti1,
        "pseudoMulti2" => $pseudoMulti2,
        "point" => '2'
    ];

    databaseWrite($req, $args);

    header('Location: ./../multi.php');
}