<?php
	
	/*
	
	-----------------------------------
	----------- Variables -------------
	-----------------------------------
	
	-----------------------------------
	-- Basic Variable with string
	-----------------------------------
	
	-- code
	
		$food = "apple";
	
		echo $food;
	
	-- result
	
		apple
	
	-----------------------------------
	-- Appending string variables
	-----------------------------------
	
	-- code
	
		$name = "Jon";
		
		$lastname = "van Put"
		
		$fullname = $name . " " . $lastname;
		
		echo "My name is " . $fullname;
		
	-- result
	
		My name is Jon van Put
	
	-----------------------------------
	-- Variables with numbers
	-----------------------------------
	
	-- code
	 
		$number = 35;
		
		echo $number;
		
		echo "The number is " . $number;
		
	-- result 
	
		35
		
		The number is 35
	
	-----------------------------------
	-- Appending number variables
	-----------------------------------
	
	-- code 
		
		$numberA = 1;
		
		$numberB = 5;
		
		$numberResult = $numberA . $numberB;
		
		echo "The number is " . $numberResult;
		
	-- result
	
		The number is 15
	
	-----------------------------------
	-- Math with variables
	-----------------------------------
	
	-- code
	
		$year = 2015;
		
		$birthyear = 1987;
		
		$age = $year - $birthyear;
		
		echo "I am " . $age . " years old!";
		
	-- result
	
		I am 28 years old!
		
	-----------------------------------
	-- Combining string and number variables
	-----------------------------------
	
	-- code 
		
		$fullname = "Jon van Put";
		
		$age = 28;
		
		$profile = "My name is " . $fullname . " and I am " . $age . " years old!";
		
		echo $profile;
		
	-- result
	
		My name is jon van Put and I am 28 years old!
	
	
	*/
?>

<html>

	<head></head>
	<body>
	
		<h1>Variables</h1>
		
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			
			//****** Write your code here! ******
			
			echo "Your first variable!";
			
		?>
		</p>
		
		<h3>------------------------------</h3>
		
		<a href="index.php">Back to home</a>
		
	
	</body>

</html>