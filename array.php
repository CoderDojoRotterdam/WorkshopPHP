<html>
	<head>
		<title>Arrays!</title>
	</head>
	<body>
		<h1>Arrays!</h1>
		<h3>------------------------------</h3>

		<p>
			<?php
				// OPDRACHT 1
				//
				// Geef van onderstaande array de 2e en 3e titel weer.
				
				$films = array("Titanic", "The Matrix", "Inception", "Gladiatior");
				
				echo "De tweede film is ";
				echo "<br/>";
				echo "De derde film is ";
				
				/************************************************************/
				echo "<br/>";
				echo "<br/>";
				/************************************************************/
				
				// OPDRACHT 2
				//
				// Maak zelf een associatieve array met de leeftijden van 5 klasgenoten.
				// Geef ze allemaal onder elkaar weer.
				//
				// [naam] is [leeftijd] jaar.
				// [naam] is [leeftijd] jaar.
				// [naam] is [leeftijd] jaar.
				// [naam] is [leeftijd] jaar.
				// [naam] is [leeftijd] jaar.
				
				$klasgenoten = array();
				echo $klasgenoten;
			?>
		</p>

		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>

		<?php

			/***************************************************

			///////////////////////
			// Een simpele array met 3 spelletjes
			///////////////////////


				$spelletjes = array("Mario", "Zelda", "Minecraft");

				echo $spelletjes[0];	// Het eerste vakje (Mario)
				echo $spelletjes[1];	// Het tweede vakje (zelda)
				echo $spelletjes[2];	// Het derde vakje (Minecraft)


			///////////////////////
			// Een array met getallen
			///////////////////////

				$jaartallen = array(1987, 2015, 3000);

				echo "Het jaar is " . $jaartallen[0]; // 1987
				echo "Het jaar is " . $jaartallen[1]; // 2015
				echo "Het jaar is " . $jaartallen[2]; // 3000


			///////////////////////
			// Een array met getallen én tekst
			///////////////////////

				$autos = array("Volkswagen", 2000, "Audi", 3000);

				echo "De auto " . $autos[0] . " is van het type " . $autos[1];
				echo "De auto " . $autos[2] . " is van het type " . $autos[3];


			///////////////////////
			// Alles bij elkaar
			///////////////////////

				$namen 		= array("Jon", "Piet");
				$leeftijden = array(32, 28);

				echo "Mijn naam is " . $namen[0] . " en ik ben " . $leeftijden[0] . " jaar oud!"; // Jon - 32



			///////////////////////
			// Associatieve Arrays
			// Dit betekend dat je in plaats van de getallen namen aan de hokjes geeft
			// $array['sleutel'] = "waarde";
			///////////////////////

			// Manier 1

				$spelletjes['nintendo'] = "mario";
				$spelletjes['xbox'] = 360;

				echo $spelletjes['nintendo']; // mario


			// Manier 2
				$spelletjes = array(
						"nintendo" => "mario",
						"computer" => "minecraft",
						"xbox" => 360 );

				echo $spelletjes["nintendo"];  // mario
				echo $spelletjes["computer"];  // minecraft
				
			// EXTRA
			
				echo $spelletjes['computer']; // minecraft
				echo $spelletjes[1]; // minecraft
				
				// ALLEBIJ HETZELFDE!

			***************************************************/
		?>

	</body>
</html>
