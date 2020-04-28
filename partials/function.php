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
    $DOB_convert = date("j F Y", strtotime($DOB));
    return $DOB_convert;
}

?>