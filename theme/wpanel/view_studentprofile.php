<?php
session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();
$id=$_GET['Student_id'];
$q="SELECT * FROM `students` where Student_Id='".$id."'";
$run=mysql_query($q);
while($row=mysql_fetch_assoc($run)){
	$s_email=$row['s_email'];
   $s_contact=$row['s_contact'];
   $reg_number=$row['reg_number'];
   $date=$row['date'];
   $s_type=$row['s_type'];
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
<title>VSDZone Student Profile</title>
<div class=" profile">

		<div class="profile-bottom">
			<h3><?php echo $reg_number?></h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/pr.jpg" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6><?php echo $s_name?></h6>
				<table>
				<tr><td>Course Name</td>  
				<td>:</td>  
				<td><?php echo $c_name?></td></tr>
				
				<tr>
				<td>Centre Name</td>
				<td> :</td>
				<td><?php echo $center_name?></td>
				</tr>
				<tr>
				<td>Fee Paid</td>
				<td> :</td>
				<td> <?php echo $total_fee?></td>
				</tr>
				<tr>
				<td>Course Validity </td>
				<td>:</td>
				<td> <?php echo $c_validity?></td>
				</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
            <div class="clearfix"></div></br>
            
			
			<div class="profile-btn">

                <div class="col-md-8 profile-text">
				<h4>Personal Details</h4></br>
				<table>
				<tr><td>Father's Name</td>  
				<td>:</td>  
				<td><?php echo $s_father?></td></tr>
				
				<tr>
				<td>Mother's Name</td>
				<td> :</td>
				<td><?php echo $s_mother?></td>
				</tr>
				<tr>
				<td>Contact Number</td>
				<td> :</td>
				<td><?php echo $s_contact?></td>
				</tr>
                <tr>
				<td>E-mail</td>
				<td> :</td>
				<td><?php echo $s_email?></td>
				</tr>
				<tr>
				<td>Address </td>
				<td>:</td>
				<td> <?php echo $s_village?>&nbsp<?php echo $s_PO?>&nbsp<?php echo $s_tehsil ?><?php echo $s_district?>&nbsp,<?php echo $s_city?>&nbsp,<?php echo $s_state?></td>
                
				</tr>
				</table>
			</div><button type="button" onclick="location.href='edit_profile.php?Student_Id=<?php echo $id?>'" class="btn bg-red">Edit Profile</button>
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
<?php
}
footer();

}else {
	header('location:signin.php');
}
?>