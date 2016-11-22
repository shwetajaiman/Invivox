<?php
/*
FileName: method2.php
Createdby: Shweta Agrawal
CreatedDate: 21/11/2016 16:30
Purpose: OOPS based Method to print numbers
*/

// parent class
class printNumbers {
   
   // constructor
   public function __construct() {
      $this->print0();
   }
	
   public function __call($method, $_) {
      $count = str_replace('print', '', $method);
	   if($count % 3==0 && $count % 5==0){echo 'invivox';}
	   else if($count % 3==0){echo 'invi';}
	   else if($count % 5==0){echo 'vox';}
	   else{echo $count;}
	   echo '<br/>';
	   
      $this->{"print" . ++$count}();
   }
}

// child class
class printHundredNumbers extends printNumbers {
   public function print1001() {}
}

new printHundredNumbers;




?>
