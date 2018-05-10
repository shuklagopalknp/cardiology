<?php

session_start();
if(isset($_SESSION["email"])!=''){
include 'layout.php';
include 'dbconnect.php';
head();
SideBar();
$id=$_GET["id"];

if(isset($_POST['submit'])){
	
	if($_FILES['viewpic']['name']!='')
		  {
			$viewpic=$_FILES['viewpic']['name'];
			$tmpName=$_FILES['viewpic']['tmp_name'];
			$pos=strpos($viewpic,".");
			$len=strlen($viewpic);
			$ext=substr($viewpic,$pos,$len-$pos);
			$ext=strtolower($ext);
			$img_ext=array('.png','.jpg','.bmp','.gif','.jpeg');
			if(in_array($ext, $img_ext))
			{
				$num=rand(1111,9999);
				$num=rand(1111,9999);
				$viewpic="viewpic".$num."_".$num.$ext;
				$path="viewpic/$viewpic";
				move_uploaded_file($tmpName,$path); 
			} 
			else
			{
				echo "<script>alert('Invalid Crop Image Format (PNG, JPG, BMP, GIF, JPEG are allowed)');history.go(-1);</script>";
				 die();
				 exit();
			} 
			  }
			  
	$q="UPDATE `view` SET `view_image`='".$viewpic."' WHERE view_id='".$id."'";
	$query=mysql_query($q);
	
	//header('location:chiefdirector_view.php');
	}


$q="SELECT * FROM `view` WHERE view_id='".$id."'";

    $query=mysql_query($q);
	$row=mysql_fetch_assoc($query);
	
	$image=$row['view_image'];

?>
      <title>GPS About Section Picture Edit Page</title>
<form method="post" enctype="multipart/form-data">

<div class="grid_3 grid_5">
     <h3 class="head-top">Current picture:</h3>
     <div class="but_list">
       
       
       <div class="well">
        <img src="viewpic/<?php echo "$image"; ?>"/>
        
        </div>
     </div>
<div class="form-group">
        <h3 class="head-top">update pic </h3>
        <input type="file" id="viewpic" name="viewpic">
   </div></br>
<input type="submit" class="btn btn-info" name="submit"></button>
     
</form>


  </div>
<?php


footer();
}else {
	header('location:signin.php');
}
?>