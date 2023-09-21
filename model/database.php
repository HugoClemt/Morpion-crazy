<?php
//include_once __DIR__ . './../outils.php';

// Fonction pour établir la connexion à la base de données
function databaseConnect()
{
    $servername = 'localhost';  // Nom du serveur de la base de données
    $dbname = 'morpion-crazy';  // Nom de la base de données
    $username = 'root';  // Nom d'utilisateur de la base de données
    $password = '';  // Mot de passe de la base de données

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  // Création de l'objet PDO pour la connexion
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Configuration des options de gestion des erreurs
        return $pdo;  // Retourne l'objet PDO pour la connexion réussie
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();  // Affiche l'erreur de connexion en cas d'échec
        exit();  // Quitte le script en cas d'échec de la connexion
    }
}

// Fonction pour exécuter une requête de lecture dans la base de données
function databaseRead($req, $isUnique = false, $args = [])
{
    $pdo = databaseConnect();  // Appel de la fonction pour établir la connexion à la base de données

    $stmt = $pdo->prepare($req);  // Préparation de la requête SQL

    $stmt->execute($args);  // Exécution de la requête avec les éventuels paramètres

    if ($isUnique) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);  // Récupération d'une seule ligne de résultat
    } else {
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);  // Récupération de toutes les lignes de résultat
    }

    return $row;  // Retourne le résultat obtenu
}


// Fonction pour effectuer des opérations d'écriture dans la base de données
function databaseWrite($req, $args = [])
{
    $pdo = databaseConnect();  // Appel de la fonction pour établir la connexion à la base de données

    $stmt = $pdo->prepare($req);  // Préparation de la requête SQL

    try {
        $stmt->execute($args);  // Exécution de la requête avec les éventuels paramètres

        $rowCount = $stmt->rowCount();  // Récupération du nombre de lignes affectées par la requête

        return $rowCount;  // Retourne le nombre de lignes affectées
    } catch (PDOException $e) {
        echo "Erreur d'exécution de la requête : " . $e->getMessage();  // Affiche l'erreur d'exécution de la requête
        exit();  // Quitte le script en cas d'erreur d'exécution de la requête
    }
}

