<?php 

	/*
	
	-----------------------------------
	------------- Loops ---------------
	-----------------------------------
	
	-----------------------------------
	-- For loop
	-----------------------------------
	
	-- code
	
		for($i = 0; $i < 3; $i++){
			
			echo "Hello World! Looped " . $i . " times!";
			
		}
		
	-- result
	
		Hello World! Looped 0 times!
		Hello World! Looped 1 times!
		Hello World! Looped 2 times!
		
	-----------------------------------
	-- For loop with an array
	-----------------------------------
	
	-- code 
	
		$games = array("Zelda", "Mario", "Minecraft");
		
		for($i = 0; $i < 3; $i++){
			
			echo "My favorite game is " . $games[$i];
			
		}
		
	-- result
	
		My favorite game is Zelda
		My favorite game is Mario
		My favorite game is Minecraft
		
	-----------------------------------
	-- For each loop with array
	-----------------------------------
	
	-- code
	
		$games = array("Zelda", "Mario", "Minecraft");
		
		foreach($games as $game){
		
			echo "<br/>My favorite game is " . $game;
			
		}
		
	-- result
	
		My favorite game is Zelda
		My favorite game is Mario
		My favorite game is Minecraft
		
	-----------------------------------
	-- For each loop for Associative arrays
	-----------------------------------
	
	-- code
	
		$games["Nintendo"] = "Mario";
		
		$games["Playstation"] = "Little Big Planet";
		
		$games["Pc"] = "Minecraft";
		
		foreach($games as $key => $value){
		
			echo $value . " is for " . $key;
			
		}
		
	-- result
	
		Mario is for Nintendo
		Little Big Planet is for Playstation
		Minecraft is for Pc
	
	*/

?>

<html>

	<head></head>
	<body>
	
		<h1>Loops!</h1>
		
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			
			//****** Write your code here! ******
			
			echo "Your first loop!";
			
			
		?>
		</p>
		
		<h3>------------------------------</h3>
		
		<a href="index.php">Back to home</a>
		
	
	</body>

</html>