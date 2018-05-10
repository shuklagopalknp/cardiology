<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

if(isset($_POST['submit'])){

$title=$_POST["title"];
if($_FILES['Gallery_pic']['name']!='')
		  {
			$Gallery_pic=$_FILES['Gallery_pic']['name'];
			$tmpName=$_FILES['Gallery_pic']['tmp_name'];
			$pos=strpos($Gallery_pic,".");
			$len=strlen($Gallery_pic);
			$ext=substr($Gallery_pic,$pos,$len-$pos);
			$ext=strtolower($ext);
			$img_ext=array('.png','.jpg','.bmp','.gif','.jpeg');
			if(in_array($ext, $img_ext))
			{
				$num=rand(1111,9999);
				$num=rand(1111,9999);
				$Gallery_pic="Gallery_pic".$num."_".$num.$ext;
				$path="Gallery/$Gallery_pic";
				move_uploaded_file($tmpName,$path); 
			} 
			else
			{
				echo "<script>alert('Invalid Crop Image Format (PNG, JPG, BMP, GIF, JPEG are allowed)');history.go(-1);</script>";
				 die();
				 exit();
			} 
			  }
			
$q="INSERT INTO `gallery`(`image_title`, `image_name`, `time`) VALUES ('".$title."','".$Gallery_pic."',now())";


mysql_query($q);

}
?>
<title>VSDZone Gallery View</title>
<form method="post" name="base_form" action="" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Image Title </label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Image Title">
  </div>
<div class="form-group">
        <label for="exampleInputFile">upload Photo</label>
        <input type="file" id="Gallery_pic" name="Gallery_pic">
   </div>
   <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
  
</form>


<div class="grid_3 grid_5">
    <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="200">Id Name</th>
                                   <th width="200"> Image Title</th>
                                    <th width="200"> Image</th>
                                    <th width="200">Last Updates</th>
                                    <th width="45">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
            <?php 
		$q1="SELECT * FROM `gallery`";
		$run=mysql_query($q1);
		while($row=mysql_fetch_assoc($run)){
	$id=$row['image_id'];
	$image_title=$row['image_title'];
	$image=$row['image_name'];
	$time=$row['time'];
?>
     <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $image_title;?></td>
      <td><img src="Gallery/<?php echo $image;?>" width="100"/></td>
      <td ><?php echo $time;?></td>
      <td><a href="image_delete.php?image_id=<?php echo $id; ?>" >
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