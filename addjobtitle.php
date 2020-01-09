<?php //data.php
$host="localhost";
$username='root';
$pass="";
$db_name="latestweb";
mysql_connect($host,$username,$pass);
mysql_select_db($db_name);

$jobid  = $_POST['jid'];
$employeeid=$_POST['eid'];
$jobtitle       = $_POST['title'];
$jobstatus   =$_POST['status'];
$catogery  =$_POST['catagory'];
$joineddate   =$_POST['Salary'];
$subunit  =$_POST['sub unit'];



// Insert data into mysql
$sql="INSERT INTO job VALUES ('$jobid','$employeeid','$jobtitle ','$jobstatus', '$catogery','$joineddate','$subunit')";


$result = mysql_query($sql);

if($result){
echo ("<br>job title is successfully added");

}
else{
echo ("<br>job title is not added");
}


// close mysql
mysql_close();

?>