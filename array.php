<?php 

	/*

	-----------------------------------
	------------- Arrays --------------
	-----------------------------------
	
	-----------------------------------
	-- Basic Array with strings
	-----------------------------------
	
	-- code
	
		$games = array("Mario", "Zelda", "Minecraft");
		
		echo $games[0];
		
		echo $games[1];
		
		echo $games[2];
		
	-- result
	
		Mario
		Zelda
		Minecraft
	
	-----------------------------------
	-- Basic Array with numbers
	-----------------------------------
	
	-- code
	
		$years = array(1987, 2015, 3000);
		
		echo "The year is " . $years[0];
		
		echo "The year is " . $years[1];
		
		echo "The year is " . $years[2];
		
	-- result
	
		The year is 1987
		The year is 2015
		The year is 3000
		
	-----------------------------------
	-- Array with numbers and strings
	-----------------------------------
	
	-- code
	
		$cars = array("Volgswagen", 2000, "Audi", 3000);
		
		echo "The car " . $cars[0] . " is model " . $cars[1];
		
		echo "The car " . $cars[2] . " is model " . $cars[3];
		
	-- result
	
		The car Volgswagen is model 2000
		The car Audi is model 3000
		
	-----------------------------------
	-- Playing a bit with arrays
	-----------------------------------
	
	-- code 
	
		$names = array("Jon", "Piet");
		
		$ages = array(32, 28);
		
		echo "My name is " . $names[1] . " and I am " . $ages[0] . " years old!"
		
	-- result
	
		My name is Piet and I am 32 years old!
		
	-----------------------------------
	-- Associative Arrays
	-----------------------------------
	
	-- code method 1
		
		$games = array("nintendo" => "mario", "computer" => "minecraft", "xbox" => 360 );
		
		echo $games["nintendo"];
		
		echo $games["computer"];
		
		echo $games["xbox"];
	
	-- result
	
		mario
		minecraft
		xbox
		
	-- code method 2
	
		$students["Jon"] = 28;
		
		$students["Piet"] = "38";

		$students["Kim"] = "apple";
		
		echo $students["Jon"];
		
		echo $students["Piet"];
		
		echo $students["Kim"];
		
	-- result
	
		28
		38
		apple	
	
	*/
?>

<html>

	<head></head>
	<body>
	
		<h1>Arrays!</h1>
		
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			
			//****** Write your code here! ******
			
			echo "Your first Array!";
			
		?>
		</p>
		
		<h3>------------------------------</h3>
		
		<a href="index.php">Back to home</a>
		
	
	</body>

</html>