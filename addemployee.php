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


<!--
sensa, a free CSS web template by ZyPOP (www.zypopwebtemplates.com)

Download: http://www.zypopwebtemplates.com

License: Creative Commons Attribution
//-->
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
						
            	
                	<li><a href="Employee.html">Employee List</a></li>
					
                   
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
		<h2>Add Employee</h2>
    </div>
    
    
 

        
    
			
				<p>&nbsp;</p>
				
				
				<fieldset>
					<legend>Add Employee</legend>
					
					<form action="input employee aded.php" method="POST">
					
                    <p><label for="id">Empolyee Id:</label>
						<input name="eid" id="eid"  type="text"  placeholder = "" required  /><br /></p>	
						
						<p><label for="id">User Id:</label>
						<input name="uid" id="uid"  type="text"  placeholder = "" required  /><br /></p>
						
						<p><label for="id">Department Id:</label>
						<input name="did" id="did"  type="text"  placeholder = "" required  /><br /></p>
						
												
		
						<p><label for="name">First Name:</label>
						<input name="fname" id="fname"  type="text" required /><br /></p>

                         <p><label for="name">Last Name:</label>
						<input name="lname" id="lname"  type="text" required /><br /></p>							
						
						<p><label for="Password">Salary</label>
						<input name="Salary" id="Salary" type="text" required /><br /></p>
						
                 
				                        <p><label for="User_type">Status:</label>
<select>
                       <option value="All">Freelance</option>
                       <option value="Supervisor">Full-Time-Contract</option>
					   <option value="Normal">Part-Time-Contract</option>
                       <option value="Admin">Part-Time-Internship</option>
                       
                       
</select>
				
				 <p><label for="id">Supervisor Name:</label>
						<input name="sname" id="sname"  type="text"  placeholder = "" required  /><br /></p>

<p><label for="id">Martial_status:</label>
						<input name="mstatus" id="mstatus"  type="text"  placeholder = "" required  /><br /></p>

<p><label for="id">D_O_B:</label>
						<input name="dob" id="dob"  type="date"  placeholder = "" required  /><br /></p>

 <p><label for="name">Nationality:</label>
						<input name="pname" id="pname"  type="text" required /><br /></p>

                        <p><b><label for="Gender">Gender:</label></b> <br/>
				<label for="Male">Male:</label>
						<input type="radio" name="Male"><br/> 
						
						<label for="Female">Female:</label>
						<input type="radio" name="Male"> 
					   
						<p><input name="submit" class="formbutton" value="SUBMIT" type="submit" /></p>
					</form>
				</fieldset>
                
                
                
                
                
            
        
        
        
        
        
        
       
                 </div>
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
