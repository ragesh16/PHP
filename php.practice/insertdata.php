<?php 
 $servername='localhost'; 
 $username='root'; 
 $password=''; 
 $dbname="studentdb"; 
 $mysqli=new mysqli("localhost","root","","studentdb"); 
 if(!$mysqli) 
{ 
die("Could Not Connect Mysql:".mysqli_error()); 
} 
if(isset($_POST['save'])) 
{ 
 $stdid=$_POST['stdid']; 
 $stdname=$_POST['stdname']; 
 $stdregno=$_POST['stdregno']; 
 $stdage=$_POST['stdage']; 
 $stddept=$_POST['stddept']; 
 $sql="INSERT INTO stdinfo(stdid,stdname,stdregno,stdage,stddept) 
VALUES('$stdid','$stdname','$stdregno','$stdage','$stddept')"; 
 if(mysqli_query($mysqli,$sql)) 
 { 
 echo "New Record Created Sucessfull"; 
 } 
 else 
 { 
 echo "Error:". $sql.mysqli_error($mysqli);
 } 
mysqli_close($mysqli); 
} 
?> 
