<?php include('layout.php');?>
<!doctype html>
<html lang="en">
<?php 
head();
main_header();?>
 
<!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Contact Us</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                       
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
<?php 
//welcome_msg();
?>
  <!-- Welcome Message -->
        <div class="content-section module">
        	<div class="row">
            	
                <!-- Map Area -->
                <div class="map-wrapper module">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12521.015318327185!2d80.19751941071983!3d26.4573181211033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c49fb14d1ed79%3A0xc36a20d1c0025406!2sDeepu+Chauhan+Dhaba!5e0!3m2!1sen!2sin!4v1518851164834" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- Map Ends /-->
                
                <!-- Contact content area -->
                <div class="content-wrapper">
                
                	<div class="medium-3 small-12 columns">
                    	<div class="contact-info">
                        	<img src="images/help/callgirl.png" alt="Calling Girl" />
                        </div>
                        <div class="contact-info">
                        	<h4>VSD-ZONE</h4>
                            <p>Deepu Chauhan Dhaba
Bhautipratappur, Uttar Pradesh 208020</p>
                        </div>
                        <div class="contact-info">
                        	<h4>Get in Touch</h4>
                            <p><strong>Office: </strong>8127583781<br>
                            	<strong>Fax: </strong>8127583782<br>
                                <strong>Toll Free: </strong>18000812758<br>
                            </p>
                        </div>
                        <div class="contact-info">
                        	<h4>Follow Us</h4>
	                         <div class="socialicons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
	                        </div><!-- Social Icons /-->
                        </div>
                    </div><!-- Left column Ends /-->
                	<?php 
					if(isset($_POST['submit'])){
					
					$name=$_POST["name"];
					$mobile=$_POST["mobile"];
					$email=$_POST["email"];
					$subject=$_POST["subject"];
					$course=$_POST["course"];
					$City=$_POST["City"];
					$message=$_POST["message"];
					
					$q="INSERT INTO `contact_us`(`name`, `City`, `mobile`, `email`, `subject`, `course`, `message`, `time`) VALUES ('".$name."','".$City."','".$mobile."','".$email."','".$subject."','".$course."','".$message."',now())";

if(mysql_query($q)){
	echo "<h2>Thank you for contacting us.</h2>
<p>You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your Enquiry.</p>
 ";
}else{
      echo "<p>We are not able to process Your Request.You are very important to us, You can try again or contact Our Team by dialing given numbers. thanks.</p>";
}

					}
						?>
                    <div class="medium-9 small-12 columns">
                    	<h2>Please fill the form below to contact us</h2>
                        <div class="contact-form">

                        	<div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<form method="post"><label>
                                    	Your name*
                                        <input type="text" name="name" placeholder="Your name here..." required/>
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Contact Number
                                        <input type="text" name="mobile" placeholder="Your Contact Number..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Email Address
                                        <input type="text" name="email" placeholder="Enter your Email ..." />
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Subject
                                        <input type="text" name="subject" placeholder="Reason contacting us ..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Course Interested
                                        <select name="course">
                                        	<option >Chose Course</option>
                                            <?php
                                            $qr="SELECT * FROM `view` WHERE `menu_id`=2";
											$run=mysql_query($qr);
											while($row=mysql_fetch_array($run)){
											$view_name=$row['view_name'];
											?>
                                            <option value="<?php echo $view_name?>"><?php echo $view_name;}?></option>
                                            <option value="other">Other</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	City
                                        <input type="text" name="City" placeholder="Your Current City ..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-12 small-12 columns">
                                	<label>
                                    	Your Enquiry 
                                        <textarea rows="10" name="message" placeholder="Your message ..."></textarea>
                                    </label>    
                                	<input type="submit" name="submit" class="button primary" value="Send your message" />
                                    </form>
                                </div>
                            </div><!-- Row Ends /-->

                        </div><!-- Contact form /-->
                    </div><!-- Right Column Ends /-->
                    <div class="clearfix"></div>
                </div>
                <!-- Contact Content Area /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Welcome Message Ends /-->
        
        <div class="icons-box-wrap module">
                <div class="row">
            
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Why Study With Us?</strong><br>
                                From Last 30 years we are in industy and have honor. <br>
                                123-123-1234
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Special Techniques</strong><br>
                                We are providing special visual teaching techniques to help you grow faster.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Qualified Staff</strong><br>
                                Our Qualified best teachers from industry give you best professional Knowledge.
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
                    
                    <div class="medium-3 small-12 columns">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p><strong>Get Admission</strong><br>
                                Rush before all seats are reserved for current batch. <br>
                                123-123-1234
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- icon-box ends /-->
            
                
                </div><!-- Row /-->
            </div>
        
        <!-- Blog Posts Ends /-->
        <?php
		msg_blog();
		footer();
		?>

</html>