<?php
/*
FileName: 3.php
Createdby: Shweta Agrawal
CreatedDate: 22/11/2016
Purpose: rest content of method3.php 
*/

include('model.php'); // include model file to include all the function 

//func to print Numbers
function printNumbers(){
  $initialNumber=501;
  $lastNumber=1000;
	
	echo implode('<br/>', Numbers($initialNumber, $lastNumber));
  
}

?>
<div class="data-item">
    <?php 
			//call the function 
			printNumbers(); 
		?>
</div>

<div class="data-item">
    Click on the button again and see what happens.
</div>