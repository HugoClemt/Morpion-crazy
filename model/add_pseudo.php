<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Inclut le fichier de base de données pour utiliser ses fonctions
include_once __DIR__ . '/database.php';

// function incrementPointsForWinner($pseudo, $pointsToAdd)
// {
//     $req = "INSERT INTO score (`name`, `point`)
//             VALUES (:pseudo, :points)
//             ON DUPLICATE KEY UPDATE point = point + :points;";

//     $args = [
//         "pseudo" => $pseudo,
//         "points" => $pointsToAdd,
//     ];

//     databaseWrite($req, $args);
// }

// function getPointsByPseudo($pseudo1, $pseudo2)
// {
//     $req = "SELECT name, point FROM score WHERE name IN (:pseudo1, :pseudo2)";

//     $args = [
//         "pseudo1" => $pseudo1,
//         "pseudo2" => $pseudo2
//     ];

//     $result = databaseRead($req, true, $args);

//     if ($result) {
//         // Inclure le fichier de vue pour afficher les scores
//         include __DIR__ . '/../view/display_scores.php';
//     } else {
//         return []; // Si les joueurs n'existent pas, renvoie un tableau vide
//     }
// }

// if (isset($_GET['pseudoMulti1']) && isset($_GET['pseudoMulti2'])) {
//     $pseudoMulti1 = cleanStr($_GET['pseudoMulti1']);
//     $pseudoMulti2 = cleanStr($_GET['pseudoMulti2']);
    
//     // Le reste de votre code ici
// } else {
//     // Traitez le cas où les clés ne sont pas définies, par exemple, en renvoyant un message d'erreur
//     echo "Les données du formulaire sont manquantes.";
// }


// // Appeler la fonction pour récupérer les points des joueurs
// $infoJoueurs = getPointsByPseudo($pseudoMulti1, $pseudoMulti2);



// Vérifie si les champs 'pseudoMulti1' et 'pseudoMulti2' sont définis dans la requête POST
if (isset($_GET['pseudoMulti1']) && isset($_GET['pseudoMulti2'])) {
    // Nettoie les valeurs des champs 'pseudoMulti1' et 'pseudoMulti2'
    $pseudoMulti1 = cleanStr($_GET['pseudoMulti1']);
    $pseudoMulti2 = cleanStr($_GET['pseudoMulti2']);

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
        "point" => '0'
    ];

    // Exécute la requête SQL en utilisant la fonction 'databaseWrite' de la base de données
    databaseWrite($req, $args);


    // Redirige l'utilisateur vers une autre page, par exemple, './../multi.php'
    header('Location: http://morpion/?page=template-grille');
} else {
    // Traitez le cas où les clés ne sont pas définies, par exemple, en renvoyant un message d'erreur
    echo "Les données du formulaire sont manquantes.";
}








// Vérifie si le champ 'pseudoSolo' est défini dans la requête POST
// if (isset($_GET['pseudoSolo'])) {
//     // Nettoie la valeur du champ 'pseudoSolo'
//     $pseudoSolo = cleanStr($_GET['pseudoSolo']);

//     // Requête SQL pour insérer ou mettre à jour des données dans la table 'score' en cas de doublon de clé (ON DUPLICATE KEY UPDATE)
//     $req = "INSERT INTO score (`name`, `point`)
//             VALUES (:pseudoSolo, :point)
//             ON DUPLICATE KEY UPDATE point = point + VALUES(point);";

//     // Tableau des paramètres pour lier les valeurs aux paramètres nommés de la requête
//     $args = [
//         "pseudoSolo" => $pseudoSolo,
//         "point" => '2'
//     ];

//     // Exécute la requête SQL en utilisant la fonction 'databaseWrite' de la base de données
//     databaseWrite($req, $args);

//     // Redirige l'utilisateur vers une autre page, par exemple, './../multi.php'
//     header('Location: ./../view/template/template-grille.php');
// }
