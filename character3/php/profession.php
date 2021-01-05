<?php

function getProfession()
{
    $professionArray = array('Hunter', 'Gatherer');

    $d2 = rand(0, 1);

    $profession = $professionArray[$d2];

    return $profession;
}

?>