<?php 
$first_name ="saradha"; 
$second_name ="DEVI"; 
$clg_name="sri ramakrishna mission vidyalaya"; 
$address="periyanayakkanpalayam"; 
echo "<h4>1.String LowerCase To UpperCase</h4>"; 
echo $first_name,'=',strtoupper($first_name); 
echo "<h4>2.String UpperCase To LowerCase</h4>"; 
echo $second_name,'=',strtolower($second_name); 
echo "<h4>3.String Lenth</h4>"; 
echo $clg_name,'=',strlen($clg_name); 
echo "<h4>4.String Compare</h4>"; 
echo "php","\n php" ,'=',strcmp("php","php"); 
echo "<h4>5.String Reverse</h4>"; 
echo $address,'=',strrev($address); 
echo "<h4>5.String shuffle</h4>"; 
echo "mother",'=',str_shuffle("mother "); 
?>