﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OrangeHRM</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<script>
function openWin() {
    window.open("addemployee.html");
}
</script>
</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="#" style=color:orange >Orange<font color="#090">HRM</a></h1>
	
        <div class="clear"></div>
		<div style=color:#090>Human Resource Management</div>
        
        <div class="clear"></div>
    </div>
      <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.html">Home</a></li>
			
			 
			
			 <li><a class="has_submenu" href="user.html">Admin</a>
            	<ul>
                	<li><a href="user.html">User</a></li>
					
                   
                </ul>
            </li>
			
			<li><a class="has_submenu" href="#">PIM</a>
            	<ul>
                	<li><a href="Department.html">Department</a></li>
						
            	
                	<li><a href="Employee.php">Employee List</a></li>
					
                   
                 </ul>
            </li>
			
			
				<li><a href="job.html">Job</a></li>

          

    
				<li><a href="Qualifications.html">Qualifications</a></li>

               <li><a class="has_submenu">Attendance</a>
            	<ul>
                <li><a href="markattendance.html">Insert Attendance</a></li>
                	<li><a href="viewattendance.html">View Attendance Records</a></li>
                    <li><a href="updateattendance.html">Update Attendance</a></li>
                   
                </ul>
            </li>
            <li><a class="has_submenu">Leave</a>
            	<ul>
                	<li><a href="assignleave.html">Assign Leave</a></li>
                    <li><a href="leavelist.html">View Leave List</a></li>
                    
                </ul>
            </li>

         
         
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Employee List</h2>
    </div>
    
    
 

        
    
			
				<p>&nbsp;</p>
				
				
				<fieldset>
					<legend>Employee Information</legend>
					
					<form action="Employee.php" method="POST">
						     <p><label for="id">Employee Name:</label>
						<input name="id" id="id"  type="text"  placeholder = ""  /><br /></p>
					
					  
						
                   <!--  <p><label for="id">Id:</label>
						<input name="id" id="id"  type="text"  placeholder = ""   /><br /></p>	
						

						
			        <p><label for="User_type">Status:</label>
<select>
                       <option value="All">Freelance</option>
                       <option value="Supervisor">Full-Time-Contract</option>
					   <option value="Normal">Part-Time-Contract</option>
                       <option value="Admin">Part-Time-Internship</option>
                       
                       
</select>
				
				  <p><label for="id">Supervisor Name:</label>
						<input name="id" id="id"  type="text"  placeholder = ""  /><br /></p>
						
												
				        <p><label for="User_type">Job Title:</label>
<select>
                       <option value="All">CEO</option>
                       <option value="Supervisor">Account Clerk</option>
					   <option value="Normal">Finance Manager</option>
                       <option value="Admin">Hr Exececutive</option>
					     <option value="Admin">IT Exececutive</option>
						   <option value="Admin">Sales Exececutive</option>
						     <option value="Admin">Software Development Manager</option>
                       
                       
</select>	-->
						
						
				
					   
						<p><input name="Search" class="formbutton" value="Search" type="submit" />
							<input name="Reset" class="formbutton" value="Reset" type="Reset" /></p>
					</form>

					<legend>Add Employee:</legend>

					<form>
					
					<p><input name="Addemployee" class="formbutton" value="Add" type="submit" Window onclick="openWin()" />
							<input name="edelete" class="formbutton" value="Delete" type="Reset" /></p>
					
					</form>
				</fieldset>
				
             	<form>		
		<fieldset>
						        <div id="tableWrapper">
        <table class="table hover" id="resultTable">
            
                                <thead>
								<br/>
                <tr><th rowspan="1" style="width:20%"><span class="headerCell">Employee Name</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">ID</span></th>
<th rowspan="1" style="width:15%"><span class="headerCell">Job Title</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Employment Status</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">Supervisor Name</span></th>
<?php
if (isset($_GET['name']))
{
$letter = $_GET['name'];
$A = mysql_connect("localhost","root","") or die("Error in MYSQL Connection!");
  mysql_select_db("latestweb",$A) or die("Error in DataBase!");
$B = mysql_query("Select * from emp where Emp_fname like '%".$letter."%'",$A) or die("Error in Insert Query.");
$num_rows = mysql_num_rows($B);
if($num_rows == 1){
echo "<h2> $num_rows Employee </h2>";
}
else
echo "<h2> $num_rows Employees </h2>";
for($a=0; $a<$num_rows; $a++)
{
 $rec = mysql_fetch_array($B);
 echo "<tr> <td colspan'3'><input type='checkbox' id='ohrmList_chkSelectRecord_60' name='chkSelectRow[]' value='60'</td>";
   echo "<td> $rec[3]</td>" ; //User_id
	  echo "<td>$rec[0]</td>";//First Name
  echo "<td>$rec[5]</td>";//User_type
   echo "<td>$rec[6]</td>";//User_type
    echo "<td>$rec[7]</td>";//User_type
                       
 echo "</tr>";
}  
           </thead>

 <tbody>
 
 <tr>
 <td colspan="3">No Records Found</td>
 
 </tr>
 </tbody>
 </table><br/><br/>
                
                	</fieldset>
                </form>   
                
                
                
                
            
        
        
        
   
        
      
        </div>
                
        
        
                
                
            </ul> 
			
        </div>
    	<div class="clear"></div>
		
    </div>
</div>


 <div id="footer">
      <div class="footer-content">

              <div class="">
            <h4>About Orange HRM</h4>

            <p>
             Launched in 2005, Orange HRM is the most popular open source human resource management (HRM) software in the world.

Offering choice, flexibility and affordability, Orange HRM gives you three premier products:

OrangeHRM Open Source: Free, feature-rich, intuitive software offering a robust HRenvironment.
OrangeHRM Professional: Small- to medium-sized businesses use this comprehensiveHR platform to rapidly build and provide responsive HR services.
OrangeHRM Enterprise: Designed to supply seamless governance to multinational companies, Orange HRM Enterprise saves you time and money – wherever in the world your employees are located.</p>
        </div>
        
        
        
        
       
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

   <!-- A link to http://www.zypopwebtemplates.com must remain. To remove link see http://www.zypopwebtemplates.com/licensing -->
              <center> OrangeHRM 3.2.1<br>
© 2005 - 2015 <a href="http://www.orangehrm.com/" target="_blank">OrangeHRM, Inc</a>. All rights reserved.
 </center>   </div>  
</div>
</body>
</html>
