<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

if(isset($_POST['submit'])){
	 $reg=$_POST['reg_number'];
	 $course=$_POST['course'];
	
	 echo "<script>window.location='upload_certificate.php?reg=$reg&course=$course';</script>";
}
?>
<title>VSDZone certificate Uploads </title>

<form method="post" >
<div class="col-md-6 form-group1">
			  <label class="control-label">Registration Number:</label>
              <label class="control-label"></label>
              <input type="text" placeholder="Student's Registration number" name="reg_number" required>
            </div>
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Course:</label>
              <select name="course">
                                        	<option >Chose Course</option>
                                            <?php
                                            $qr="SELECT * FROM `view` WHERE `menu_id`=2";
											$run=mysql_query($qr);
											while($row=mysql_fetch_array($run)){
											$view_name=$row['view_name'];
											?>
                                            <option value="<?php echo $view_name?>"><?php echo $view_name;}?></option>
                                          
                                        </select>
            </select>
            </div>
            <div class="clearfix"> </div>
<div class="col-md-12 form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary" >Submit</button>
              
            </div>
            <div class="clearfix"> </div>
</form>
<?php

footer();
}
else {
	header('location:signin.php');
}
?>