<html>
	<head>
		<title>Functies!</title>
	</head>
	<body>
		<h1>Functions!</h1>
		<h3>------------------------------</h3>
		
		<p>
			<?php 
				// OPDRACHT 1
				//
				// Maak een functie die de oppervlakte van een vierkant berekent
				// (De oppervlakte van een vierkant is lengte maal breedte)
				
				function oppervlakte()
				{
					
				}
				
				$breedte = 10;
				$lengte = 15;
				
				oppervlakte($lengte, $breedte);
			?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
	
		<?php 

			/***************************************************
			
			///////////////////////
			// Een functie is een stukje code wat je ergens anders aan roept
			// 
			///////////////////////
			
				function hallo()
				{
					echo "Hallo CoderDojo!";
				}
				
				hallo();
			
			///////////////////////
			// Een functie is kan ook informatie krijgen
			// 
			///////////////////////
			
				function optellen($a, $b){
					
					$antwoord = $a + $b;
					echo $a . " + " . $b . " = " . $antwoord;
					
				}
				
				plus(5, 6);
			
			
			***************************************************/
		
		?>
		
	</body>
</html>
