<?php
	$conn = mysql_connect('localhost', 'root' );
	$db_selected = mysql_select_db('project', $conn);
	if (!$db_selected) {
    	die ('Can\'t use foo : ' . mysql_error());
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sensa - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="sensa/styles.css" type="text/css" />
<script type="text/javascript">
	function set(){
		var e = document.getElementById('combo');
		var val= e.options[e.selectedIndex].text;

		document.getElementById('id').value=val;

	}
</script>			
            
<script type="text/javascript" src="sensa/js/jquery.js"></script>
<script type="text/javascript" src="sensa/js/slider.js"></script>
<script type="text/javascript" src="sensa/js/superfish.js"></script>

<script type="text/javascript" src="sensa/js/custom.js"></script>


<!--
sensa, a free CSS web template by ZyPOP (www.zypopwebtemplates.com)

Download: http://www.zypopwebtemplates.com

License: Creative Commons Attribution
//-->
</head>

<body class="noheader">
<div id="container">
	<div id="header">
    	<h1><a href="/">Orange HRM</a></h1>
        
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="sensa/home.html">Home</a></li>
            <li><a class="has_submenu">Attendance</a>
            	<ul>
                <li><a href="sensa/markattendance.html">Insert Attendance</a></li>
                <li class="selected"><a href="sensa/viewattendance.html">View Attendance Records</a></li>
                <li><a href="sensa/updateattendance.html">Update Attendance</a></li>
                   
                </ul>
            </li>
            <li><a class="has_submenu">Leave</a>
            	<ul>
                <li><a href="sensa/assignleave.html">Assign Leave</a></li>
                <li><a href="sensa/leavelist.html">View Leave List</a></li>
                    
                </ul>
            </li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
        
    <div id="body">
      <div id="breadcrumbs">
            <span>You are here:</span>
            <a href="sensa/home.html">Home</a> &raquo;
            <a href="sensa/attendance.html">Attendance</a> &raquo;
            <strong>View Attendance Records</strong>
        </div>
            
		
        
        
           <div id="sub-header">
		<h2>View Attendance</h2>

    </div>

        
    
			
				<p>&nbsp;</p>
				
				<h3>Records</h3>
				<fieldset>
					<legend>View Attendance Record</legend>
                    <form action="viewattendance.php" method="POST">
					
                    <p><label for="name">Employee ID:</label>
                    <select name="select" id="combo" onchange="set()">
					<?php
                    $sql = "SELECT Emp_id FROM mark_attendance" ;
					$result = mysql_query($sql);
	                while($row = mysql_fetch_array($result,MYSQL_NUM))
					{
                    ?>    
					<option name="id" value=""><?php echo $row['0'];?></option>
                    <?php
                    }
                    ?>
					</select> 	
                        <p><label for="date">Date:</label>
					
						<input name="date" id="date" placeholder="dd/mm/yyyy" type="date" class="calendar"  /><br /></p>          
						<input type="hidden" id="id" name="id" value=""/>              
						<input name="view" class="formbutton" value="VIEW" type="submit" /><br /><br/>
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
<th rowspan="1" style="width:20%"><span class="headerCell">Date</span></th>
<th rowspan="1" style="width:15%"><span class="headerCell">Time</span></th>
<th rowspan="1" style="width:5%"><span class="headerCell">Status</span></th>

                            </tr>            
                          </thead>


 <tbody>

<?php
if($_POST!="")
	$query=" select * from mark_attendance where Emp_id='".$_POST['id']."'";
else
	$query=" select * from mark_attendance where Emp_id='0'";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{

echo "<tr>";
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
