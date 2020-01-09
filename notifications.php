<?php
	include("connectivity.php");
	$query="select * from emp_leave where Request_status=''";
	$result = mysql_query($query);
	echo "<div id='notifi'><ul>";
	while($row=mysql_fetch_array($result))
	{	
		echo "<li>".$row[0]." ".$row[1]." ".$row[4]."<a href='#'> accept</a> <a href='#'>reject</a>"."</li>";	
	}
	echo "</ul></div>";

?>