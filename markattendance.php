<?php
	$conn = mysql_connect('localhost', 'root' );
	$db_selected = mysql_select_db('project', $conn);
	if (!$db_selected) {
    	die ('Can\'t use foo : ' . mysql_error());
	}
    if(isset($_POST['submit'])){

$id= $_POST['id'];
$name= $_POST['name'];
$date= $_POST['date'];
$time= $_POST['time'];
$status= $_POST['status'];
mysql_query("insert into mark_attendance(Emp_id,Emp_name,Date,Time,Status) value('$id','$name','$date','$time','$status')");
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
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="home.html">Home</a></li>
            <li><a class="has_submenu">Attendance</a>
            	<ul>
                <li class="selected"><a href="markattendance.html">Insert Attendance</a></li>
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
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Attendance Configuration</h2>
    </div>
    
    
   

        
    
			
				<p>&nbsp;</p>
				
				<h3>Attendance Form</h3>
				<fieldset>
					<legend>Attendance Marker For an Employee</legend>
					<form action="#" method="POST">
                        <p><label for="name">Employee ID:</label>
						
                        <input name="id" id="id" value="" type="text" /><br /></p>
                        
                        <p><label for="name">Employee Name:</label>
						
                        <input name="name" id="name" value="" type="text" /><br /></p>		
                        
                        <p><label for="date">Date:</label>
						
                        <input name="date" id="date" value="" type="date"  /><br /></p>
                        
                        <p><label for="time">Time:</label>
						<input name="time" id="time" value="" type="time" /><br /></p>
                        
                        <p><label for="status">Status:</label>
						
                        <input type="radio" name="status" value="Enable" id="status">Enable
					    <input type="radio" name="status" value="Disable" id="status">Disable<br/></p>
                      
						<p><input name="submit" value="SUBMIT" type="submit" /></p>
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
