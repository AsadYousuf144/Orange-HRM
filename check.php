<?php
		$conn = mysql_connect('localhost', 'root' );
	$db_selected = mysql_select_db('project', $conn);
	if (!$db_selected) {
    	die ('Can\'t use foo : ' . mysql_error());
	}
else{
	$query = "select * from mark_attendance";
	$result = mysql_query($query);
	echo "<table>";
	while($row=mysql_fetch_array($result,MYSQL_NUM))
	{
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
			<td>$row[3]</td><td>$row[4]</td>
		<td><a href='updateattendance.php/?id=".$row[0]."'>Edit</a></td></tr>";
	}
	echo "</table>";
}
?>