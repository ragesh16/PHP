<?php 
echo "<h1>Ascending Order </h1><br />"; 
$numbers = array(4, 6, 2, 22, 11); 
sort($numbers); 
$arrlength = count($numbers); 
for($x = 0; $x < $arrlength; $x++) 
{ 
 echo $numbers[$x]; 
 echo "<br>"; 
} 
?>