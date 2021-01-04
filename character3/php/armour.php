<?php

    function getArmour($input)
    {
        $a00 = array("", 0, "d4");
        $a01 = array("Primitive leather armour", 2, "d8");
        $a02 = array("Primitive hide armour", 3, "d12");
        $a03 = array("Plasteel mesh", 5, "d16");
        $a04 = array("Power armour (scout)", 8, "d20");
        $a05 = array("Power armour (attack)", 10, "d20");
        $a06 = array("Power armour (assault)", 12, "d20");
        $a07 = array("shield", 1, "d8");
        $a08 = array("", 0, "d4");

        $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08);
        
        return $array1[$input];
        
    }



?>