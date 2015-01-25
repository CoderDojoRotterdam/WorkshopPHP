<html>
	<head>
		<title>Lusjes</title>
	</head>
	<body>
		<h1>Lusjes!</h1>
		<h3>------------------------------</h3>
		
		<p>
			<?php
				// OPDRACHT 1
				//
				// Maak een loop die 4 keer de regel "ik ben gek." neer zet!
				
				
				for()
				{
					echo "Ik ben gek!<br/>";	
				}
				
				// OPDRACHT 2
				//
				// Maak een loop die alle auto's weer geeft
				
				$autos = array(
					"Chris" => "Audi",
					"Tiemen" => "Mercedes",
					"Giselle" => "Volkswagen");
				
				foreach()
				{
					echo "Mentor " . $mentor . " rijdt in een " . $auto .".<br/>";
				}
				
			?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
		
		<?php 
		
			/***************************************************
			
			///////////////////////
			// Een for loop is bedoeld om een stuk code meerdere keren uit te voeren
			// 
			// Je hebt 3 dingen nodig:
			// 
			// 1. Begin statement
			// 2. Vergelijking (if-else)
			// 3. Wat gebeurd erna?
			// 
			// In dit voorbeeld:
			// 
			// 1. we beginnen met $i = 0
			// 2. Controleren of $ nog steeds kleiner is dan 3 (we voeren de code 3 keer uit!)
			// 3. We hogen $i op met 1
			///////////////////////
			
			
				for($i = 0; $i < 3; $i++)
				{
					echo "Hallo CoderDojo! Dit is het " . $i . " de rondje!";
				}
				
			///////////////////////
			// Als je niet weet hoevaak je een lus moet uitvoeren gebruik je WHILE.
			// Dit is hetzelfde als een if/else maar blijft zich herhalen zolang de controle waar is
			///////////////////////
			
				$i = 0;
				while($i < 10)
				{
					$i++;
					echo "Deze regel wordt voor de " . $i . "e keer uitgevoerd.<br/>";
				}
				
				// LET OP! Je kan heel snel een eindeloze loop maken!!!
				$i = 18;
				while($i == 18)
				{
					echo "dit wordt eindeloos lang uitgevoerd!";
					echo "Met een break; kun je de loop stoppen.";
					break;
				}

			
			///////////////////////
			// Een lus gebruiken om alles uit een array te halen
			// 
			// 1. Beginnen weer met $i = 0
			// 2. Kijken of $i kleiner is dan de lengte van de array*
			// 3. $i eentje vooruit zetten
			//
			// *) met count($array) kun je kijken hoeveel elementen er in een array zitten
			///////////////////////
			
				$spelletjes = array("Zelda", "Mario", "Minecraft");
				
				for($i = 0; $i < count($spelletjes); $i++)
				{
					
					echo "Mijn favoriete spelletje is " . $spelletjes[$i] . ".<br/>";
					
				}
				
			///////////////////////
			// Als je met arrays werkt is een foreach lus makkelijker
			// FOR EACH betekend VOOR ELK
			// 
			// Lees het als VOOR ELK [array] ALS [item]
			///////////////////////
			
				$spelletjes = array("Zelda", "Mario", "Minecraft");
				
				foreach($spelletjes as $spel)
				{
					echo "<br/>Mijn favoriete spelletje is " . $spel . ".<br/>";
				}
				
			///////////////////////
			// Als je met een associatieve array werkt
			// kun je ook de sleutel als waarde gebruiken
			///////////////////////
			
				$spelletjes["Nintendo"] = "Mario";
				$spelletjes["Playstation"] = "Little Big Planet";
				$spelletjes["Pc"] = "Minecraft";
				
				foreach($spelletjes as $platform => $spelletje)
				{
					echo $spelletje . " is voor de " . $platform . ".<br/>";
				}
			
			***************************************************/
		?>
		
		
	</body>
</html>
