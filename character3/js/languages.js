/*
addBonusLanguages() - returns Randomly selected WARRIOR Bonus Languages
*/
function addBonusLanguages() {
	var bonusLanguages = [
		{"language": "Alignment Tongue"},
		{"language": "Dwarf"},
		{"language": "Elf"},
		{"language": "Halfling"},
		{"language": "Harpy"},
		{"language": "Bugbear"},
		{"language": "Goblin"},
		{"language": "Gnoll"},
		{"language": "Hobgolin"},
		{"language": "Kobold"},
		{"language": "Lizardman"},
		{"language": "Minotaur"},
		{"language": "Serpent-man"},
		{"language": "Ogre"},
		{"language": "Orc"},
		{"language": "Troglodyte"},
		{"language": "Giant"}
			];
    return bonusLanguages[Math.floor(Math.random() * 17)]; 
}
		
	  
/*
getBonusLanguages() returns the bonus languages that a character may have due to high intelligence or the Lucky Sign of Bird Song.  A for loop is used to prevent duplicates of languages.
*/
function getBonusLanguages (intelligenceModifier, luckySign, luckModifier) {
	var bonusLanguages = 0;
	if(bonusLanguages  != undefined && typeof bonusLanguages === 'number') {
		bonusLanguages = intelligenceModifier;
	}
	else {
		return "";
	}
	
	if(luckySign != undefined && luckySign.luckySign === "Birdsong") {
		bonusLanguages += luckModifier;
	}
	
	if(bonusLanguages <=0) {
		return "";
	}
	var result = ", " + addBonusLanguages().language, newLanguage = "";
	
	// loop
	for(var i = 1; i < bonusLanguages; i++){
		// 1) get a random lang
		newLanguage = addBonusLanguages().language;
		// 2) check the new lang is not repeative
		if(result.indexOf(newLanguage) != -1){
			i--;
			// if yes continue;
			continue;
		} else{
			// if not, add the new lang into the result
			result += ", " + newLanguage;
		}

	}
	return result;
}