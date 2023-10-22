<?php 
 $conn=mysqli_connect("localhost","root","","studentdb"); 
 $stdid=$_POST['stdid']; 
 $stdname=$_POST['stdname']; 
 $stdregno=$_POST['stdregno']; 
 $stdage=$_POST['stdage']; 
 $stddept=$_POST['stddept']; 
 $sql="UPDATE stdinfo SET 
stdid='$stdid',stdname='$stdname',stdregno='$stdregno',stdage='$stdage',stddept='$stddept' WHERE stdid ='$stdid'"; 
 if(mysqli_query($conn,$sql))
 { 
print_r("UPDATED SUCCESSFULLY");
 } 
?> 
