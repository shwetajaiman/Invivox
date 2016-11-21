<?php
/*
FileName: model.php
Createdby: Shweta Agrawal
CreatedDate: 21/11/2016 16:20
Purpose: Model file which include all the functions
*/

/* get numbers in an array
parameter: initialNumber, lastNumber
output:array
*/
function Numbers($initialNumber, $lastNumber){

	 for($i=$initialNumber; $i<=$lastNumber; $i++){
     
      	if($i % 3==0 && $i % 5==0){
        	  $print = 'invivox';
      	}elseif($i % 3==0){
        	  $print = 'invi';
      	}elseif($i % 5==0){
        	  $print = 'vox';
      	}else{
        	  $print = $i;
      	}  
      	$array[] =  $print;
	 }
	return $array;

}


?>