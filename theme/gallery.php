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
                    <h1>Our Gallery</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Gallery</a></li>
           
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
<?php 
//welcome_msg();
?>
  <!-- Welcome Message -->
        
        <!-- Welcome Message Ends /-->
        
        <div class="content-section gallery-page module">
        	
            <!-- Gallery Section -->
            <div class="gallery-wrapper module">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h2>Amazing Campus Life</h2>
                        <p>Some Amazing Stuff from our Campus</p>
                    </div>
                </div> <!-- Title Ends /-->
                
                <div class="gallery-container">
    
                   <?php 
				   
				   $q3="SELECT * FROM `gallery`";
				   
				   $run3=mysql_query($q3);
								
									while($row3=mysql_fetch_assoc($run3)){
									$image_title=$row3['image_title'];
									$image_name=$row3['image_name'];
									
				   
				   ?>
                    <a href="wpanel/Gallery/<?php echo $image_name?>" data-lightbox="campus-gallery" data-title="Great Life in our Campus. Some great moments of life.">
                        <img class="gallery-thumb" src="wpanel/Gallery/<?php echo $image_name?>" alt="<?php echo $image_title?>"/>
                    </a><?php }?>
                    
                    
                </div><!-- Gallery Container /-->
                
            </div>
            <!-- Gallery Section Ends /-->
            
            <!-- Icons Process -->
            <div class="icons-box-wrap">
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
            <!-- Icons Process Ends /-->
        </div>
        
        <!-- Blog Posts Ends /-->
        <?php
		msg_blog();
		footer();
		?>

</html>