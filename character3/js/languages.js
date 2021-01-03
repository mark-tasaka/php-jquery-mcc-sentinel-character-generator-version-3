/*
addBonusLanguages() - returns Randomly selected Sentinel Bonus Languages
*/
	  
function fnAddLanguages (intelligenceModifier, luckySign, luckModifier) 
{
		var bonusLanguages = intelligenceModifier;
		var additionalLanguages ="";

  	if (luckySign.luckySign != undefined && luckySign.luckySign === "The Universal Translator")
  	{
		bonusLanguages += luckModifier;
	}

	if(bonusLanguages < 1)
	{
		additionalLanguages = "";
	}
	else if(bonusLanguages === 1)
	{
	    additionalLanguages = " & " + bonusLanguages + " additional language";
	}
	else
	{
		additionalLanguages = " & " + bonusLanguages + " additional languages";
	}


		return additionalLanguages;
}
 
