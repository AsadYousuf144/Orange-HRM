<?php
$host="localhost";
$username='root';
$pass="";
$db_name="latestweb";
mysql_connect($host,$username,$pass);
mysql_select_db($db_name);

$d_ID        = $_POST['dept_id'];

$dep_name       = $_POST['name'];
$loc       = $_POST['location'];

// Insert data into mysql
$sql="INSERT INTO dept VALUES ('$d_ID ', '$dep_name  ', '$loc')";

$result = mysql_query($sql);

if($result){
 echo '<script language="javascript">';
         echo 'alert("dept add Successfuly...!")';
         echo '</script>';

}
else{
 echo '<script language="javascript">';
         echo 'alert("dept UnSuccessful...!")';
         echo '</script>';
}


// close mysql
mysql_close();

?>