<!DOCTYPE html>
<html>
<head>
<title>Bravebank / Calculator Page </title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>


<?php
  
  include 'navbar-4.php';

?>

<!--This part of the site calculates a set of numbers that was inputed by user and admin. -->

<form>
<p> </p>
<p> </p>
<p>

    <input type="text" name="number1" placeholder="First number to enter: ">
    <input type="text" name="number2" placeholder="Second number to enter: ">
    <!-- Select is used to make a drop down list. Null being the empty placeholder for the calculator-->
    <select name="calculator">
        <option>NULL </option>
        <option>Add the numbers </option>
        <option>Subtract the numbers </option>
        <option>Multiply the numbers </option>
        <option>Divide the numbers </option>
    </select>
    <br>
    <br> 
    <button name="submission" name="submission" value="submission" >Calculate to find the answer </button>

</form>    

<p> Your answer is: </p>


<?php 

$calculator = null;

/*
In GET, this is a method that is visible in the web browser's
URL. In other words, this is mainly to be see something but not directly 
change it as it's passed to receieve data. The isset function here checks
to make sure the conclusion variables are set. 
*/

if(isset($_GET['submission'])) {

    $conclusion1 = $_GET['number1'];

    $conclusion2 = $_GET['number2'];

    $calculator = $_GET['calculator'];

}

/*
The switch statement here is similar to the if statements 
in that each line that is executed so that mistakes can be
avoided better. And with the case, this is used to make 
sure that it matches up with the switch as the mathematic operations
are being executed. 
*/

switch ($calculator) {
        
        case "Null": 
            echo "ERROR: Must select a method in order for it be calculated";
        break;    
            //This case will add the values
        case "Add the numbers": 
            echo $conclusion1 + $conclusion2;
        break;    
             //This case will subtract the values
        case "Subtract the numbers": 
            echo $conclusion1 - $conclusion2;
        break;    
             //This case will multiply the values
        case "Multiply the numbers": 
            echo $conclusion1 * $conclusion2;
        break;    
             //This case will divide the values
        case "Divide the numbers":   
            echo $conclusion1 / $conclusion2;
        break;    
}
echo "<body style='background-color:white'>";

?>

<footer class="text-center mt-5 py-2">
         <p><a href="home.php">Log Out</a></p>
        </footer>

</body>
</html>