<?php
/*
FileName: method1.php
Createdby: Shweta Agrawal
CreatedDate: 21/11/2016 16:05
Purpose: Method to print numbers
*/

include('model.php'); // include model file to include all the function 

//func to print Numbers
function printNumbers(){
  $initialNumber=0;
  $lastNumber=100;
	
	echo implode('<br/>', Numbers($initialNumber, $lastNumber));
  
}

//call the function 
printNumbers();


?>