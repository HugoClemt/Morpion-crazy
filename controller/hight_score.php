<?php
include_once './model/hight_score.php';

function hight_score($hight_score)
{
    if (empty($hight_score)) {
        echo '<p>Aucune donnée à afficher.</p>';
    } else {
        foreach ($hight_score as $data) {
            echo '<p>' . $data["name"] . ' - Points: ' . $data["point"] . '</p>';
        };
    }
}