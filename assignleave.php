<?php
	$conn = mysql_connect('localhost', 'root' );
	$db_selected = mysql_select_db('project', $conn);
	if (!$db_selected) {
    	die ('Can\'t use foo : ' . mysql_error());
	}
	
    if(isset($_POST['submit'])){

$id= $_POST['id'];
$name= $_POST['name'];
$sdate= $_POST['s_date'];
$edate= $_POST['e_date'];
$reason= $_POST['reason'];
mysql_query("insert into emp_leave(Emp_id,Emp_name,S_date,E_date,Reason) value('$id','$name','$sdate','$edate','$reason')");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sensa - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


<!--
sensa, a free CSS web template by ZyPOP (www.zypopwebtemplates.com)

Download: http://www.zypopwebtemplates.com

License: Creative Commons Attribution
//-->
</head>

<body>
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
    
    <div id="sub-header">
		<h2>Assign Leave</h2>
    </div>
    
    <p>&nbsp;</p>
				
				<h3>Leave</h3>
				<fieldset>
					<legend>Assign Leave to an Employee</legend>
					<form action="#" method="POST">
                    <p><label for="Eid">Employee ID:</label>
						<input name="id" id="id" placeholder="Emp Id" type="text" /><br/></p>	
						<p><label for="name">Employee Name:</label>
						<input name="name" id="name" placeholder="Emp Name" type="text" /><br/></p>		
					
                        <p><label for="date">Starting Date(From):</label>
						<input name="s_date" id="date" placeholder="dd/mm/yyyy" type="date"  /><br/></p>
                        <p><label for="date">Ending Date(To):</label>
						<input name="e_date" id="date" placeholder="dd/mm/yyyy" type="date"  /><br/></p>
                      
                        
                        <p><label for="reason">Reason:</label>
						<input name="reason" id="reason" placeholder="sick/death/casual" type="text" /><br/><br/></p>
                      
						<input name="submit" class="formbutton" value="ASSIGN" type="submit" /><br/><br/><br/>
					</form>
				</fieldset>
                
           
       
                 </div>
        </div>
                
        
      <div id="tableWrapper">
 <table class="table hover" id="resultTable">
            
                           <thead>
                             <tr>
<th rowspan="1" style="width:20%"><span class="headerCell">Employee ID</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">User ID</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Dept ID</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Employee FName</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Employee LName</span></th>

                            </tr>            
                          </thead>


<tbody>
                
    
<?php

$query=" select * from emp ";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";

}
?> 
 </tbody>
 </table><br/><br/>        
                
          
                
                
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
               Its a Human Resource website.......
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
