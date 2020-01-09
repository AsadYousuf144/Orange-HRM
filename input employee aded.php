<?php //data.php
$host="localhost";
$username='root';
$pass="";
$db_name="latestweb";
mysql_connect($host,$username,$pass);
mysql_select_db($db_name);


$eid        = $_POST['eid'];
$userid        = $_POST['uid'];
$did       = $_POST['did'];
$fname        = $_POST['fname'];
$lname        = $_POST['lname'];
$sal      = $_POST['Salary'];
$status   = $_POST['name'];
$supervisorname= $_POST['sname'];
$gender      = $_POST['male'];
$nationality  = $_POST['pname'];
$martialstatus   = $_POST['mstatus'];
$Dob  = $_POST['dob'];


// Insert data into mysql
$sql="INSERT INTO emp VALUES ('$eid',  '$userid  ','$did  ', '$fname','$lname','$sal','$status','$supervisorname','$gender','$nationality','$martialstatus','$Dob ')";

$result = mysql_query($sql);

if($result){
echo ("<br>employee is successfully aded");

}
else{
echo ("<br>employee is not aded");
}


// close mysql
mysql_close();

?>