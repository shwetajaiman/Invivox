<?php
/*
FileName: method1.php
Createdby: Shweta Agrawal
CreatedDate: 21/11/2016 16:05
UpdatedDate: 22/11/2016 10:00
Purpose: Method to print numbers with simple css scrolling
*/

include('model.php'); // include model file to include all the function 

//func to print Numbers
function printNumbers(){
  $initialNumber=0;
  $lastNumber=1000;
	
	echo implode('<br/>', Numbers($initialNumber, $lastNumber));
  
}

?>
<html>

<!--CSS code-->	
<style>
body {
  padding-top: 70px;
  border:1px solid black;
  overflow:hidden;
}

.mygrid-wrapper-div {
    border: solid red 1px;
    overflow: scroll;
    height: 330px;
		  padding-left: 5px;
}
</style>
<!--HTML code-->	
    <h2>CSS Scrolling</h2>		  
    <div class="mygrid-wrapper-div" id="div1">
		
        <?php 
			//call the function 
			printNumbers(); 
		?>
   </div>
</html>