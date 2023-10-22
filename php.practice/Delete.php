<?php 
 $conn=mysqli_connect("localhost","root","","studentdb"); 
 $stdid=$_POST['stdid']; 
 $sql="DELETE FROM STDINFO WHERE stdid='$stdid'"; 
 if(mysqli_query($conn,$sql)) 
 { 
print_r("DELETED SUCCESSFULLY"); 
 } 
?>