<?php //data.php
$host="localhost";
$username='root';
$pass="";
$db_name="project";
mysql_connect($host,$username,$pass);
mysql_select_db($db_name);


$user_ID        = $_POST['id'];
$user_name      = $_POST['name'];
$pasword        = $_POST['Password'];
$user_type       = $_POST['User_type'];

// Insert data into mysql
$sql="INSERT INTO user VALUES (' $user_ID ', '$user_name ', '$pasword  ', '$user_type')";

$result = mysql_query($sql);

if($result){
 echo '<script language="javascript">';
         echo 'alert("User add Successfuly...!")';
         echo '</script>';

}
else{
 echo '<script language="javascript">';
         echo 'alert("Registered UnSuccessfuly...!")';
         echo '</script>';
}


// close mysql
mysql_close();

?>