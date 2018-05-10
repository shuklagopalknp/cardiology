<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

if(isset($_POST['submit'])){
	
$fr_name=$_POST['fr_name'];
$fr_contactperson=$_POST['fr_contactperson'];
$fr_number=$_POST['fr_number'];
$fr_address=$_POST['fr_address'];
$fr_City=$_POST['fr_City'];

 $q="INSERT INTO `franchise`(`fr_name`, `fr_contactperson`, `fr_number`, `fr_address`,`fr_City`) VALUES ('".$fr_name."','".$fr_contactperson."','".$fr_number."','".$fr_address."','".$fr_City."')";

mysql_query($q);
}
if(isset($_POST['update'])){
	
$fr_name=$_POST['fr_name'];
$fr_contactperson=$_POST['fr_contactperson'];
$fr_number=$_POST['fr_number'];
$fr_address=$_POST['fr_address'];
$fr_City=$_POST['fr_City'];

 $q2="UPDATE `franchise` SET `fr_name`='".$fr_name."',`fr_contactperson`='".$fr_contactperson."',`fr_number`='".$fr_number."',`fr_address`='".$fr_address."',`fr_City`='".$fr_City."' WHERE id='".$_GET["franchise_id"]."'";

mysql_query($q2);
}
?>
<title>VSDZone Franchise </title>


<?php if(isset($_GET["franchise_id"])){
	$q3="SELECT * FROM `franchise` where id='".$_GET["franchise_id"]."'";
								$run3=mysql_query($q3);
								
									$row3=mysql_fetch_assoc($run3);
									$fr_name=$row3['fr_name'];
									$fr_contactperson=$row3['fr_contactperson'];
									$fr_number=$row3['fr_number'];
									$fr_address=$row3['fr_address'];
									$fr_City=$row3['fr_City'];
									
?>
<form method="post">
<div class="col-md-6 form-group1">
              <label class="control-label">Franchise Name:</label>
              <input type="text" placeholder="Franchise Name" name="fr_name" value="<?php echo $fr_name?>">
            </div>
            <div class="clearfix"> </div>
<div class="col-md-6 form-group1">
              <label class="control-label">Contact Person:</label>
              <input type="text" placeholder="Contact Person" name="fr_contactperson"  value="<?php echo $fr_contactperson?>">
            </div>
<div class="col-md-6 form-group1">
              <label class="control-label">Contact Number:</label>
              <input type="text" placeholder="Contact Number" name="fr_number"  value="<?php echo $fr_number?>">
            </div>
<div class="col-md-12 form-group1 ">
              <label class="control-label">Address:</label>
              <textarea  placeholder="Address" name="fr_address"  ><?php echo $fr_address?></textarea>
            </div>
<div class="col-md-12 form-group1 ">
              <label class="control-label">City:</label>
              <input type="text" placeholder="Enter City" name="fr_City"  value="<?php echo $fr_City?>">
              
            </div>
         
<div class="col-md-12 form-group">
              </br><button type="submit" name="update" class="btn btn-primary">Submit</button>
              
            </div>
            <div class="clearfix"> </div>
</form><?php } else{?>
<form method="post">
<div class="col-md-6 form-group1">
              <label class="control-label">Franchise Name:</label>
              <input type="text" placeholder="Franchise Name" name="fr_name" required>
            </div>
            <div class="clearfix"> </div>
<div class="col-md-6 form-group1">
              <label class="control-label">Contact Person:</label>
              <input type="text" placeholder="Contact Person" name="fr_contactperson"  required>
            </div>
<div class="col-md-6 form-group1">
              <label class="control-label">Contact Number:</label>
              <input type="text" placeholder="Contact Number" name="fr_number"  required>
            </div>
<div class="col-md-12 form-group1 ">
              <label class="control-label">Address:</label>
              <textarea  placeholder="Address" name="fr_address"  required></textarea>
            </div>
<div class="col-md-12 form-group1 ">
              <label class="control-label">City:</label>
              <input type="text" placeholder="Enter City" name="fr_City"  required>
              
            </div>
         
<div class="col-md-12 form-group">
              </br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
              
            </div>
            <div class="clearfix"> </div>
</form>
<?php }?></div>
<div class="grid_3 grid_5">
    <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="200">Franchise Name</th>
                                   <th width="200"> Number</th>
                                    <th width="100"> City</th>
                                    
                                    <th width="200">Contact Person</th>
                                    <th width="400">Address</th>
									<th width="45">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
            <?php 
		$q1="SELECT * FROM `franchise`";
		$run=mysql_query($q1);
		while($row=mysql_fetch_assoc($run)){
	   
	   $id=$row['id'];
	   $fr_name=$row['fr_name'];
	   $fr_contactperson=$row['fr_contactperson'];
	   $fr_number=$row['fr_number'];
	   $fr_address=$row['fr_address'];
	   $fr_City=$row['fr_City'];
		
		
		?>
        

							
                                <tr>
                                
                                
             					<td><?php echo $fr_name; ?></td>
                                <td><?php echo $fr_number;?></td>
                                <td><?php echo $fr_City; ?></td>
                                <td><?php echo $fr_contactperson; ?></td>
                                <td><?php echo $fr_address; ?></td>
                                 <td><a href="franchise.php?franchise_id=<?php echo $id; ?>" >
											<i class="fa fa-edit fa-2x"></i>
										</a>		
									</td>
									<td>
										<a href="franchise_delete.php?franchise_id=<?php echo $id; ?>" >
											<i class="fa fa-trash-o fa-2x"></i>
										</a>
									</td>
                                </tr>
                              <?php } ?>  
                            </tbody>
                        </table>
    


</div>
<?php

footer();

}else {
	header('location:signin.php');
}
?>