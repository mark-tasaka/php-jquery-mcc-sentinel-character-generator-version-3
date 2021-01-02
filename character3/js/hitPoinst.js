/*HitPoints randomly generate hit points*/

function getHitPoints (level, staminaMod)
{
    let hitPoints = Math.floor((Math.random() * 4) + 1) + staminaMod;
    
    let hitDice = level;
    
    let counter = 0;
            
    for(;counter < hitDice; counter++)
            {

                let hpEachLevel = 0;
                hpEachLevel = Math.floor((Math.random() * 12) + 1) + staminaMod;

                if(hpEachLevel < 5)
                    {
                        hpEachLevel = 5;
                    }

                hitPoints += hpEachLevel;
            }

    
    return hitPoints;
    
}
