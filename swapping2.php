 
<html>
<h1> Swapping  without introducing 3rd Variables</h1>

<form action="" method="post">
    <label>Enter a 1st number </t></label><input type="text " name="number" />
    </br></br>
    <label>Enter a 2nd number</label><input type="text" name="number2" />
    </br></br>
    <input type="submit" />
  </form>


</html>


<?php
 $number = $number2 = " ";
  if($_POST){
    
    $number = $_POST['number']; 
    $number2 = $_POST['number2']; 
    
    //check if the enter value is a number or throw an error
  //check if the enter value is a number or throw an error
    if (!(is_numeric($number) && is_int(0+$number))){
      echo "<p style='color:red;'>Error: You entered a string. Please enter an Integer in 1st number </p>";
      die();
    }
    
    if (!(is_numeric($number2) && is_int(0+$number2))){
      echo "<p style='color:red;'>Error: You entered a string. Please enter an Integer in </p>";
      die();
    }

  }
echo "Before Swapping</br>";
echo "Value of 1st number: $number</br>";
echo "Value of 2nd number: $number2</br></br></br>";

$number = $number + $number2;
$number2 = $number - $number2;
$number = $number - $number2;

echo "After Swapping </br>" ;
echo "Value of 1st number: $number</br>";
echo "Value of 2nd number: $number2</br>";
?>