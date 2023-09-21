<?php

function pre($args)
{
    echo "<pre>";
    print_r($args);
    echo "</pre>";
}

function cleanStr($str) {
    return htmlspecialchars(strip_tags(trim($str)));
}
?>