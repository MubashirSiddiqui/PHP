<html>
<body>
<h3>Odd or Even PHP Example</h3>
	<form action="" method="post">
		<label>Enter a number</label><input type="text" name="number" />
		<input type="submit" />
	</form>

<?php
	

	if($_POST){
		
		$number = $_POST['number']; 
		
		//check if the enter value is a number or throw an error
		if (!(is_numeric($number) && is_int(0+$number))){
			echo "<p style='color:red;'>Error: You entered a string. Please enter an Integer</p>";
			die();
		}
		
		
	
		if(($number % 2) == 0){
			echo "You entered an Even number";
		}else{
			echo "You entered an Odd number";
		}
	}
	
?>

</body>
</html>