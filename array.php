<?php 

	/*
	-----------------------------------
	------------- Arrays --------------
	-----------------------------------
	-----------------------------------
	-- Een array met tekst
	-----------------------------------
	
	-- Voorbeeld code
		$spelletjes = array("Mario", "Zelda", "Minecraft");
		
		echo $spelletjes[0];		// Het eerste vakje (Mario)
		echo $spelletjes[1];		// Het tweede vakje (zelda)
		echo $spelletjes[2];		// Het derde vakje (Minecraft)
		
	-- Resultaat:
	
		Mario
		Zelda
		Minecraft
	
	-----------------------------------
	-- Een array met cijfers
	-----------------------------------
	
	-- Voorbeeld code
	
		$jaartallen = array(1987, 2015, 3000);
		
		echo "Het jaar is " . $jaartallen[0];
		echo "Het jaar is " . $jaartallen[1];
		echo "Het jaar is " . $jaartallen[2];
		
	-- Resultaat
	
		Het jaar is 1987
		Het jaar is 2015
		Het jaar is 3000
		
	-------------------------------------------
	-- Array met tekst en cijfers door elkaar
	-------------------------------------------
	
	-- Voorbeeld code
	
		$autos = array("Volkswagen", 2000, "Audi", 3000);
		
		echo "De auto " . $autos[0] . " is van het type " . $autos[1];
		echo "De auto " . $autos[2] . " is van het type " . $autos[3];
		
	-- Het resultaat
	
		De auto Volkswagen is van het type 2000
		The car Audi is van het type 3000
		
	-----------------------------------
	-- En nu alles door elkaar!
	-----------------------------------
	
	-- Code voorbeeld
		$namen 		= array("Jon", "Piet");
		$leeftijden = array(32, 28);
		
		echo "Mijn naam is " . $namen[1] . " en ik ben " . $leeftijden[0] . " jaar oud!"
		
	-- Resultaat
	
		Mijn naam is Piet en ik ben 32 jaar oud!
		
	-----------------------------------
	-- Associative Arrays 
	-- (INFO: Associatief betekend namen en waarden in plaats van cijfers zoals we hierboven gebruikten)
	-----------------------------------
	
	-- Code voorbeeld 1
		
		$spelletjes = array("nintendo" => "mario", "computer" => "minecraft", "xbox" => 360 );
		
		echo $spelletjes["nintendo"];
		echo $spelletjes["computer"];
		echo $spelletjes["xbox"];
	
	-- Resultaat
	
		mario
		minecraft
		xbox
		
	-- Code voorbeeld 2
	
		$studenten["Jon"] 	= 28;
		$studenten["Piet"] 	= "38";
		$studenten["Kim"] 	= "apple";
		
		echo $studenten["Jon"];
		echo $studenten["Piet"];
		echo $studenten["Kim"];
		
	-- Resultaat
	
		28
		38
		apple	
	
	*/
?>

<html>
	<head>
		<title>Arrays!</title>
	</head>
	<body>
		<h1>Arrays!</h1>
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			// Vanaf hier mag je zelf aan de slag met arrays!
			echo "Maak een eerste array! Als je het even niet meer weet, kijk dan naar de voorbeelden hierboven!";
		?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
	
	</body>
</html>
