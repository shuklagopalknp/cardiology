<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();
$id=$_GET['Student_Id'];

if(isset($_POST['submit']))
{
   $s_email=$_POST['s_email'];
   $s_contact=$_POST['s_contact'];
   $reg_number=$_POST['reg_number'];
   $date=$_POST['date'];
  
   $c_name=$_POST['c_name'];
   $center_name=$_POST['center_name'];
   $c_period=$_POST['c_period'];
   $c_validity=$_POST['c_validity'];
   $admission_fee=$_POST['admission_fee'];
   $tution_fee=$_POST['tution_fee'];
   $exam_fee=$_POST['exam_fee'];
   $total_fee=$_POST['total_fee'];
   $s_name=$_POST['s_name'];
   $s_father=$_POST['s_father'];
   $s_mother=$_POST['s_mother'];
   $s_dob=$_POST['s_dob'];
   $s_gender=$_POST['s_gender'];
   $s_qualification=$_POST['s_qualification'];
   $s_village=$_POST['s_village'];
   $s_PO=$_POST['s_PO'];
   $s_tehsil=$_POST['s_tehsil'];
   $s_district=$_POST['s_district'];
   $s_pincode=$_POST['s_pincode'];
   $s_state=$_POST['s_state'];
   //$s_city=$_POST['s_city'];
   $s_nationality=$_POST['s_nationality'];
   $s_cast=$_POST['s_cast'];
  
   
  // $sql_insert="INSERT INTO `students`(`s_email`, `s_contact`, `reg_number`, `date`, `s_type`, `c_name`, `center_name`, `c_period`, `c_validity`, `admission_fee`, `tution_fee`, `exam_fee`, `total_fee`, `s_name`, `s_father`, `s_mother`, `s_dob`, `s_gender`, `s_qualification`, `s_village`, `s_PO`, `s_tehsil`, `s_district`, `s_pincode`, `s_state`, `s_city`, `s_nationality`, `s_cast`, `time`) VALUES ('".$s_email."','".$s_contact."','".$reg_number."','".$date."','".$s_type."','".$c_name."','".$center_name."','".$c_period."','".$c_validity."','".$admission_fee."','".$tution_fee."','".$exam_fee."','".$total_fee."','".$s_name."','".$s_father."','".$s_mother."','".$s_dob."','".$s_gender."','".$s_qualification."','".$s_village."','".$s_PO."','".$s_tehsil."','".$s_district."','".$s_pincode."','".$s_state."','".$s_city."','".$s_nationality."','".$s_cast."',now())";
   
   $sql_insert="UPDATE `students` SET `s_email`='".$s_email."',`s_contact`='".$s_contact."',`reg_number`='".$reg_number."',`date`='".$date."',`c_name`='".$c_name."',`center_name`='".$center_name."',`c_period`='".$c_period."',`c_validity`='".$c_validity."',`admission_fee`='".$admission_fee."',`tution_fee`='".$tution_fee."',`exam_fee`='".$exam_fee."',`total_fee`='".$total_fee."',`s_name`='".$s_name."',`s_father`='".$s_father."',`s_mother`='".$s_mother."',`s_dob`='".$s_dob."',`s_gender`='".$s_gender."',`s_qualification`='".$s_qualification."',`s_village`='".$s_village."',`s_PO`='".$s_PO."',`s_tehsil`='".$s_tehsil."',`s_district`='".$s_district."',`s_pincode`='".$s_pincode."',`s_state`='".$s_state."',`s_nationality`='".$s_nationality."',`s_cast`='".$s_cast."',`time`=now() WHERE Student_Id='".$id."'";
   $query_staff=mysql_query($sql_insert) or die("error in joining insertion".mysql_error());
}
?>
<title>VSDZone Student Registration </title>

<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    <?php 
		
		$q="SELECT * FROM `students` where Student_Id='".$id."'";
$run=mysql_query($q);
while($row=mysql_fetch_assoc($run)){
	$s_email=$row['s_email'];
   $s_contact=$row['s_contact'];
   $reg_number=$row['reg_number'];
   $date=$row['date'];
 
   $c_name=$row['c_name'];
   $center_name=$row['center_name'];
   $c_period=$row['c_period'];
   $c_validity=$row['c_validity'];
   $admission_fee=$row['admission_fee'];
   $tution_fee=$row['tution_fee'];
   $exam_fee=$row['exam_fee'];
   $total_fee=$row['total_fee'];
   $s_name=$row['s_name'];
   $s_father=$row['s_father'];
   $s_mother=$row['s_mother'];
   $s_dob=$row['s_dob'];
   $s_gender=$row['s_gender'];
   $s_qualification=$row['s_qualification'];
   $s_village=$row['s_village'];
   $s_PO=$row['s_PO'];
   $s_tehsil=$row['s_tehsil'];
   $s_district=$row['s_district'];
   $s_pincode=$row['s_pincode'];
   $s_state=$row['s_state'];
   $s_city=$row['s_city'];
   $s_nationality=$row['s_nationality'];
   $s_cast=$row['s_cast'];
  ?>
        <form action="#" method="post">
         	<div class="vali-form">
            <div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Email:</label>
              <input type="text" placeholder="Enter Email Address" value="<?php echo $s_email?>" name="s_email" >
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Contact:</label>
              <input type="text" placeholder="Contact Number" name="s_contact" value="<?php echo $s_contact?>">
            </div>
             <div class="clearfix"> </div></br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Registration Number*:</label>
              <input type="text" placeholder="Enter Time Period" name="reg_number" value="<?php echo $reg_number?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label ">Date:</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="date"  value="<?php echo $date?>"></div>
            <div class="clearfix"> </div></br>
            
            <div class="col-md-6 form-group1">
									<!--<label for="radio" class="col-sm-2 control-label">Student Type:</label>
									<div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="s_type"  value="new" checked> New</label></div>
										<div class="radio-inline"><label><input type="radio" name="s_type"  value="upgrade" > Upgrade</label></div></div>-->
										
									 </div><div class="clearfix"> </div>	<br/>
									
			<div class="col-md-6 form-group1 group-mail">
              <label class="control-label">Course Name:</label>
              <input type="text" placeholder="Enter Course Name" name="c_name" value="<?php echo $c_name?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Center Name:</label>
              <input type="text" placeholder="Center Name" name="center_name" value="<?php echo $center_name?>">
            </div>
            <div class="clearfix"> </div></br>
            					
            <div class="col-md-6 form-group1">
              <label class="control-label">Course Period:</label>
              <input type="text" placeholder="Enter Time Period" name="c_period" value="<?php echo $c_period?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label ">Valid Upto:</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="c_validity" value="<?php echo $c_validity?>">
            </div>
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Admission Fee:</label>
              <input type="text" placeholder="Firstname" name="admission_fee" value="<?php echo $admission_fee?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Tution Fee:</label>
              <input type="text" placeholder="Lastname" name="tution_fee" value="<?php echo $tution_fee?>">
            </div><div class="col-md-6 form-group1">
              <label class="control-label">Exam Fee:</label>
              <input type="text" placeholder="Total" name="exam_fee" value="<?php echo $exam_fee?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Total Fee:</label>
              <input type="text" placeholder="Lastname" name="total_fee" value="<?php echo $total_fee?>">
            </div>
            
            <div class="clearfix"> </div></br>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Student's Name:</label>
              <input type="text" placeholder="name of student" name="s_name" value="<?php echo $s_name?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Father's Name:</label>
              <input type="text" placeholder="Father's Name" name="s_father" value="<?php echo $s_father?>">
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Mother's Name:</label>
              <input type="text" placeholder="Mother's name" name="s_mother" value="<?php echo $s_mother?>">
            </div>
           <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Date Of Birth:</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"  name="s_dob" value="<?php echo $s_dob?>">
            </div>
            <div class="clearfix"> </div></br>
            <div class="col-md-6 form-group1">
            <label for="radio" class="col-sm-2 control-label">Student Gender:</label>
            <div class="col-sm-8">
										<div class="radio-inline"><label><input type="radio" name="s_gender"  value="male" checked> Male</label></div>
										<div class="radio-inline"><label><input type="radio" name="s_gender" value="female" > Female</label></div>
										
									 </div></div>
            <div class="clearfix"> </div></br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Qualification:</label>
              <input type="text" placeholder="Enter Qualification" name="s_qualification" value="<?php echo $s_qualification?>">
            </div>
                     
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Village:</label>
              <input type="text" placeholder="Enter Village" name="s_village" value="<?php echo $s_village?>">
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Post Office:</label>
              <input type="text" placeholder="Enter Post Office" name="s_PO" value="<?php echo $s_PO?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Tehsil:</label>
              <input type="text" placeholder="Enter Tehsil" name="s_tehsil" value="<?php echo $s_tehsil?>">
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">District:</label>
              <input type="text" placeholder="Enter District" name="s_district" value="<?php echo $s_district?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Pincode:</label>
              <input type="text" placeholder="Enter Pincode" name="s_pincode" value="<?php echo $s_pincode?>">
            </div>
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">State:</label>
              
              <select id="city_id" class="form-control" name="s_state" >
              <option value="<?php echo $s_state?>" selected=""><?php echo $s_state?></option>
                                    <?php
                                      $sql = "select * from states";
                                      $run = mysql_query($sql) or die("error in state fetch".mysql_error());
                                      while($data = mysql_fetch_array($run))
                                      {
                                        $state_id = $data['state_id'];
                                        $state_name = $data['state'];
                                    ?>
                                    <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                                <?php } ?>
                                </select>
            </div>
            
            
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Nationality:</label>
              <input type="text" value="Indian" name="s_nationality" >
            </div>    
            	     <div class="clearfix"> </div>      
            
            <div class="col-md-6 form-group2 group-mail">
              <label class="control-label">Cast:</label>
            <select name="s_cast">
            
            	<option value="General"  >General</option>
                <option value="">OBC</option>
            	<option value="SC">SC</option>
            	<option value="ST">ST</option>
            	<option value="Others">Others</option>
            </select>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <!--<button type="reset" class="btn btn-default" name="">Reset</button>-->
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
}
footer();

}else {
	header('location:signin.php');
}
?>