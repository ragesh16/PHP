<html> 
<body> 
<?php 
 $conn=mysqli_connect("localhost","root","","studentdb"); 
 $sql="SELECT * FROM stdinfo"; 
 $records=mysqli_query($conn,$sql); 
 ?> 
<h2>DELETE THE STUDENT DATA</h2> 
<table border ="1" cellpadding="1" cellspacing="1"> 
<tr> 
<th>STDID</th> 
<th>STDNAME</th> 
<th>STDREGNO</th> 
<th>STDAGE</th> 
<th>STDDEPT</th> 
<th>DELETE</th> 
</tr> 
<?php 
 while($row=mysqli_fetch_array($records))
 { 
 echo "<tr>"; 
 echo "<tr><form action=delete.php method=post>";
 	echo "<td><input type =text name =stdid 
value='".$row['stdid']."'></td>"; 
 echo "<td><input type =text name =stdname 
value='".$row['stdname']."'></td>"; 
 echo "<td><input type =text name =stdregno 
value='".$row['stdregno']."'></td>"; 
 echo "<td><input type =text name =stdage 
value='".$row['stdage']."'></td>"; 
 echo "<td><input type =text name =stddept 
value='".$row['stddept']."'></td>"; 
 echo "<td><input type =submit value= Delete >"; 
 echo "</form></tr>"; 
 } 
 ?> 
</table> 
</body> 
</html>