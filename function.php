<?php 

	/*

	-----------------------------------
	----------- Functions -------------
	-----------------------------------
	
	-----------------------------------
	-- Basic function
	-----------------------------------
	
	-- code
	
		function hello(){
			
			echo "Hello world!";
			
		}
		
		hello();
		
	-- result
	
		Hello world!
		
	
	-----------------------------------
	-- TODO:
	-----------------------------------
	
	//Basic function
	function sayHello(){
		
		echo "<br/><br/>";
		echo "Hello World by a function!";
		
	}
	
	//Use function
	sayHello();
	
	// Function with a return value
	function myName(){
		
		return "Jon";
		
	}
	
	echo "<br/><br/>";
	echo "My name is " . myName();
	
	// Function with Arguments
	// Simple example math
	function plusMath($a, $b){
		
		$answer = $a + $b;
		
		echo "<br/><br/>";
		echo $a . " + " . $b . " = " . $answer;
		
	}
	
	plusMath(5, 6);
	
	// simple math with return value;
	function minusMath($a, $b){
		
		return $a - $b;
		
	}
	
	echo "<br/><br/>";
	echo "The answer is " . minusMath(12, 7);
	
	*/

?>

<html>

	<head></head>
	<body>
	
		<h1>Functions!</h1>
		
		<h3>------------------------------</h3>
		
		<p>
		<?php 
			
			//****** Write your code here! ******
			
			echo "Your first function!";
			
			
		?>
		</p>
		
		<h3>------------------------------</h3>
		
		<a href="index.php">Back to home</a>
		
	
	</body>

</html>