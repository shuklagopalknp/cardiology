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
                    <h1>FRanchise</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="franchise.php">franchise</a></li>
                       
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        <div class="space-section module">
                <div class="row">
                    
                    <div class="events-wrapper">
                        
                         <?php 
		$qry="SELECT * FROM `franchise`";
		$run=mysql_query($qry);
			  	  while($row=mysql_fetch_assoc($run)){
				  
				  $fr_name=$row['fr_name'];
				  $fr_contactperson=$row['fr_contactperson'];
				  $fr_number=$row['fr_number'];
				  $fr_address=$row['fr_address'];
				  $fr_City=$row['fr_City'];
		?>
        <div class="medium-6 small-12 columns">
                    	<div class="event">
                       
                    		<div class="medium-8 small-12 columns event-data">
                            
                            	<h4><a href=""><?php echo $fr_name?></a></h4>
                                <h5><?php echo $fr_contactperson?></h5>
                                <p><?php echo $fr_address?></p>
                                <p><strong>Contact Number:</strong><?php echo $fr_number?>
                                <br><strong></strong> <?php echo $fr_City?></p>
                                
                            </div><!-- Event DAta /-->
                              	
                        	<div class="clearfix"></div>
                        </div><!-- Event div ends /-->
                    </div><?php }?><!-- Event Column Ends /-->
                    
                    
                    </div><!-- Events Wrapper Ends /-->
                    
                </div><!-- Row Ends /-->
            </div>
        
<?php 
//welcome_msg();
?>
  <!-- Welcome Message -->
        
        <!-- Welcome Message Ends /-->
        
        
        
        <!-- Blog Posts Ends /-->
        <?php
		msg_blog();
		footer();
		?>

</html>