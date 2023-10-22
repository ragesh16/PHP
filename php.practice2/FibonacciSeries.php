<?php 
//Fibonacci Series 
 
$n1 = 0; 
$n2 = 1; 
$n3=$n1+$n2; 
$num=0; 
echo "<h1>Fibonacci series for first 12 numbers: </h1><br />"; 
echo $n1.'<br/>'.$n2.'<br/>'; 
while($num<10) 
{ 
 
 echo $n3."<br />"; 
 $n1 = $n2; 
 $n2 = $n3; 
 $n3=$n1+$n2; 
 $num=$num+1; 
 
} 
?>