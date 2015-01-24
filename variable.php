<html>

	<head>
		<title>Variabelen</title>
	</head>
	<body>
		<h1>Variabelen</h1>
		<h3>------------------------------</h3>
		<?php
			
			/**
			 * Een simpele variabele met tekst (string)
			 **/
			$fruit = "appel";
			echo $appel;
		?>
		<br/>
		<?php
			
			/**
			 * Variabelen aan elkaar plakken met een punt
			 **/
			$naam 			= "Jon";
			$achternaam 	= "van Put";
			$volledige_naam = $name . " " . $achternaam;
			echo "Mijn naam  " . $volledige_naam;
			
		?>
		<br/>
		<?php
			
			/**
			 * Een simpele variabele met getallen
			 **/
			$nummer = 35;
			echo $number;
		
		?>
		<br/>
		<?php
			
			/**
			 * Nummers aan elkaar plakken
			 **/
			$nummerA = 1;
			$nummerB = 5;
			$nummerResultaat = $nummerA . $nummerB;
			echo "Het nummer is " . $nummberResultaat;
		
		?>
		<br/>
		<?php
			
			/**
			 * Rekenen met getallen
			 **/
			
			// Aftrekken
			$jaar = 2015;
			$geboortejaar = 1987;
			$leeftijd = $jaar - $geboortejaar;
			echo "Ik ben " . $leeftijd . " jaar oud!";
		
		?>
		<br/>
		<?php
		
			// optellen
			$appels = 3;
			$peren = 2;
			$fruit = $appels + $peren;
			echo "Ik heb " . $fruit . " stukken fruit";
		
		?>
		<br/>
		<?php
		
			// Vermenigvuldigen (keer)
			$huizen = 9;
			$gezin = 4;
			$inwoners = $huizen * $gezin;
			echo "Er wonen " . $inwoners . " mensen in dit dorp";
		
		?>
		<br/>
		<?php
			
			// Delen
			$mensen = 6;
			$koekjes = 24;
			$ieder = $koekjes / $mensen;
			echo "iedereen krijgt " . $ieder . " koekjes";
		
		?>
		<br/>
		<?php
		
			/**
			 * Alles bij elkaar
			 **/
			$volledige_naam = "Jon van Put";
			$leeftijd = 28;
			$profiel = "Mijn naam is " . $volledige_naam . " en ik ben " . $leeftijd . " jaar oud!";
			echo $profiel;
		?>
		
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
