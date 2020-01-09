
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OrangeHRM</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


</head>

<body class="homepage">
	
<div id="container">
	<div id="header">
    	<h1><a href="#" style=color:orange >Orange<font color="#090">HRM</a></h1>
	
        <div class="clear"></div>
		<div style=color:#090>Human Resource Management</div>
		
		

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
<li><a href="summary.php">Summary</a></li>	 
<li><a href="logout.php">Logout</a></li>	
        </ul>
    </div>
    
    <div id="slides-container">
        <div id="slides">
            <div>
                <div class="slide-image"><img src="images/report.jpg" alt="Slide #1 image" /></div>
                <div class="slide-text">
                    
            
                </div>
            </div>
            
            <div>
			<div class="slide-image"><img src="images/automate.jpg" alt="Slide #1 image" /></div>
            	</div>
            
            <div>
                <div class="slide-image slide-image-right"><img src="images/hrmsbanner4.jpg" alt="Slide #3 image" /></div>
                <div class="slide-text">
                    
            
                </div>
            </div>
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
    </div>
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <strong>Home</strong>
        </div>
            
		<div id="content">
            <div class="box">
                <h2>Introduction To HR</h2>
					
            <p>Human Resource Management (usually referred to as HR) involves everything related to the employer-employee relationship and is about supporting and managing the organisation’s people and associated processes. It’s seen as a core business function essential to the organisation’s effective operation. 

Most larger organisations in the public and private sector have their own designated HR department, opening up a broad range of companies and sectors to applicants. Recent years have seen increasing numbers of companies outsource key elements of their HR functions. So, opportunities within HR consultancies also exist.

HR is a very popular and highly competitive career with graduate schemes being among the most oversubscribed. Your level of HR focus will vary from scheme to scheme, with some being based purely within the HR department and others expanding candidate's experience to other functions such as marketing, management and more.

HR has great scope for specialism and development within a particular HR function (e.g. development, equality and diversity, recruitment and selection, etc.) and with specialism comes extra responsibility and remuneration.</p>	
            
            <p>HR Job Roles

</p>


            <ul class="styledlist">
                <li>employee relations</li>
                <li>job analysis</li>
                <li>graduate recruitment</li>
                <li>development</li>
            </ul>
    
            <h3>Internships</h3>



            <p>There are few internships specifically within HR, although some are listed below you would also be advised to carry out your own research into others or gain work experience (see below): 

Airbus - internships are available in the UK, France, Germany and Spain for undergraduates, however they are for 6-12 months
Barclays - within their further opportunities it is possible to have an internship within their client relationships teams or their centres for excellence
British Airways - offer various internship opportunities, with an HR specific programme 
Cancer Research - 12 week projects are available three times a year, including in Summer
GSK - undergraduate opportunities are available in HR, allowing you to experience the main functions of their HR department
Lloyds Banking Group - penultimate year students can experience a 10 week internship in HR
Rolls Royce - with opportunities in Asia, UK, US and Norway, 10-12 week internships are available within their HR function
Santander - a summer internship with Santander in their HR team for penultimate year students
Unilever - for penultimate year students with 300 UCAS points for 12 weeks during the Summer</a></p>

<h3>Qualifications and skills</h3>

<p>Taking a relevant HR qualification gives a good theoretical and practical knowledge of HR and demonstrates your commitment. It is not essential for graduate schemes but can be very useful if you are applying outside them. Many organisations require you to have, or be working towards, a CIPD accredited HR postgraduate qualification for their entry level posts.</p>
            <ul class="styledlist">
                <li>business awareness</li>
                <li>team working</li>
                <li>leadership</li>
                <li>the ability to make and justify fair decisions</li>
            </ul> 
		   </div>
        </div>
        
        
                <li>
                    <h4><span>About OrangeHRM</span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">Launched in 2015, Orange HRM is the most popular open source human resource management (HRM) software in the world.

Offering choice, flexibility and affordability, Orange HRM gives you three premier products:

OrangeHRM Open Source: Free, feature-rich, intuitive software offering a robust HRenvironment.
OrangeHRM Professional: Small- to medium-sized businesses use this comprehensiveHR platform to rapidly build and provide responsive HR services.
OrangeHRM Enterprise: Designed to supply seamless governance to multinational companies, Orange HRM Enterprise saves you time and money – wherever in the world your employees are located.</p>
                        </li>
                    </ul>
                </li>
                
               
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
      <div class="footer-content">

        <div class="footer-box">
            <h4>About our site</h4>

            <p>
            When you need a superb, scalable HR solution, join the millions of users worldwide who use Orange HRM products. Learn about our solutions and demo our products. Contact our friendly, professional services team with your questions. For high-quality HR support, look to OrangeHRM.    
            </p>
        </div>
        
        <div class="footer-box">
            <h4>Contact Us</h4>

            <ul>
              <li><a href="#">03152177779</a></li>
              <li><a href="#">03154256789</a></li>
              <li><a href="#">+92137890765</a></li>
              <li><a href="#">021767788767</a></li>
              <li><a href="#">+92137890668</a></li>

            </ul>
        </div>
        
        <div class="footer-box">

            <h4>Network sites</h4>
            <ul>
            <li><a href="http://zypopwebtemplates.com">OrangeHRM</a></li>
						<li><a href="http://www.orangehrm.com/" >orangeHrm</a></li>
						
						<li><a href="" title="mybb themes"></a></li>
						<li><a href="" ></a></li>
            </ul>	
        </div>
        
        <div class="footer-box end-footer-box">
            <h4>Search our site</h4>

            <form action="#" method="get">
                <p>
                    <input type="text" id="searchquery" size="18" name="searchterm" />

                    <input type="submit" id="searchbutton" value="Search" class="formbutton" />
                </p>
            </form>
        </div>     
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

   
            <p>&copy; YourSite 2015. <a href="http://www.orangehrm.com/">OrangeHRM</a></p>
    </div>  
</div>
</body>
</html>

        <div class="clear"></div> 
    </div>
    <div id="footer-links">

   
            <p>&copy; YourSite 2015. <a href="http://www.orangehrm.com/">OrangeHRM</a></p>
    </div>  
</div>
</body>
</html>
