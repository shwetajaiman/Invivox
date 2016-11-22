<?php
/*
FileName: method3.php
Createdby: Shweta Agrawal
CreatedDate: 22/11/2016 10:30
Purpose: Another method to load content
*/

include('model.php'); // include model file to include all the function 

//func to print Numbers
function printNumbers(){
  $initialNumber=0;
  $lastNumber=100;
	
	echo implode('<br/>', Numbers($initialNumber, $lastNumber));
  
}

?>
<html>
    <head>
        <title>Load content</title>
		<link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div id="wrapper">
            <h1>Load content by clicking load more</h1>
            <div id="data-container">
                <div class="data-item">
    			<?php 
			//call the function 
			printNumbers(); 
			?>
		 </div>

                 <div class="data-item">
                    Click the button below to load more items.
                </div>
            </div>
            <div id="button-more" onclick="lazyload.load()">
                Load more items
            </div>
            <div id="loading-div">
                loading more items
            </div>
        </div>
       
	<script type="text/javascript" src="jquery/jquery.1.10.min.js"></script>
        <script type="text/javascript" src="jquery/lazyload.js"></script>
    </body>
</html>
