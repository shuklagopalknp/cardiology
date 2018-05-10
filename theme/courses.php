<?php include('layout.php');?>
<!doctype html>
<html lang="en">
<?php 
head();
main_header();?>
 <?php 
		$view_id=$_GET["id"];	
				$qry="SELECT * FROM `view` WHERE `view_id`='".$view_id."'";
			
			      $run=mysql_query($qry);
			  	  $row=mysql_fetch_assoc($run);
				  
				  $view_name=$row['view_name'];
				  $view_description=$row['view_description'];
				   $view_image=$row['view_image'];
			?>
<!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1><?php echo $view_name; ?></h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#"><?php echo $view_name;?></a></li>
                       
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
<?php 
//welcome_msg();
?>
  <!-- Welcome Message -->
        <div class="welcome-message module">
        	<div class="row">
            <?php if($view_id!=5){?>
            	<div class="medium-6 small-12 columns">
                <img src="wpanel/viewpic/<?php echo $view_image;?>" width="600" height="300" alt=""/>
                </div><!-- Left Column /-->
            	
                <div class="medium-6 small-12 columns">
                <?php if($view_id==1){?>
                	<h2>Welcome to <span>VSDZONE INFOTECH !</span></h2>
                    <h3>We are eager to give you best Education and style.</h3>
                         <?php }else{?>
                         <h2>Page : <span><?php echo $view_name; ?></span></h2>
                         <?php } ?>
                    <p><?php echo $view_description; ?></p>
             <?php }else{?>
             <h2>Page : <span><?php echo $view_name; ?></span></h2>
               <p><?php echo $view_description; ?></p>
             <?php }?>
                </div><!-- Right Column /-->
              
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