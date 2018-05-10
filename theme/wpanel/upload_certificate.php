<?php
session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();
 
 $reg_number=$_GET['reg'];
 $course=$_GET['course'];
 
  if(isset($_POST['upload'])){
	
	if($_FILES['certificate']['name']!='')
		  {
			$certificate=$_FILES['certificate']['name'];
			$tmpName=$_FILES['certificate']['tmp_name'];
			$pos=strpos($certificate,".");
			$len=strlen($certificate);
			$ext=substr($certificate,$pos,$len-$pos);
			$ext=strtolower($ext);
			$img_ext=array('.png','.jpg','.bmp','.gif','.jpeg','.pdf');
			if(in_array($ext, $img_ext))
			{
				$num=rand(1111,9999);
				$num=rand(1111,9999);
				$certificate="certificate".$num."_".$num.$ext;
				$path="certificates/$certificate";
				move_uploaded_file($tmpName,$path); 
			} 
			else
			{
				echo "<script>alert('Invalid Crop Image Format (PNG, JPG, BMP, GIF, JPEG are allowed)');history.go(-1);</script>";
				 die();
				 exit();
			} 
			  }
	
	 $qry="INSERT INTO `certificate`(`reg_number`, `course`, `certificate`) VALUES ('".$reg_number."','".$course."','".$certificate."')";
	
	$run=mysql_query($qry);
}

?>
<title>VSDZone certificate upload </title>
<?php 

$q="SELECT * FROM `students` WHERE `reg_number`='".$reg_number."' AND `c_name`='".$course."'";  
 $run2=mysql_query($q) or die("Registration number and course mismatch".mysql_error());
 
 if($row2=mysql_fetch_assoc($run2)){
	
	$s_name=$row2['s_name'];
	$s_father=$row2['s_father'];
	$s_dob=$row2['s_dob'];
	
	?><form method="post"  enctype="multipart/form-data">
	 <div class=" profile">

		<div class="profile-bottom">
			<h3>Upload Ceritificate:</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/pr.jpg" alt="">
			</div>
			<div class="col-md-8 profile-text">
            

                <h6><?php echo $s_name?></h6>
                
				<table>
				<tr>
                <td>Registration Number:</td>
				<td>:</td>  
				<td><?php echo $reg_number?></td></tr>
                <tr>
                <td>Course Name</td>  
				<td>:</td>  
				<td><?php echo $course?></td></tr>
				<tr>
				<td>DOB</td>
				<td>:</td>
				<td> <?php echo $s_dob?></td>
				</tr>			
				
				<tr>
				<td>Father's Name</td>
				<td>:</td>
				<td> <?php echo $s_father?></td>
				</tr>
                
                <tr>
				<td>Upload Certificate</td>
				<td>:</td>
                 
				<td><input type="file" id="certificate" name="certificate"></td>
				</tr>
                
			</table>
            <div class="clearfix"></div>
            <button type="submit" class="btn bg-red" name="upload" >upload Certificate</button>
            
			</div>
			
           </form>
           
			
           <div class="clearfix"></div>
			
			 
			
		</div>
	</div>
	 
<?php }else{?>

<h2>Wrong Credentials</h2>
                <h4>THe Registration number you have entered is not correct</h4>
<?php
}
footer();

}else {
	header('location:signin.php');
}
?>