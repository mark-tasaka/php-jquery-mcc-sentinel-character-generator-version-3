<?php


    function getWeapon($input)
    {
        $a00 = array("Great club", "1d10");
        $a01 = array("Atlati (as javelin)", "1d6");
        $a02 = array("Blowgun", "1d3/1d5");
        $a03 = array("Cudgel", "1d4");
        $a04 = array("Tomahawk (30/60/90)", "1d6");
        $a05 = array("Flint Dagger", "1d4/1d10");
        $a06 = array("Hunting knife", "1d4");
        $a07 = array("Khopesh", "1d6");
        $a08 = array("Blowgun (20/40/60)", "1d3/1d5");
        $a09 = array("Hatchet", "1d6");
        $a10 = array("Harpoon", "1d10");
        $a11 = array("Boomerang (30/60/90)", "1d4");
        $a12 = array("Bow (50/100/150)", "1d6");
        $a13 = array("Matchette", "1d8");
        $a14 = array("Spiked club", "1d5");
        $a15 = array("Sharpened stick", "1d5");
        $a16 = array("Throwing club (20/40/60)", "1d4");
        $a17 = array("Sickle", "1d5");
        $a18 = array("Sling (40/80/120)", "1d4");
        $a19 = array("Sling Staff (50/100/150)", "1d4");
        $a20 = array("Spear", "1d6");
        $a21 = array("Katar (push dagger)", "1d4");
        $a22 = array("Fighting stick", "1d4");


        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22);
        
        return $array1[$input];
        
    }



function getRandomWeapons()
{
    $weaponsArray = array();
    $weaponsHas = array();

    for($i = 0; $i <= 22; ++$i)
    {
        array_push($weaponsArray, $i);
    }

    //shuffle $weaponsArray
    shuffle($weaponsArray); 

    $numberOfWeapons = rand (2, 8);

    for($j = 0; $j < $numberOfWeapons; ++$j)
    {
        $weapon = $weaponsArray[$j];
        array_push($weaponsHas, $weapon);
    }

    return $weaponsHas;
}




?>