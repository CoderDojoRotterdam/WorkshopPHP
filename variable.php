<html>

	<head>
		<title>Variabelen</title>
	</head>
	<body>
		<h1>Variabelen</h1>
		<h3>------------------------------</h3>
		<?php
			
			/***************************************************
			
			///////////////////////
			// Een simpele variabele met tekst (string)
			///////////////////////
			$fruit = "appel";
			echo $appel;
			
			///////////////////////
			// Variabelen aan elkaar plakken met een punt
			///////////////////////
			$naam 			= "Jon";
			$achternaam 	= "van Put";
			$hele_naam = $name . " " . $achternaam;
			echo "Mijn naam  " . $volledige_naam;
			
			///////////////////////
			// Een simpele variabele met getallen
			///////////////////////
			$nummer = 35;
			echo $number;

			///////////////////////
			// Nummers aan elkaar plakken
			///////////////////////
			
			$nummerA = 1;
			$nummerB = 5;
			$nummerResultaat = $nummerA . $nummerB;
			echo "Het nummer is " . $nummberResultaat;
			
			///////////////////////
			// Rekenen met getallen
			///////////////////////
			
			// Aftrekken
			
			$jaar = 2015;
			$geboortejaar = 1987;
			$leeftijd = $jaar - $geboortejaar;
			echo "Ik ben " . $leeftijd . " jaar oud!";
		
		
			// optellen
			
			$appels = 3;
			$peren = 2;
			$fruit = $appels + $peren;
			echo "Ik heb " . $fruit . " stukken fruit";

		
			// Vermenigvuldigen (keer)
			
			$huizen = 9;
			$gezin = 4;
			$inwoners = $huizen * $gezin;
			echo "Er wonen " . $inwoners . " mensen in dit dorp";
			
			
			// Delen
			
			$mensen = 6;
			$koekjes = 24;
			$ieder = $koekjes / $mensen;
			echo "iedereen krijgt " . $ieder . " koekjes";
			
			***************************************************/
		?>
		
		<p>
			<?php 
				// OPDRACHT
				//
				// Maak een variabele voor de volgende dingen:
				// - Voornaam
				// - Achternaam
				// - Leeftijd
				// 
				// Voeg ze nu allemaal samen in 1 zin.
				// echo "Hoi, mijn naam is [voornaam] [achternaam] en ik ben [leeftijd] jaar oud.";
				
				
			?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
		
	
	</body>
</html>
