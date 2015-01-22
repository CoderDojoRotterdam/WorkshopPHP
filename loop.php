<?php 

	/*
	-----------------------------------
	------------- Lusjes --------------
	-----------------------------------
	
	-----------------------------------
	-- For-lusje (staat eigenlijk voor: voor zolang X ... Doe dit.)
	-----------------------------------
	
	-- Code voorbeeld
	
		for($i = 0; $i < 3; $i++){
		
			echo "Hallo CoderDojo! Dit is het " . $i . " de rondje!";
			
		}
		
	-- Resultaat
	
		Hello CoderDojo! Dit is het  0 de rondje!
		Hello CoderDojo! Dit is het  1 de rondje!
		Hello CoderDojo! Dit is het  2 de rondje!
		
	-----------------------------------
	-- For-lusje samen met een array!
	-----------------------------------
	
	-- Coder Voorbeeld
	
		$spelletjes = array("Zelda", "Mario", "Minecraft");
		
		for($i = 0; $i < 3; $i++){
			
			echo "Mijn favoriete spelletje is " . $spelletjes[$i];
			
		}
		
	-- Resultaat
	
		Mijn favoriete spelletje is Zelda
		Mijn favoriete spelletje is Mario
		Mijn favoriete spelletje is Minecraft
		
	-----------------------------------
	-- For each lusje met array
	-----------------------------------
	
	-- Code voorbeeld
	
		$spelletjes = array("Zelda", "Mario", "Minecraft");
		
		foreach($spelletjes as $spel){
		
			echo "<br/>Mijn favoriete spelletje is " . $spel;
			
		}
		
	-- Resultaat
	
		My favorite spelletje is Zelda
		My favorite spelletje is Mario
		My favorite spelletje is Minecraft
		
	-----------------------------------
	-- For each lusje met associatieve array
	-----------------------------------
	
	-- Code voorbeeld
	
		$spelletjes["Nintendo"] = "Mario";
		
		$spelletjes["Playstation"] = "Little Big Planet";
		
		$spelletjes["Pc"] = "Minecraft";
		
		foreach($spelletjes as $platform => $spelletje){
		
			echo $platform . " is voor " . $platform;
			
		}
		
	-- Resultaat
	
		Mario is voor Nintendo
		Little Big Planet is voor Playstation
		Minecraft is voor Pc
	
	*/
?>

<html>
	<head>
		<title>Lusjes</title>
	</head>
	<body>
		<h1>Lusjes!</h1>
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			// Je eerste lusje. Als je er even niet uit komt, kijk dan gerust naar de voorbeelden hierboven!
			echo "Probeer nou eens iets met lusjes te doen.";
		?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
	
	</body>
</html>
