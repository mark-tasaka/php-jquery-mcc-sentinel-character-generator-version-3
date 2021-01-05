<?php

/*Version 3*/
    
    
function getArtifact1($inputA)
{
    $a01 = array("", "", "");
    $a02 = array("Dazer pistol", "4", "Damage: Stun (pg 172)");
    $a03 = array("Fazer pistol", "6", "Variable: Stun, disintegrate (pg 172)");
    $a04 = array("Gauzer pistol", "3", "Damage: 1d6 (pg 172)");
    $a05 = array("Lazer pistol", "4", "Damage: heat 3d6 (pg 172)");
    $a06 = array("Mazer pistol", "5", "Damage: variable heat; special: disregards armour & force fields (pg 172)");
    $a07 = array("Fazer rifle", "6", "Variable: Stun, disintegrate (pg 173");
    $a08 = array("Gauzer rifle", "3", "Damage: 1d6 (pg 173)");
    $a09 = array("Lazer rifle", "4", "Damage: heat 6d6 (pg 173)");
    $a10 = array("Mazer rifle", "5", "Damage: heat 2d6/3d6/6d6/; special: disregards armour & force fields (pg 173)");
    $a11 = array("Neutron rifle", "7", "Damage: instant death (pg 173)");
    $a12 = array("Emp grenade", "6", "Damage: Stun ais; special: shuts down all tech devices for 1d10 rounds (pg 174)");
    $a13 = array("Photon grenade", "4", "Damage: 6d6 (pg 174)");
    $a14 = array("Stun grenade", "5", "Damage: Stun (pg 174)");
    $a15 = array("Quantum grenade", "6", "Damage: disintegrate (DC 12 reflex save to resist) (pg 174)");
    $a16 = array("Force baton", "3", "Damage: 2d8 (pg 174)");
    $a17 = array("Plasma sword", "6", "Damage: 2d12; special: attack +4 (pg 175)");
    $a18 = array("Zapper glove", "3", "Stun DC 18 (every other round) (pg 175)");
    $a19 = array("Bubble helmet", "4", " 24 hour oxygen supply (pg 175)");
    $a20 = array("Enviro belt", "3", "+1 AC; shields against radiation, gaseous attacks, and physical damage (up to 15 hp) (pg 175)");
    $a21 = array("Force field belt", "4", "+3 AC; shields against radiation, gaseous attacks, and physical damage (up to 25 hp) (pg 176)");
    $a22 = array("Plasteel mesh", "2", "+5 AC (pg 176)");
    $a23 = array("Power armour, scout", "8", "+8 AC; +3 strength, force screen absorbs 25 hp of damage, flight 50’ (pg 176)");
    $a24 = array("Power armour, attack", "10", "+10 AC; +6 strength, force screen absorbs 50 hp of damage, flight 75’, rebreather (pg 177)");
    $a25 = array("Power armour, assault", "12", "+12 AC; +8 strength, force screen absorbs 75 hp of damage, flight 150’, life-support (pg 177)");
    $a26 = array("Accelershot", "3", "+1d4 agility/1 hour (pg 177)");
    $a27 = array("Cureshot", "3", "Cure disease/poison (pg 177)");
    $a28 = array("Cybernetic implant", "6", "Variable (pg 178)");
    $a29 = array("Medipac", "6", "Heal 3d8 hp; cure poison/radiation (pg 178)");
    $a30 = array("Medishot", "3", "Heal 2d8 hp  (pg 178)");
    $a31 = array("Neuroshot", "3", "+1d4 intelligence/1 hour (pg 179)");
    $a32 = array("Radshot", "3", "Heal 1d6 radiation damage; radiation protection for 24 hours (pg 179)");        
    $a33 = array("Stimshot", "3", "+1d4 strength/1 hour (pg 179)");        
    $a34 = array("Carbon nano-cord", "1", "see pg 179");
    $a35 = array("Com-badge", "3", "See pg 179");
    $a36 = array("Fusion torch", "4", "3d6 vs. duralloy, plasteel, permaglass; 6d6 versus mundane substances (pg 180)");
    $a37 = array("Energy cloak", "4", "+1 AC; protects against lasers and light-based attacks; 1/2 damage from other em attacks (pg 180)");
    $a38 = array("Grav clamp", "3", "See pg 180");
    $a39 = array("Holo-cloak", "4", "+1 AC; grants invisibility (pg 180)");
    $a40 = array("Multitool", "5", "+5 artifact repairs  (pg 181)");
    $a41 = array("Rejuv-chamber", "5", "Cleanses body inside and out, eliminates all biological waste products, heals 1d4 damage per hour spent inside (pg 181)");
    $a42 = array("Sensor pad", "7", "Grants user equivalent of infravision, x-ray vision, ultravision, echo location, motion detection (pg 181)");
    $a43 = array("Sonic spanner", "2", "Manipulates and rotates metal parts with sonic waves; cuts light materials such as cloth and rope (pg 181)");
    $a44 = array("C-cell", "2", "Chemical power cell (pg 182)");
    $a45 = array("F-cell", "2", "Fusion power cell (pg 182)");
    $a46 = array("F-pack", "4", "Fusion power pack (pg 182)");
    $a47 = array("Q-cell", "3", "Quantum power cell (pg 182)");
    $a48 = array("Solar cell", "3", "Solar power cell (pg 182)");
    $a49 = array("Solar recharger", "4", "See page 182");
    $a50 = array("Q-pack", "3", "Quantum power pack (pg 182)");
    $a51 = array("Bubble car", "8", "See pg 183");
    $a52 = array("Grav ped", "4", "See pg 183");
    $a53 = array("Grav sled", "4", "See pg 183");
    $a54 = array("Cortexin cylinder", "4", "See pg 183");
    $a55 = array("Force field projector", "6", "+5 AC; shields against radiation, gases, and physical attacks (150 hp) (pg 184)");
    $a56 = array("Gene resequencer", "20", "See pg 184");
    $a57 = array("Stasis booth", "6", "See pg 184");


    
    $arr= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50, $a51, $a52, $a53, $a54, $a55, $a56, $a57);
    
    return $arr[$inputA];
    
}

function artifactacbonus ($input)
{

    if($input === "Enviro belt")
    {
        $acbonusartifact = 1;
    }
    else if($input === "Force field belt")
    {
        $acbonusartifact = 3;
    }
    else if($input === "Plasteel mesh")
    {
        $acbonusartifact = 5;
    }
    else if($input === "Power armour, scout")
    {
        $acbonusartifact = 8;
    }
    else if($input === "Power armour, attack")
    {
        $acbonusartifact = 10;
    }
    else if($input === "Power armour, assault")
    {
        $acbonusartifact = 12;
    }
    else if($input === "Energy cloak")
    {
        $acbonusartifact = 1;
    }
    else if($input === "Holo-cloak")
    {
        $acbonusartifact = 1;
    }
    else if($input === "Force field projector")
    {
        $acbonusartifact = 5;
    }
    else
    {
        $acbonusartifact = 0;
    }

    return $acbonusartifact;

}

function artifactstrengthbonus ($input)
{

    if($input === "Power armour, scout")
    {
        $strengthbonusfromartifact = 3;
    }
    else if($input === "Power armour, attack")
    {
        $strengthbonusfromartifact = 6;
    }
    else if($input === "Power armour, assault")
    {
        $strengthbonusfromartifact = 8;
    }
    else
    {
        $strengthbonusfromartifact = 0;
    }

    return $strengthbonusfromartifact;

}


function getArmourArtifactNumber($armour)
{
    $artifactNumber = 0;

    if($armour == 3)
    {
        $artifactNumber = 21;
    }
    
    if($armour == 4)
    {
        $artifactNumber = 22;
    }
    
    if($armour == 5)
    {
        $artifactNumber = 23;
    }
    
    if($armour == 6)
    {
        $artifactNumber = 24;
    }

    return $artifactNumber;
}


?>