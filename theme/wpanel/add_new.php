<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();


if(isset($_POST['submit'])){
	
	$description1=$_POST["description1"];
	$title=$_POST["title"];
	
	$q="INSERT INTO `view`(`menu_id`, `view_name`,`view_description`, `time`) VALUES ('2','".$title."','".$description1."',now())";
	$query=mysql_query($q);
	
	
	//header('location:chiefdirector_view.php');
	}
?>
<title>VSDZone Add new course </title>

<div class="grid_3 grid_5">

	 <h3 class="head-top">Course:</h3>
     <form method="post" enctype="multipart/form-data">
     
     
     <div class="form-group">
     <label for="">Title</label>
     <input type="text" class="form-control" name="title" placeholder="Enter Course Name">
     </div>
     <div class="form-group">
     <label for="">Content</label>
	 </div>
	 <textarea class="form-control ckeditor" id="description1" name="description1"></textarea><br/>

	 <input type="submit" class="btn btn-info" name="submit"></button>
     
	 </form>


  </div>
<?php

footer();

}else {
	header('location:signin.php');
}
?>