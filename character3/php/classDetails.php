<?php

/*Sentinel*/

function savingThrowReflex($level)
{
    $reflex = 1;

    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level == 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    
    $fort = $level;

    return $fort;

}


function savingThrowWill($level)
{
    $will = 1;

    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level >= 5 && $level <= 6)
    {
        $will = 3;
    }

    
    if($level >= 7 && $level <= 9)
    {
        $will = 4;
    }

    if($level == 10)
    {
        $will = 5;
    }

    return $will;

}



function actionDice($level)
{
    $actionDice = "";

    if($level <= 4)
    {
        $actionDice = "1d20";
    }

    if($level == 5)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 7)
    {
        $actionDice = "1d20 (x2)";
    }


    return $actionDice;
}



function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d12/III";
    }

    if($level == 2)
    {
        $critical = "1d14/III";
    }

    if($level == 3)
    {
        $critical = "1d16/IV";
    }

    if($level == 4)
    {
        $critical = "1d20/IV";
    }

    if($level == 5)
    {
        $critical = "1d24/V";
    }

    if($level >= 6 && $level <= 7)
    {
        $critical = "1d30/V";
    }

    if($level >= 8)
    {
        $critical = "2d20/V";
    }

    return $critical;

}


function title($level)
{

        if($level == 1)
        {
            $title = "Recruit";
        }
        else if($level == 2)
        {
            $title = "Trooper";
        }
        else if($level == 3)
        {
            $title = "Specialist";
        }
        else if($level == 4)
        {
            $title = "Commander";
        }
        else if($level == 5)
        {
            $title = "Sentinel";
        }
        else
        {
            $title = "Sentinel Supreme";
        }

return $title;

}

function getArtifactCheckBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case 1:
            $bonus = 2;
          break;
          
        case 2:
            $bonus = 3;
          break;
          
        case 3:
            $bonus = 4;
          break;

        case 4:
            $bonus = 5;
          break;
          
        case 5:
            $bonus = 5;
          break;
          
        case 6:
            $bonus = 6;
          break;

          case 7:
            $bonus = 7;
          break;
          
        case 8:
            $bonus = 8;
          break;
          
        case 9:
            $bonus = 9;
          break;
          
        case 10:
            $bonus = 10;
          break;
          
        default:
            $bonus = 999;
      } 

    return $bonus;
}


function getArtifactCheckBonusDie($level)
{
    $bonus = '';

    switch ($level) 
    {
        case 1:
            $bonus = '+1d2';
          break;
          
        case 2:
            $bonus = '+1d3';
          break;
          
        case 3:
            $bonus = '+1d4';
          break;

        case 4:
            $bonus = '+1d5';
          break;
          
        case 5:
            $bonus = '+1d6';
          break;
          
        case 6:
            $bonus = '+1d7';
          break;

          case 7:
            $bonus = '+1d8';
          break;
          
        case 8:
            $bonus = '+1d10';
          break;
          
        case 9:
            $bonus = '+1d12';
          break;
          
        case 10:
            $bonus = '+1d14';
          break;
          
        default:
            $bonus = '000';
      } 

    return $bonus;
}


?>