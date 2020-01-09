
<?php
    $conn = mysql_connect('localhost', 'root' );
    $db_selected = mysql_select_db('project', $conn);
    if (!$db_selected) {
        die ('Can\'t use foo : ' . mysql_error());
    }
    if(isset($_POST['submit'])){

$id= $_POST['Emp_id'];
}
  //  if(isset($_POST['submit']))
$res = mysql_query("select Status from mark_attendance where Status  = 'Present'");
$num_rows  = mysql_num_rows($res);
//$status= $_POST['status'];
//$sql = mysql_query("select count(Status) from mark_attendance where Status = '$status");
//$r = mysql_query($sql);
//

?>
            

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><style>
progress[value] {
  /* Reset the default appearance */
  -webkit-appearance: none;
   appearance: none;

  width: 250px;
  height: 25px;
  
}
#p{

}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sensa - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			

function set(){
        var e = document.getElementById('combo');
        var val= e.options[e.selectedIndex].text;

        document.getElementById('id').value=val;

    }
 
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

<body class="noheader">
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
                <li><a href="markattendance.html">Insert Attendance</a></li>
                <li><a href="viewattendance.html">View Attendance Records</a></li>
                <li class="selected"><a href="updateattendance.html">Update Attendance</a></li>
                   
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
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <a href="home.html">Home</a> &raquo;
            <a href="attendance.html">Attendance</a> &raquo;
            <strong>View Attendance Records</strong>
        </div>
            
		
        
        
           <div id="sub-header">
		<h2>Summary</h2>

    </div>

        
    
			
				<p>&nbsp;</p>
				
				
				<fieldset>
					
					<form action="summary.php" method="POST">
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
                    </select><p>
                        
                        
									<br><br>
						<progress value= "<?php echo $num_rows ?>"  max="100" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%" display="inline-block" height = "2em" width= "3em" >
						
</progress>&nbsp&nbsp&nbsp <label><b><font size  = "5"><?php echo $num_rows ?>%</font></b></label><br><br>

					</form>
				</fieldset>
                
                
                
    
                
                
                
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

