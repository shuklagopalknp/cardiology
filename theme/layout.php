<?php include('wpanel/dbconnect.php');?>
<?php 
if(isset($_POST['submit_reg'])){
	 $reg_search=$_POST['reg_search'];
	
	
	 echo "<script>window.location='verify_certificate.php?reg=$reg_search';</script>";
	 }
function head(){?>
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>VSD-ZONE</title>
    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    
    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    
    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />
    
    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    
    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
    
    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" media="all" />
    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    
    <!-- Google Fonts For Stylesheet --> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />
    
    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/navigation.css">

</head>
<body>
	<!-- Page Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
            	<div id="object"></div>
            </div>
        </div>
    </div>
    <!-- Page Preloader Ends /-->
    
	<!-- Main Container -->
    <div class="main-container">
    	
        <!-- Top Bar Starts -->
        <div class="topBar">
        	<div class="row">
            
            	<div class="large-6 medium-6 small-12 columns left-side">
                	<p><strong>Questions?</strong> <i class="fa fa-phone"></i> 812 758 3781</p>
                </div><!-- Left Column Ends /-->
            
            	<div class="large-6 medium-6 small-12 columns">
                    <ul class="menu text-right">
                        <li><i class="fa fa-envelope"></i> info@vsdzoneinfotech.com</li>
                        <li><i class="fa fa-clock-o"></i> Mond-Sat: 09:00 AM - 05:00 PM</li>
                        <li class="first-social social"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="social"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="social"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="social"><a href="#"><i class="fa fa-google"></i></a></li>
                    </ul>
                </div><!-- Right column Ends /-->
            
            </div><!-- Row ends /-->
        </div>
        <!-- Top bar Ends /-->

<?php } function main_header(){?>
 <!-- Header Starts -->
        <div class="header">
        	<div class="row">
            	
                <div class="medium-4 small-12 columns">
                	<div class="logo">
                    	<a href="index.php">
                        	<img src="images/logo.png" alt="Webful Education" />
                        </a>    
                    </div><!-- logo /-->
                </div><!-- left Ends /-->
                
                <div class="medium-8 small-12 columns nav-wrap">
                	<!-- navigation Code STarts here.. -->
                    <div class="top-bar">
                        <div class="top-bar-title">
                            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                <a data-toggle><span class="menu-icon dark float-left"></span></a>
                            </span>
                        </div>
                      
                        <nav id="responsive-menu">
                            <ul class="menu vertical medium-horizontal float-right" data-responsive-menu="accordion medium-dropdown">
                                <li class="single-sub parent-nav"><a href="index.php">Home</a>
                              
                                </li>
                                <li class="single-sub parent-nav"><a href="#">About Us</a>
                                
                                    <ul class="child-nav menu vertical">
						<?php 
                          $qry="SELECT * FROM `view` WHERE `menu_id`='1'";
                          $run=mysql_query($qry);
                          while($row=mysql_fetch_assoc($run)){
                              $view_id=$row['view_id'];
                              $view_name=$row['view_name'];
                          ?>
                            <li><a href="page.php?id=<?php echo $view_id?>"><?php echo $view_name?></a></li>
                            <?php }?>
                                                                             
                                    </ul>
                                </li>
                                <li class="single-sub parent-nav"><a href="courses.html">Courses</a>
                                            <ul class="child-nav menu vertical">
						<?php 
                          $qry="SELECT * FROM `view` WHERE `menu_id`='2'";
                          $run=mysql_query($qry);
                          while($row=mysql_fetch_assoc($run)){
                              $view_id=$row['view_id'];
                              $view_name=$row['view_name'];
                          ?>
                             <li><a href="courses.php?id=<?php echo $view_id?>"><?php echo $view_name?></a></li>
                            <?php }?>
                                </li>
                               </ul>
                                
                                 
                                 <li class="single-sub parent-nav"><a href="page.php?id=7">Admission</a></li>
                          
                            
                                <li class="single-sub parent-nav"><a href="franchise.php">Franchisee</a>
                                 
                                </li>
                                <li class="single-sub parent-nav">
                                	<a href="#">Gallery</a>
                                    <ul class="child-nav menu vertical">
                                    	<li><a href="gallery.php">Photograph</a></li>
                                        <li><a href="video.php">Video</a></li>                                        
                                    </ul>
                                   
                                </li>
                                <li><a href="contactUs.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div><!-- top-bar Ends -->
                   
                    
                </div><!-- right Ends /-->
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Header Ends /-->
<?php }

function slide(){?>

<div class="main-banner">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1">
	            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
                    <ul>	<!-- SLIDE  -->
                        <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/help/slide1.jpg"  alt="First Slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" />
                            <!-- LAYERS -->
    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-16-layer-3" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                data-height="full"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="s:300;s:300;" 
                                data-start="1000" 
                                data-basealign="slide" 
                                data-responsive_offset="on"> 
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-16-layer-1" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" 
                                 data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="['721','721','721','420']"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">Skills Development With Visual Techniques 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-16-layer-2" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-82','-82','-82','-58']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">ABOUT THE LIFE OF A STUDENT 
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" 
                                 id="slide-16-layer-4" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                     
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-responsive="off"><a href="#" class="button primary bordered-light">READ MORE</a> 
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0"  data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/help/slide2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-17-layer-3" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                data-height="full"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="s:300;s:300;" 
                                data-start="1000" 
                                data-basealign="slide" 
                                data-responsive_offset="on"> 
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-17-layer-1" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" 
                                            data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="['721','721','721','420']"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">Easy and Appropriate Way to Join the Community! 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-17-layer-2" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-82','-82','-82','-58']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">ABOUT THE LIFE OF A LEARNER 
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" 
                                 id="slide-17-layer-4" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                     
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-responsive="off"><a href="#" class="button primary bordered-light">READ MORE</a> 
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-saveperformance="off">
                            <!-- MAIN IMAGE -->
                            <img src="images/help/slide3.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper layer1 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-18-layer-3" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                            data-width="full"
                                data-height="full"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="s:300;s:300;" 
                                data-start="1000" 
                                data-basealign="slide" 
                                data-responsive_offset="on"> 
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title-Centered layer2 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-18-layer-1" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','1']" 
                                            data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="['721','721','721','420']"
                                data-height="none"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">Working at the Desk in a Modern Fashion 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle layer3 tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-18-layer-2" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['-82','-82','-82','-58']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                     
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="auto:auto;s:1000;" 
                                 data-mask_in="x:0px;y:0px;" 
                                 data-mask_out="x:0;y:0;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on">ABOUT THE LIFE OF A DESIGNER 
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption layer4 rs-parallaxlevel-0" 
                                 id="slide-18-layer-4" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','76']" 
                                            data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                     
                                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" 
                                data-transform_out="y:50px;opacity:0;s:1000;s:1000;" 
                                data-start="1000" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-responsive="off"><a href="#" class="button primary bordered-light">READ MORE</a> 
                            </div>
                        </li>

                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer"></div>	
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
<?php } function welcome_msg(){?>
 <!-- information boxes starts -->
        <div class="information-boxes module">
        
        	<div class="courses-info medium-6 small-12 columns">
            	<div class="">
                	<h3><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Student Certificate Verification</h3>
                  <img src="images/help/courses.jpg" style="max-width:32%;">
                    <div class="medium-6 small-12 columns">
                    
                                	<!--<label style="font-size:18px; color:#FFCC00; margin-top:12px;">
                                    	Registration Number
                                        <input type="text" id="reg_search" placeholder="Registration number here..."  style="margin-top:34px;"  value=""/>
                                    <script>
									var reg=document.getElementById("reg_search").value;
									</script>
                                    </label>
                                </div>
                    <div class="clearfix"></div>
                    <input type="button" class="primary button bordered-light" style="margin-top:31px;" onClick="myFunction_fetch()">Certificate Verify</a>
                    <script>
function myFunction_fetch() {
	document.write(var reg=document.getElementById("reg_search").value);
    window.location='courses.php?reg1=reg' ;
}
</script>-->
<form method="post">
<label style="font-size:18px; color:#FFCC00; margin-top:12px;">
                                    	Registration Number
                                        <input type="text" id="reg_search" name="reg_search" placeholder="Registration number here..."  style="margin-top:34px;"  value=""/>
                                   </label>
                                </div>
                    <div class="clearfix"></div>
                    <input type="submit" name="submit_reg" class="primary button bordered-light" style="margin-top:31px;"  value="Certificate Verify">
                    </form>
                </div>
            </div><!-- courses column Ends /-->
            
            <!-- faculty info ends /-->
            
            <div class="faculty-info medium-6 small-12 columns">
                <div class="">
					<h3><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Admission Proccess</h3>
                    <p>We are happy to tell you that we are accepting new addmissions for new batch so dont delay get enrolled asap ...</p>
                    <ul class="no-bullet">
                    	<li><i class="fa fa-check-square-o" aria-hidden="true"></i> Find a course best suits your skills</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Attent the seminar related to that course</li>
                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Helping Board in your learning management</li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="http://localhost:9999/vsdzone/theme/wpanel/" class="primary button bordered-light">Centre Login</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- information boxes ends /-->
        <?php } function msg_blog(){?>
         <!-- Call to Action box -->
        <div class="call-to-action">
           <div class="row">
                <div class="medium-10 small-12 columns">
                    <h2><i class="fa fa-phone" aria-hidden="true"></i> 	If you Have Any Questions Call Us On <span>(+91)- 08127583781</span></h2>
                </div>
                <!--<div class="medium-2 small-12 columns">
                    <a href="#" class="button secondary">Appointment</a>
                </div>-->
           </div><!-- row /-->
         </div>
        <!-- Call to Action End /-->
		<?php }function footer(){?>
        <div class="footer">
            <div class="footerTop">
            
                <div class="row">
                
                    <div class="large-4 medium-6 small-12 columns footer-widget">
                        <h2>The Zone Name...</h2>
                        <div class="tx-div"></div>
                        <p><div class="logo">
                    	<a href="index.html">
                        	<img src="images/footer.png" alt="Webful Education" />
                        </a>    
                    </div></p>
                    </div><!-- Widget 1 ends /-->
                    
                    <!-- Widget 2 Ends /-->
                    
                    <div class="large-4 medium-6 small-12 columns footer-widget">
                        <h2>Institute Hours</h2>
                        <div class="tx-div"></div>
                        <ul class="vertical office-hours">
                            <li>Monday: 09:00 AM - 05:00 PM </li>
                            <li>Tuseday: 09:00 AM - 05:00 PM</li>
                            <li>Wednesday: 09:00 AM- 05:00 PM</li>
                            <li>Thursday: 09:00 AM- 05:00 PM</li>
                            <li>Friday: 09:00 AM- 05:00 PM</li>
                            <li>Saturday, Sunday: No Admission/Enquiry</li>
                        </ul>
                    </div><!-- Widget 3 Ends /-->
                    
                    <div class="large-4 medium-6 small-12 columns footer-widget">
                    <div class="textwidget">
                        <ul class="address">
                            <li>
                                <i class="fa fa-home"></i>
                                <h4>Address:</h4>
                                <p>Deepu Chauhan Dhaba
Bhautipratappur,Kanpur Nagar-208020,UP (INDIA)</p>
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <h4>Phone:</h4>
                                <p>8127583781</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@vsdzoneinfotech.com</p>
                            </li>
                        </ul>
                        <hr>
                        <div class="socialicons">
                            Social: 
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                        </div><!-- Social Icons /-->
                    </div><!-- text widget /-->
                </div><!-- widget 4 /-->                
                    <div class="clearfix"></div>
                
                </div><!-- Row Ends /-->
            
            </div><!-- footerTop Ends here.. -->
        
            <div class="footerbottom">
            
                <div class="row">
                
                    <div class="medium-6 small-12 columns">
                        <div class="copyrightinfo">2018 &copy; <a href="#">VSD-ZONE </a> All Rights Reserved.</div>
                    </div><!-- left side /-->
                    <div class="medium-6 small-12 columns hide-for-small-only">
                        <div class="pull-right">
                            <ul class="menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="blog1.html">News</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div><!-- Right Side /-->
                
                </div><!-- Row /-->
            
            </div><!-- footer Bottom /-->
        </div>
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container /-->
	
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="js/foundation.min.js"></script>
    
    <!-- Including Owl Carousel File -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- Webful JS -->
    <script src="js/webful.js"></script>
    
    <!-- Including LightBox Plugin Delete if not using -->
    <script src="js/lightbox.min.js"></script>
    
    <!-- REVOLUTION JS FILES Delete if Not Using Revolution Slider -->
	<script type="text/javascript" src="lib/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
         The following part can be removed on Server for On Demand Loading) -->	
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="lib/revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>

		<?php }?>