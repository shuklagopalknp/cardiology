<?php include('layout.php');?>
<!doctype html>
<html lang="en">
<?php 
head();
main_header();


$reg=$_GET['reg'];

$qry="SELECT * FROM `certificate` WHERE `reg_number`='".$reg."'";

				  $run=mysql_query($qry);
			  	  if($row=mysql_fetch_assoc($run)){
				  $reg_number=$row['reg_number']; 
				  $course=$row['course'];
				  $certificate=$row['certificate'];
?>
 <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Certificate Verification</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Certificate Verification</a></li>
                        <li><span class="show-for-sr">Current: </span> <?php echo $reg_number?></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        
        <div class="medium-8 small-12 columns">
                <h2><?php echo $reg_number?></h2>
                <h4><?php echo $course?></h4>
                
                     </div>
                     
                     <div class="clearfix"></div>
                     
                     <embed src="wpanel/certificates/<?php echo $certificate?>" alt="<?php echo $certificate?>" />
                    
                   
                                                               
                    <!-- staff links ends /-->                 	 
				
                
                
                <!-- expertise ends /-->
                
            </div>
  <?php }else{?>
        
        
        <div class="medium-8 small-12 columns">
                <h2>Wrong Credentials</h2>
                <h4>THe Registration number you have entered is not correct</h4>
                <p>You can contact the VSD-Zone team for any doubts or you can try again later</p>
                
                
                <!-- expertise ends /-->
                
            </div>
 
        <?php
  }
		msg_blog();
		footer();
		?>

</html>