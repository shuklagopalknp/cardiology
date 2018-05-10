<?php

function head(){
?><!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
 <script src="ckeditor/ckeditor.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>


<script src="ajax.js"></script>
</head>
<body >
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">VsdZone Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $_SESSION["email"];?><i class="caret"></i></span><img src="images/wo.jpg" width="60" height="60"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="#"><i class="fa fa-user"></i>Edit Profile</a></li>
		                <li><a href="#"><i class="fa fa-envelope"></i>Inbox</a></li>
		                
		                <li><a href="logout.php"><i class="fa fa-clipboard"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
             
             
<?php
}
function sidebar(){
?>

<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                        <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">About Us</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="aboutus.php" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>About Us</a></li>
                            
                            <li><a href="mission.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>mission</a></li>
                            
                            <li><a href="vision.php" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Vision</a></li>
                            <li><a href="policy.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Our Quality policy</a></li>
                            
                            <li><a href="team.php" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Team</a></li>
                             

					   </ul>
                    </li>
                    
                    <ul class="nav nav-second-level">
                            
                            <li><a href="courses.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Courses</a></li>
                        </ul>
                        
                        <ul class="nav nav-second-level">
                            
                            <li><a href="admission_content.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Admission </a></li>
                        </ul>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="franchise.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Franchise</a></li>
                        </ul>
                    
                    
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li><a href="image.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Images</a></li>
                            <li><a href="videos.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Videos</a></li>
                      </ul>
                    </li>
                    
                    <ul class="nav nav-second-level">
                            
                            <li><a href="contactus.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Contact Us</a></li>
                        </ul>
                        
                        <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Student Registration</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li><a href="admission.php" class="hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Registration</a></li>
                            
                            <li><a href="view_student.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>View Students</a></li>
                            
                           
                             

					   </ul>
                    </li>                        
                        
                        <ul class="nav nav-second-level">
                            
                            <li><a href="certificate.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>upload Certificate</a></li>
                        </ul>
                        
                        <ul class="nav nav-second-level">
                            
                            <li><a href="news.php" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>News</a></li>
                        </ul>
                   
                   
                        
                        
                    
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	
 	 <!--faq-->
 	<div class="blank">
	

<?php
}
function footer(){
?>


			
	       </div>
	
	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; 2018 VSDZONE INFOTECH. All Rights Reserved | Design by <a href="http:www.onistech.com" target="_blank">Onistech Info Systems</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

<?php
}
?>