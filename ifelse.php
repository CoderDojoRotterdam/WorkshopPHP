<html>
	<head>
		<title>Als Dan</title>
	</head>
	<body>
		<h1>Als? Dan!</h1>
		<h3>------------------------------</h3>
		
		<p>
    		<?php
				// OPDRACHT 1
				//
				// Maak een if-else om te controlleren of poging1 wint of niet.
				// Je moet dus controleren of poging1 gelijk is aan winnaar
				
				$winnaar = 7;
				$poging1 = 2;
				
				if(){
				    
				}
				else{
				    
				}
				
				/************************************************************/
				echo "<br/>";
				echo "<br/>";
				/************************************************************/
				
				// OPDRACHT 2
				//
				// Maak een if-else om te controlleren of deze persoon alcohol mag drinken.
				// Denk goed na over welke vergelijking je moet maken!
				// (Wat als iemand 18 is?)
				
				$leeftijd = 21;
				if(){
				    
				}
				else{
				    
				}
				
			?>
		</p>
		
		<h3>------------------------------</h3>
		<a href="index.php">Terug naar het overzicht</a>
	
	
	    <?php 

        	/***************************************************
			
			///////////////////////
			// Als Dan controlleert of iets waar is en kiest dan de code om uit te voeren
			///////////////////////
        	
                $aantal = 22;
        	
        		if($aantal == 24)
        		{
        		    echo "Krat is vol";
        		}
        		else
        		{
        		    echo "Krat is niet vol";
        		}
        		
        	///////////////////////
			// Verschillende vergelijkingen
			// 
			// <  kleiner dan
			// <= kleinder of gelijk aan
			// == is gelijk
			// != is niet gelijk
			// >= groter of gelijk
			// >  groter dan
			// 
			///////////////////////
			
			    $leeftijd = 26;
        	
        		if($leeftijd < 18)
        		{
        		    echo "Leeftijd is kleiner dan 18";
        		}
        		else if($leeftijd <= 18)
        		{
        		    echo "Leeftijd is kleiner OF gelijk aan 18";
        		}
        		else if($leeftijd == 18)
        		{
        		    echo "Leeftijd is 18";
        		}
        		else if($leeftijd != 18)
        		{
        		    echo "Leeftijd NIET gelijk aan 18";
        		}
        		else if($leeftijd >= 18)
        		{
        		    echo "Leeftijd is groter OF gelijk aan 18";
        		}
        		else if($leeftijd > 18)
        		{
        		    echo "Leeftijd is groter dan 18";
        		}
        		else
        		{
        		    echo "Geen enkele van de bovenstaande criteria waar";
        		}
        		
			
        	
        	***************************************************/
        ?>
	</body>
</html>
