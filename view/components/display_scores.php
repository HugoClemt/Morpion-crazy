<?php

// include './model/add_pseudo.php';
// Vous pouvez accéder aux données comme ceci
foreach ($infoJoueurs as $joueur) {
    echo "Pseudo : " . $joueur['name'] . ", Points : " . $joueur['point'] . "<br>";
}
?>