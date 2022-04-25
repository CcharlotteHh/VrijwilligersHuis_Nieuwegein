<?php

function invalidPhone($tel_nummer)
{
    global $result;

    $result;
    // als tel_nummer niet gefilterd is, dan is het true dat invalidPhone
    if (!filter_var($tel_nummer, FILTER_SANITIZE_NUMBER_INT)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

?>