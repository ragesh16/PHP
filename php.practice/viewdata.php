<?php 
$servername='local host'; 
$username='root'; 
$password=''; 
$dbname="studentdb"; 
$mysqli=new mysqli("localhost","root","","studentdb"); 
if(!$mysqli) 
{ 
die("Could Not Connect Mysql:" . mysqli_error()); 
} 
$query="SELECT *FROM stdinfo"; 
echo "<table border='2' cellspacing='2' cellpadding='2'> 
<tr><td>STDID</td> 
<td>STDNAME</td> 
<td>STDREGNO</td> 
<td>STDAGE</td> 
<td>STDDEPT</td></tr>"; 
if($result =$mysqli->query($query)) 
{ 
while($row = $result->fetch_assoc()) 
 { 
 $stdid=$row["stdid"];
 $stdname=$row["stdname"];
 $stdregno=$row["stdregno"];
 $stdage=$row["stdage"];
 $stddept=$row["stddept"];
 echo "<tr><td>$stdid</td>
 <td>$stdname</td> 
 <td>$stdregno</td> 
 <td>$stdage</td> 
 <td>$stddept</td></tr>";
 } 
 $result->free(); 
} 
?> 
