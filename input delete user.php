<?php //data.php
$host="localhost";
$username='root';
$pass="";
$db_name="userauth";
mysql_connect($host,$username,$pass);
mysql_select_db($db_name);


$userID        = $_POST['id'];
$userName       = $_POST['name'];

$userType          = $_POST['User_type'];

//delete data from mysql
$sql="delete fom tablename where User_Id=$userID & User_name=$useName & User_type=$userType";

$result = mysql_query($sql);

if($result){
echo ("<br>User is successfully deleted");

}
else{
echo ("<br>User is not deleted");
}


// close mysql
mysql_close();

?>