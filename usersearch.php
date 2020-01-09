<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OrangeHRM</title>

<script>
function openWin() {
    window.open("adduser.html");
}
</script>

<link rel="stylesheet" href="styles.css" type="text/css" />


			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


</head>

<body>

 <?php 
    $role="";//copy paste for logout 
    if(isset($_COOKIE["user"]))
      $role= $_COOKIE["user"];
    else
      header("location:login.php");
  ?>

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
			
			 
			
			 <li><a class="has_submenu" href="usersearch.php">Admin</a>
            	<ul>
                	<li><a href="usersearch.php">User</a></li>
					
                   
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
		<h2>User Management</h2>
    </div>
    
 

    
			
				<p>&nbsp;</p>
				
				<form action="usersearch.php" method="GET">
				<fieldset>
					<legend>User</legend>
					
					
					
                  <!--  <p><label for="id">User ID:</label>
						<input name="id" id="id"  type="text"   /><br /></p> -->	
						
						<p><label for="name">User Name:</label>
						<input name="name" id="name"  type="text"  /><br /></p>	
						
					
						
                    <!--   <p><label for="User_type">User_type:</label>
<select>
                       <option value="All">All</option>
                       <option value="Supervisor">Supervisor</option>
                       <option value="Admin">Admin</option>
                       <option value="Normal">Normal</option>
                       
</select> -->
                        
						<p><input name="submit" class="formbutton" value="search" type="submit" />
						<a href="http://localhost/khwarihrm/sensa/usersearch.php"><input name="Reset" class="formbutton" value="Reset" type="button" /></a>
				
				</fieldset>
                	</form>
					
					<form>
					<fieldset>
		<br/>
					<p><input name="ADD"   class="formbutton" value=" ADD " type="submit" Window onclick="openWin()"/>
						<input name="DELETE" class="formbutton" value="DELETE" type="submit" Window" /></p>
						</fieldset>
				<form>		
		<fieldset>
						        <div id="tableWrapper">
        <table class="table hover" id="resultTable">
            
                                <thead>
								<br/>


<th rowspan="1" style="width:20%"><span class="headerCell">Select</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">User ID</span></th>
<th rowspan="1" style="width:15%"><span class="headerCell">User Name</span></th>
<th rowspan="1" style="width:20%"><span class="headerCell">User_type</span></th>
<?php
if (isset($_GET['name']))
{
$letter = $_GET['name'];
$A = mysql_connect("localhost","root","") or die("Error in MYSQL Connection!");
  mysql_select_db("latestweb",$A) or die("Error in DataBase!");
$B = mysql_query("Select * from user where User_name like '%".$letter."%'",$A) or die("Error in Insert Query.");
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
   echo "<td> $rec[0]</td>" ; //User_id
	  echo "<td>$rec[1]</td>";//First Name
  echo "<td>$rec[3]</td>";//User_type
                       
 echo "</tr>";
}  

// Check if delete button active, start this 

if(isset($_POST['DELETE']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM user WHERE User_name='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://localhost/khwarihrm/sensa/usersearch.php\">";
}
 }

  
  mysql_close($A); 
}
?>

</tr>            
 </thead>

 <tbody>
 
 <!-- <tr>
 <td colspan="3"><input type="checkbox" id="ohrmList_chkSelectRecord_60" name="chkSelectRow[]" value="60"></td>
 
 </tr> -->
 </tbody>
 </table><br/><br/>
                
                	</fieldset>
                </form>
				
                
            
        
        
        
        
        
        
       
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
