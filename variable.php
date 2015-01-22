<?php
	
	/*
	
	-----------------------------------
	----------- Variablen -------------
	-----------------------------------
	
	-----------------------------------
	-- Basis - variabelen met tekst
	-----------------------------------
	
	-- Code voorbeeld
	
		$fruit = "appel";
	
		echo $fruit;
	
	-- Resultaat
	
		Appel
	
	-----------------------------------
	-- Tekst aan elkaar plakken
	-----------------------------------
	
	-- Code voorbeeld
	
		$naam 			= "Jon";
		$achternaam 	= "van Put"
		$volledige_naam = $name . " " . $achternaam;
		
		echo "Mijn naam  " . $volledige_naam;
		
	-- Resultaat
	
		Mijn naam is Jon van Put
	
	-----------------------------------
	-- Variabelen met nummers
	-----------------------------------
	
	-- Code voorbeeld
	 
		$nummer = 35;
		
		echo $number;
		
		echo "Het nummer is " . $number;
		
	-- Resultaat
	
		35
		
		Het nummer is 35
	
	-----------------------------------
	-- Nummers aan elkaar plakken (hetzelfde met tekst)
	-----------------------------------
	
	-- Code voorbeeld
		
		$nummerA = 1;
		
		$nummerB = 5;
		
		$nummerResultaat = $nummerA . $nummerB;
		
		echo "Het nummer is " . $nummberResultaat;
		
	-- Resultaat
	
		Het nummer is 15
	
	-----------------------------------
	-- Rekenen met variabelen
	-----------------------------------
	
	-- Code voorbeeld
	
		$jaar = 2015;
		
		$geboortejaar = 1987;
		
		$leeftijd = $jaar - $geboortejaar;
		
		echo "Ik ben " . $leeftijd . " jaar oud!";
		
	-- Resultaat
	
		Ik ben 28 jaar oud!
		
	-----------------------------------
	-- Tekst en nummers combineren
	-----------------------------------
	
	-- Code voorbeeld
		
		$volledige_naam = "Jon van Put";
		
		$leeftijd = 28;
		
		$profiel = "Mijn naam is " . $volledige_naam . " en ik ben " . $leeftijd . " jaar oud!";
		
		echo $profiel;
		
	-- Resultaat
	
		Mijn naam is jon van Put en ik ben 28 jaar oud!
	
	*/
?>

<html>

	<head>
		<title>Variabelen</title>
	</head>
	<body>
	
		<h1>Variabelen</h1>
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			// Speel hier zelf een beetje met variabelen, als je het even niet meer snapt kun je altijd hierboven even speieken ;)
			echo "Nu mag je zelf een beetje spelen met variabelen";
		?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
		
	
	</body>
</html>
