<?php include('layout.php');?>
<!doctype html>
<html lang="en">
<?php 
head();
main_header();
slide();
welcome_msg();
?>
  <!-- Welcome Message -->
        <div class="welcome-message module">
        	<div class="row">
             <?php 
			
				$qry="SELECT * FROM `view` WHERE `view_id`='1'";
			
			      $run=mysql_query($qry);
			  	  $row=mysql_fetch_assoc($run);
				  $view_id=$row['view_id']; 
				  $view_name=$row['view_name'];
				  $view_description=$row['view_description'];
				   $view_image=$row['view_image'];
			?>
            	<div class="medium-6 small-12 columns">
                <img src="wpanel/viewpic/<?php echo $view_image;?>" width="600" height="300" alt=""/>
                </div><!-- Left Column /-->
            	
                <div class="medium-6 small-12 columns">
                	<h2>Welcome to <span>VSD-ZONE!</span></h2>
                    <h3>We are eager to give you best Education and style.</h3>
                    <p><?php echo $view_description; ?></p>
                    <a href="#" class="primary bordered-dark button">Meet Our Teachers!</a>
                </div><!-- Right Column /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Welcome Message Ends /-->
       
        
        <!-- Process/Testimonials -->
        <div class="seminar-events content-area module">
        	<img src="images/help/businesswoman.png" class="upper-background" alt="Business Women" />
        	<div class="row">
            
			    <div class="our-process-wrapper">
                    
                    <div class="medium-8 medium-offset-3 small-12 columns our-process">
                    	<h2>Its Easy, Its Brilliant, It Works!</h2>
                        
                        <div class="process">
                        	<div class="number">1</div>
                            <div class="right-info">
                            	<h3>Select a Course you like and Explore it!</h3>
                                <p>Once upon a time there was a thirsty crow he flew here and there in search of water.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->
                        
                        <div class="process">
                        	<div class="number">2</div>
                            <div class="right-info">
                            	<h3>Join a Seminar To know More about it!</h3>
                                <p>But he could not find water anywhere at last he reached in a garden where he saw a pitcher.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->
                        
                        <div class="process">
                        	<div class="number">3</div>
                            <div class="right-info">
                            	<h3>Get Enrolled and start better future with us!</h3>
                                <p>Thirsty Crow should Call us at: 123-123-1234 to drink water asap before all seats are reserved.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- process /-->
                    </div><!-- Left Process Ends /-->
                    
<!--                    <div class="medium-4 small-12 columns our-testimonials"></div> Our Testimonials Ends /-->
                
                </div><!-- Events Wrapper Ends /-->
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Seminar Events Ends /-->
        <!-- Blog Posts -->
        <div class="blog-posts module grey-bg">
        	<div class="section-title-wrapper">
                <div class="section-title">
                    <h2>Recent News</h2>
                    <p>What's about VSD-ZONE?</p>
                </div>
            </div> <!-- Title Ends /-->
            
        	<div class="row">
            	
                <div class="posts-wrapper">
                <?php 
						$qry1="SELECT * FROM `news` ORDER BY `news`.`news_id` DESC";
						$run1=mysql_query($qry1);
			  	  		while($row1=mysql_fetch_assoc($run1)){
				  		$news_id=$row1['news_id'];
						$title1=$row1['title1'];
				  		$news_pic=$row1['news_pic'];
						$description1=$row1['description1'];
				   		$update_time=$row1['update_time'];
						
									$date=date('d-m-Y H-m-s A',strtotime($update_time));
						?>	
                    <div class="medium-4 small-12 columns">
                        <div class="post">
                            <div class="post-thumb">
                            	<a href="#">
	                            	<img src="wpanel/news/<?php echo $news_pic;?>" alt="My Blog post" />
                                </a>    
                            </div><!-- Thumb /-->
                            <div class="post-content">
                            	<h4><a href="#"><?php echo $title1; ?></a></h4>
                                <div class="post-meta"><strong>Date:</strong> <?php echo $date; ?></div>
                                <p><?php echo $description1; ?><a href="news.php?id=<?php echo $news_id?>">Read More &raquo;</a></p>
                            </div><!-- post content /-->
                        </div><!-- Post /-->
                	</div><!-- Post column /-->
                    <?php }?>
                    <!-- Post column /-->
                    
                    <!-- Post column /-->
                    
                </div><!-- Posts Wrapper /-->
                
            
            </div><!-- Row Ends /-->
        
        </div>
        <!-- Blog Posts Ends /-->
        <?php
		msg_blog();
		footer();
		?>

</html>