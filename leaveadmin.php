<?php
	$conn = mysql_connect('localhost', 'root' );
	$db_selected = mysql_select_db('project', $conn);
	if (!$db_selected) {
    	die ('Can\'t use foo : ' . mysql_error());
}

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $status= $_POST['status'];
    mysql_query("update emp_leave set Request_status='$status' where Emp_id='$id' ");
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sensa - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
	

<script type="text/javascript">
	function set(){
		var e = document.getElementById('combo');
		var val= e.options[e.selectedIndex].text;
        document.getElementById('id').value=val;
        alert(val);

}
</script>  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>

<body class="noheader">
<div id="container">
	<div id="header">
    	<h1><a href="/">Orange HRM</a></h1>
        
        <div class="clear"></div>
    </div>
<?php 
		$role="";//copy paste for logout 
		if(isset($_COOKIE["user"]))
			$role= $_COOKIE["user"];
		else
			header("location:login.php");
	?>

    <div id="nav">
    	<ul class="sf-menu dropdown">
        		<li><a href="index.php">Home</a></li>
			
			 
			
			 <li><a class="has_submenu" href="#">Admin</a>
            	<ul>
                	<li><a href="usersearch.php">User</a></li>
					
                   
                </ul>
            </li>
			
			<li><a class="has_submenu" href="#">PIM</a>
            	<ul>
                	<li><a href="Department.html">Department</a></li>
						
            	
                	<li><a href="Employee.html">Employee</a></li>
                   
                 </ul>
            </li>
			
			
			<li><a href="job.html">Job</a></li>

          

    
                <li><a href="Qualifications.html">Qualifications</a></li>
            	
               

               <li><a class="has_submenu">Attendance</a>
            	<ul><?php if($role=="admin"){
               			echo "<li><a href='markattendance.php'>Insert Attendance</a></li>";
				}?>
                	<li><a href="viewattendance.php">View Attendance Records</a></li>
                    
			<?php if($role=="admin"){
			echo "<li><a href='updateattendance.php'>Update Attendance</a></li>";
                   }?>
                </ul>
            </li>
            <li><a class="has_submenu">Leave</a>
            	<ul>
                	<li><a href="assignleave.php">Leave Request</a></li>
                    <?php if($role=="admin"){
			echo "<li><a href='leaveadmin.php'>Admin Approval</a></li>";    	
                    }?>
                     <li><a href="leavelist.php">View Leave List</a></li> 
                </ul>
            </li>

         
         
            <li><a href="contact.html">Contact</a></li>
	 <li><a href="logout.php">Logout</a></li>
</ul>
    </div>
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <a href="home.html">Home</a> &raquo;
            <a href="attendance.html">Attendance</a> &raquo;
            <strong>View Attendance Records</strong>
        </div>
            
		
        
        
           <div id="sub-header">
		<h2>Leave Admin</h2>

        </div>

	<div style="float:right"><a href="leaveadmin.php?sk=h_chr">Latest</a></div>        
    
			
				<p>&nbsp;</p>
				
				<h3>Requests</h3>
				<fieldset>
				<legend>View Leave Requests</legend>
				<form method="POST">
						
                        
                       
            <p><label for="empid" > Employee ID: </label>
            <select name="select" id="combo" onchange="set()">
			<?php
            $sql = "SELECT Emp_id FROM emp_leave" ;
			$result = mysql_query($sql);
	        while($row = mysql_fetch_array($result,MYSQL_NUM))
			{?>
		    <option name="id" value="<?php echo $row['0'];?>"><?php echo $row['0'];?></option>
		    <?php
            }
            ?>
            </select><p>
             		
            <p><label for="status">Request Status:</label>
						
            <select name="status">
                <option name="status" value="Accepted">Accepted</option>
                <option name="status" value="Rejected">Rejected</option>
            </select>

            <br>
            
            <input type="hidden" id="id" name="id" value=""/>        
			<input type="submit" name="submit" class="formbutton" value="Submit"  /><br /><br/>
			</form>
			</fieldset>
                
                
                
    <!--TABLE CREATION:  -->    
    <div id="recordsTable">
    <div id="msg" ></div>
    <div class="box noHeader" id="search-results">
    
        
    <div class="inner">
    <form method="post" action="#" name="frmList_ohrmListComponent" id="frmList_ohrmListComponent">
        <input type="hidden" name="defaultList[_csrf_token]" value="b0fd557b08419403c74094af047a65f7" id="defaultList__csrf_token" />         

        <div id="helpText" class="helpText"></div>

        <div id="scrollWrapper">
            <div id="scrollContainer">
            </div>
        </div>        
        <div id="tableWrapper">
        <table class="table hover" id="resultTable">
            
  <thead>
<tr>
    <th rowspan="1" style="width:20%"><span class="headerCell">Employee ID</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Employee Name</span></th>
<th rowspan="1" style="width:15%"><span class="headerCell">Starting Date(From)</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Ending Date(To)</span></th>
<th rowspan="1" style="width:15%"><span class="headerCell">Reason</span></th>
<th rowspan="1" style="width:5%"><span class="headerCell">Request Status</span></th>

</tr>            
 </thead>
   <tbody>
 
 <?php
$query="";
$sk="";
if(isset($_GET['sk']))
$sk=$_GET['sk'];

if($sk=='h_chr')
$query=" select * from emp_leave where Request_status=''";
else
$query=" select * from emp_leave ";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{

echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
if($row[5]=='')
	echo "<td>Pending</td>";
else
	echo "<td>$row[5]</td>";
echo "</tr>";

}
?>
 </tbody>
 </table><br/><br/>
                
      <!--//TABLE ENDED:  -->        
                
                
                
                
        </ul> 
        </div>
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
      <div class="footer-content">

        <div class="footer-box">
            <h4>About Orange HRM</h4>

            <p>
                Human Resource Management...........
            </p>
        </div>
        
       
       
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

    <!-- A link to http://www.zypopwebtemplates.com must remain. To remove link see http://www.zypopwebtemplates.com/licensing -->
            <p>&copy; YourSite 2010. <a href="http://zypopwebtemplates.com/">Free Web Layouts</a> by ZyPOP</p>
    </div>  
</div>
</body>
</html>
