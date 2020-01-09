// <?php //data.php
// $host="localhost";
// $username='root';
// $pass="";
// $db_name="latestweb";
// mysql_connect($host,$username,$pass);
// mysql_select_db($db_name);


// $userID        = $_POST['id'];
// $userName       = $_POST['name'];
// $userType          = $_POST['User_type'];

//search data from mysql
// $sql="select * from user where User_id=$userID & User_name=$userName & User_type=$userType";

// $result = mysql_query($sql);
// $num_rows = mysql_num_rows($result);
// if($num_rows == 1){
// echo "<h2> $num_rows Employee </h2>";
// }
// else
// echo "<h2> $num_rows Employees </h2>";
// for($a=0; $a<$num_rows; $a++)
// {
 // $rec = mysql_fetch_array($result);
 // echo "<tr>";
 // echo "<td>$rec[0]</td>";//ID
    // echo "<td>$rec[1]</td>";//User Name
 // echo "<td>$rec[2]</td>";//User Type
    

// if($result){
// echo ("<br>User is successfully added");

// }
// else{
// echo ("<br>User is not added");
// }


//close mysql
// mysql_close();
 ?>
<?php
if (isset($_GET['name']))
{
$letter = $_GET['name'];
$A = mysql_connect("localhost","root","") or die("Error in MYSQL Connection!");
  mysql_select_db("latestweb",$A) or die("Error in DataBase!");
$B = mysql_query("Select * from user where User_id like '%".$letter."%'",$A) or die("Error in Insert Query.");
$num_rows = mysql_num_rows($B);
if($num_rows == 1){
echo "<h2> $num_rows Employee </h2>";
}
else
echo "<h2> $num_rows Employees </h2>";
for($a=0; $a<$num_rows; $a++)
{
 $rec = mysql_fetch_array($B);
 echo "<tr>";
 echo "<td>$rec[0]</td>";//User_id
    echo "<td>$rec[1]</a></td>";//User_name
 echo "<td>$rec[3]</td>";//User_type
                       
 echo "</tr>";
}    
  mysql_close($A); 
}
?>
