<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Mutant Crawl Classics Sentinel Character Generator Version 3</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2021">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 
	<link rel="stylesheet" href="css/basic_style.css"/> 
	<script type="text/javascript" src="js/sentinelMenu.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Mutant Crawl Classics Sentinel Character Generator Version 3" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Mutant Crawl Classics Sentinel Character Generator Version 3 is designed primarily with PHP and jQuery/JavaScript. The Launch Page has a series of drop-down menus, input fields and checkboxes, where alignments, weapons, armour, gear, character level, etc., are added to the character sheet. When the submit button is entered, the information (variables) is collected through POST methods and added to the character sheet. Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>    

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of designing a program with high cohesion and low coupling. In this way, this program replicates Object-Oriented design. JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.</p>
 
        <p>A Live version of the Character Generator are found at:</p>

        <p><a href="https://www.oldschooladventures.org/mcc/classes/sentinel/"  class="text_link" target="_blank"><span class="bold">Artifacts of the Ancient Ones: A Mutanmy Crawl Classics Fan Site</span></a></p>


        <br/>
        <br/>
            
       
        <form action="" id ="SentinelFormV3"  target="_blank" method="post">
    
    <div class="content9">


                
  
          <div id="characterNameV3">
            <span class="formIputDescription">Character's Name:</span>
            <span id="characterNameV3"> <input type="text" name="theCharacterName" value="" class="nameBox"></span>
           

           
           <br/>
           <br/>
            </div>
           

                  
           <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxRandomNameV3" value="1" name="theCheckBoxRandomName" onClick="hideCharacterName()">Use Randomly Generated Name</span>
           </div>

           <br/>

           <div id="PlayerNameV3">
            <span class="formIputDescription">Player's Name:</span>
            <span id="PlayerNameV3"> <input type="text" name="thePlayerName" value="" class="nameBox"></span>
           
            </div>

           <br/>

                  
                           
        <span class="formIputDescription">Gender:</span>	
			  <select id="genderV3" name="theGender" class="alignmentBox">	
				<option value="Male" selected>Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				<option value="Blank">Blank</option>
        </select>
        
        <br/>
        <br/>
            
                            
            <span class="formIputDescription">Character Level:</span>	
			  <select id="levelV3" name="theLevel" class="alignmentBox">	
				<option value="1" selected>Level 1</option>
				<option value="2">Level 2</option>
				<option value="3">Level 3</option>
				<option value="4">Level 4</option>
				<option value="5">Level 5</option>
				<option value="6">Level 6</option>
				<option value="7">Level 7</option>
				<option value="8">Level 8</option>
				<option value="9">Level 9</option>
				<option value="10">Level 10</option>
			  </select>
            
            <br/>
            <br/>
                
                    

                
            
            <span class="formIputDescription">Archiac Alignment:</span>	
			  <select id="alignmentV3" name="theAlignment" class="alignmentBox">			
                <option value="The Clan of Cog" selected>The Clan of Cog</option> 
				<option value="The Curators">The Curators</option>
				<option value="The Atomic Equinox">The Atomic Equinox</option>
				<option value="The Holy Medicinal Order">The Holy Medicinal Order</option>
				<option value="The Gene Police">The Gene Police</option>
				<option value="The Technorabble">The Technorabble</option>
			  </select>
            
            <br/>
            <br/>
                            
                <span class="formIputDescription">Ability Scores:</span>	
			  <select id="abilityScoresV3" name="theAbilityScore" class="alignmentBox">	
				<option value="1" selected>3d6 (Old School)</option>
				<option value="2">4d6, drop the lowest</option>
				<option value="3">5d6, use 3 highest</option>
				<option value="4">1d5+1d6+1d7</option>
				<option value="5">2d6+6</option>
			  </select>
            
                
            <br/>
            <br/>
                  
				  <div class="formIputDescription">
					 <span class="footnote3"><input type="checkbox" id="optimizeAbilityScoreV3" value="1" name="theOptimizeAbilityScore">Optimize Ability Scores: Str, Sta, Agi, Luck, Per, Int.</span>
					 </div>
					 

		  
				  <br/>
                            
            <span class="formIputDescription">Armour:</span>	
			  <select id="armourV3" name="theArmour" class="alignmentBox">			
                <option value="0">No Armour</option>
				<option value="1"  selected>Primitive leather armour</option>
				<option value="2">Primitive hide armour</option>
				<option value="3">Plasteel mesh</option>
				<option value="4">Power armour, scout</option>
				<option value="5">Power armour, attack</option>
				<option value="6">Power armour, assault</option>
			  </select>

        <br/>
		<br/>
		
                        
		<span class="formIputDescription8">Artifact #1:</span>	
			  <select id="artifact1V3" name="theArtifact1V3" class="arifactBox">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
                
                <br/>
                            
            <span class="formIputDescription8">Artifact #2:</span>	
			  <select id="artifact2V3" name="theArtifact2V3" class="arifactBox">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
            
                                
                <br/>
                            
            <span class="formIputDescription8">Artifact #3:</span>	
			  <select id="artifact3V3" name="theArtifact3V3" class="arifactBox">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>

		
				
                                <br/>
                                <br/>
        
                  
        <div class="formIputDescription">
           <span class="footnote3"><input type="checkbox" id="checkBoxShieldV3" value="1" name="theCheckBoxShield">Add Leather Shield</span>
           </div>

           <br/>
        <br/>
   

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomWeaponsV3" value="1" name="thecheckBoxRandomWeaponsV3" onClick="hideWeapons()">&nbsp&nbspRandomly Generate Mundane Weapons</span>
                  </div>
       
                  <br/>


                <div id="weaponsSelectionV3">

                <span class="weaponBoxHeader">Mundane Weapons:</span>
                <br/><br/>
                
            <div id="weaponsGroupingsV3">
                <input type="checkbox" name="theWeapons[]" value="0"> Great club<br/>
                <input type="checkbox" name="theWeapons[]" value="1"> Atlati (javelin)<br/>  
                <input type="checkbox" name="theWeapons[]" value="2"> Blowgun<br/>  
                <input type="checkbox" name="theWeapons[]" value="3"> Cudgel<br/>  
                <input type="checkbox" name="theWeapons[]" value="4"> Tomahawk<br/> 
                <input type="checkbox" name="theWeapons[]" value="5"> Flint dagger<br/>   
                <input type="checkbox" name="theWeapons[]" value="6"> Hunting knife<br/> 
                <input type="checkbox" name="theWeapons[]" value="7"> Khopesh<br/>  
                <input type="checkbox" name="theWeapons[]" value="8"> Blowgun<br/> 
                <input type="checkbox" name="theWeapons[]" value="9"> Hatchet<br/> 
                <input type="checkbox" name="theWeapons[]" value="10"> Harpoon<br/> 
                <input type="checkbox" name="theWeapons[]" value="11"> Boomerang*<br/> 
                <input type="checkbox" name="theWeapons[]" value="12"> Bow<br/> 
                <input type="checkbox" name="theWeapons[]" value="13"> Matchette<br/> 
                <input type="checkbox" name="theWeapons[]" value="14"> Spiked club<br/> 
                <input type="checkbox" name="theWeapons[]" value="15"> Sharpened stick<br/> 
                <input type="checkbox" name="theWeapons[]" value="16"> Throwing club<br/> 
                <input type="checkbox" name="theWeapons[]" value="17"> Sickle<br/> 
                <input type="checkbox" name="theWeapons[]" value="18"> Sling<br/> 
                <input type="checkbox" name="theWeapons[]" value="19"> Sling Staff<br/> 
                <input type="checkbox" name="theWeapons[]" value="20"> Spear<br/> 
                <input type="checkbox" name="theWeapons[]" value="21"> Katar (push dagger)<br/> 
                <input type="checkbox" name="theWeapons[]" value="22"> Fighting stick<br/> 
                </div>

				<div class="weaponsGroupingsDescriptionV3">
				<p>*Bommerang: Will return to the thrower on a miss (40/80/160).</p>

				</div>

                <br/>
                <br/>

                </div>
   

                <div class="formIputDescription2">
                  <span class="weaponBoxHeader"><input type="checkbox" id="checkBoxRandomGearV3" value="1" name="theCheckBoxRandomGear" onClick="hideGear()">&nbsp&nbspRandomly Generated Mundane Gear</span>
                  </div>
       


                <div id="gearSelectionV3">
                  <br/>
                
                <span class="weaponBoxHeader">Equipment/Ammo:</span>
                <br/><br/>
                
            <div id="gearGroupingsV3">
			<span class="weaponSubHead">Equipment:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="0"> Leather rucksack<br/>
                <input type="checkbox" name="theGear[]" value="1"> Conical hat<br/>  
                <input type="checkbox" name="theGear[]" value="2"> Copper cable, 10’<br/>  
                <input type="checkbox" name="theGear[]" value="3"> Fibre optic cable, 20’<br/>  
                <input type="checkbox" name="theGear[]" value="4"> Paints & dyes<br/>  
                <input type="checkbox" name="theGear[]" value="5"> Wicker basket<br/>   
                <input type="checkbox" name="theGear[]" value="6"> Pry bar<br/>  
                <input type="checkbox" name="theGear[]" value="7"> Flint fire starter<br/>  
                <input type="checkbox" name="theGear[]" value="8"> Grappling hook<br/> 
                <input type="checkbox" name="theGear[]" value="9"> Hammer, small<br/> 
                <input type="checkbox" name="theGear[]" value="10"> Smoking pipe<br/> 
                <input type="checkbox" name="theGear[]" value="11"> Wood spikes, 12<br/> 
                <input type="checkbox" name="theGear[]" value="12"> Oil Lamp<br/> 
                <input type="checkbox" name="theGear[]" value="13"> Lamp oil (clay bottle)<br/> 
                <input type="checkbox" name="theGear[]" value="14"> Reflective disc<br/> 
                <input type="checkbox" name="theGear[]" value="15"> Walking stick<br/>
                <input type="checkbox" name="theGear[]" value="16"> Hemp rope, 50’<br/> 
                <input type="checkbox" name="theGear[]" value="17"> Jerken roxen meat<br/> 
                <input type="checkbox" name="theGear[]" value="18"> Long stick, 10’<br/> 
                <input type="checkbox" name="theGear[]" value="19"> Sack, large<br/> 
                <input type="checkbox" name="theGear[]" value="20"> Sack, small<br/> 
                <input type="checkbox" name="theGear[]" value="21"> Hemp blanket<br/> 
                <input type="checkbox" name="theGear[]" value="22"> Torches, 12<br/> 
                <input type="checkbox" name="theGear[]" value="23"> Waterskin<br/> 
                <br/>
                <span class="weaponSubHead">Ammo:</span><br/><br/>
                <input type="checkbox" name="theGear[]" value="24"> Arrows, 12<br/>  
                <input type="checkbox" name="theGear[]" value="25"> Sling stones, 12<br/>  

                </div>


                </div>
                <br/>


            
		<div class="content8">
            

            
			  
    <br/>
            <br/>
    
            
			  
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_charactersWarriorV3"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator3"/>
		
				</span>
                
		
            </div>
            </div>
            
				
            </div>
            
            </form>
            
                	

            <br/>
            <br/>
            <br/>
            <br/>
            

            
            
                
                
                	
                <script>
        

        $("#generate_charactersWarriorV3").click(function(){
         
    
         $("#SentinelFormV3").attr('action', "character3/mccSentinel.php");

     });


                    
                </script>
        
                
                
      
                
 
                
    </section>


</body>
</html>