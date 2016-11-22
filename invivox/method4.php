<?php
/*
FileName: method4.php
Createdby: Shweta Agrawal
CreatedDate: 22/11/2016 11:00
Purpose: Automatic content Scroller 
*/

include('model.php'); // include model file to include all the function 

//func to print Numbers
function printNumbers(){
  $initialNumber=0;
  $lastNumber=1000;
	
	echo implode('<br/>', Numbers($initialNumber, $lastNumber));
  
}

?>
<!--CSS code-->
<style type="text/css">

#marqueecontainer{
position: relative;
width: 400px; /*marquee width */
height: 300px; /*marquee height */
background-color: white;
overflow: hidden;
border: 3px solid red;
padding: 2px;
padding-left: 4px;
}

</style>
<!--Javascript code-->
<script type="text/javascript">

var delayb4scroll=2000 
var marqueespeed=2 
var pauseit=1 

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee

</script>

<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<!--YOUR SCROLL CONTENT HERE-->

<h4>Automatic Javascript content scroller</h4>

<?php 
//call the function 
printNumbers(); 
?>

</div>
</div>