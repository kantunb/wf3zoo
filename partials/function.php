<?php


$sexe = null;
function gender($sexe) {
    if ($sexe == 1) {
        $sexe = "male";
    }
    elseif ($sexe == 2) {
        $sexe = "femelle";
    }
    else {
        $sexe = "non defini";
    }
    return $sexe;
}

$DOB_convert = '';
function DOB($DOB) {
    $DOB_convert = strftime("%e %B %Y", strtotime($DOB));
    return $DOB_convert;
}

?>