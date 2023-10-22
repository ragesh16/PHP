<html> 
<body> 
<?php 
 $conn=mysqli_connect("localhost","root","","studentdb"); 
 $sql="SELECT * FROM stdinfo"; 
 $records=mysqli_query($conn,$sql); 
 ?> 
<h2>UPDATE THE STUDENT DATA</h2> 
<table> 
<tr> 
<th>STDID</th> 
<th>STDNAME</th> 
<th>STDREGNO</th> 
<th>STDAGE</th> 
<th>STDDEPT</th> 
<th>EDIT IT</th> 
</tr> 
<?php
	while($row=mysqli_fetch_array($records)) 
 { 
 echo "<tr><form action=update.php method=post>";
 echo "<td><input type =text name =stdid value='".$row['stdid']."'></td>"; 
 echo "<td><input type =text name =stdname value='".$row['stdname']."'></td>"; 
 echo "<td><input type =text name =stdregno value='".$row['stdregno']."'></td>"; 
 echo "<td><input type =text name =stdage value='".$row['stdage']."'></td>"; 
 echo "<td><input type =text name =stddept value='".$row['stddept']."'></td>"; 
 echo "<td><input type =submit value= Edit>"; 
 echo "</form></tr>"; 
 } 
 ?> 
</table> 
</body> 
</html> 