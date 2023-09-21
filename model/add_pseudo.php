<?php
// Inclut le fichier de base de données pour utiliser ses fonctions
include_once __DIR__ . '/database.php';

// Fonction pour nettoyer une chaîne de caractères en supprimant les balises HTML, les espaces et les caractères spéciaux (1er niveaux de sécuritée)
function cleanStr($str)
{
    return htmlspecialchars(strip_tags(trim($str)));
}

// Vérifie si les champs 'pseudoMulti1' et 'pseudoMulti2' sont définis dans la requête POST
if (isset($_POST['pseudoMulti1']) && isset($_POST['pseudoMulti2'])) {
    // Nettoie les valeurs des champs 'pseudoMulti1' et 'pseudoMulti2'
    $pseudoMulti1 = cleanStr($_POST['pseudoMulti1']);
    $pseudoMulti2 = cleanStr($_POST['pseudoMulti2']);

    // Requête SQL pour insérer ou mettre à jour des données dans la table 'score' en cas de doublon de clé (ON DUPLICATE KEY UPDATE)
    $req = "INSERT INTO score (`name`, `point`)
            VALUES 
                (:pseudoMulti1, :point),
                (:pseudoMulti2, :point)
            ON DUPLICATE KEY UPDATE point = point + VALUES(point);";

    // Tableau des paramètres pour lier les valeurs aux paramètres nommés de la requête
    $args = [
        "pseudoMulti1" => $pseudoMulti1,
        "pseudoMulti2" => $pseudoMulti2,
        "point" => '2'
    ];

    // Exécute la requête SQL en utilisant la fonction 'databaseWrite' de la base de données
    databaseWrite($req, $args);

    // Redirige l'utilisateur vers une autre page, par exemple, './../multi.php'
    header('Location: ./../multi.php');
}

// Vérifie si le champ 'pseudoSolo' est défini dans la requête POST
if (isset($_POST['pseudoSolo'])) {
    // Nettoie la valeur du champ 'pseudoSolo'
    $pseudoSolo = cleanStr($_POST['pseudoSolo']);

    // Requête SQL pour insérer ou mettre à jour des données dans la table 'score' en cas de doublon de clé (ON DUPLICATE KEY UPDATE)
    $req = "INSERT INTO score (`name`, `point`)
            VALUES (:pseudoSolo, :point)
            ON DUPLICATE KEY UPDATE point = point + VALUES(point);";

    // Tableau des paramètres pour lier les valeurs aux paramètres nommés de la requête
    $args = [
        "pseudoSolo" => $pseudoSolo,
        "point" => '2'
    ];

    // Exécute la requête SQL en utilisant la fonction 'databaseWrite' de la base de données
    databaseWrite($req, $args);

    // Redirige l'utilisateur vers une autre page, par exemple, './../multi.php'
    header('Location: ./../multi.php');
}
