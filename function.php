<?php 

	/*
	-----------------------------------
	----------- Functies -------------
	-----------------------------------
	
	-----------------------------------
	-- Basis functies - Functies die alleen iets doen!
	-----------------------------------
	
	-- Code voorbeeld
	
		function hallo(){
			
			echo "Hallo CoderDojo!";
			
		}
		
		hallo();
		
	-- Resultaat
	
		Hallo CoderDojo!
		
	---------------------------------------
	-- Functies die iets terug geven
	---------------------------------------
	
	function mijnNaam(){
		
		return "Jonathan";
		
	}
	
	echo "<br/><br/>";
	echo "Hoi, mijn naam is " . mijnNaam();
	
	// Functie die iets kunnen verwerken, bijvoorbeeld een rekensommetje oplossen
	function plus($a, $b){
		
		$antwoord = $a + $b;
		
		echo "<br/><br/>";
		echo $a . " + " . $b . " = " . $antwoord;
		
	}
	
	plus(5, 6);
	
	// Functie die een rekensommetje oplost en het antwoord terug geeft
	function min($a, $b){
		
		return $a - $b;
		
	}
	
	echo "<br/><br/>";
	echo "Het antwoord is " . min(12, 7);
	
	*/

?>

<html>
	<head>Functies!</head>
	<body>
		<h1>Functions!</h1>
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			// Vanaf hier mag je zelf aan de slag!
			echo "Probeer hier eens wat te maken met functies! Als je het even niet meer weet, kijk dan naar de voorbeelden hierboven!";
		?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
	
	</body>
</html>
