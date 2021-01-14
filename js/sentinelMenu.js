

//Version 3: Hide unhide character's name field
                
function hideCharacterName()               
 {    

    if ($('#checkBoxRandomNameV3').is(":checked"))
    {
      $('#characterNameV3').hide();
    }
    else
    {
      $('#characterNameV3').show();
    }


}

function hideGear()        
{

    if ($('#checkBoxRandomGearV3').is(":checked"))
    {
      $('#gearSelectionV3').hide();
    }
    else
    {
      $('#gearSelectionV3').show();
    }

}
  


function hideWeapons()        
{

    if ($('#checkBoxRandomWeaponsV3').is(":checked"))
    {
      $('#weaponsSelectionV3').hide();
    }
    else
    {
      $('#weaponsSelectionV3').show();
    }

}