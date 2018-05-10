<?php

session_start();
if(isset($_SESSION["email"])!=''){
include 'layout.php';
include 'dbconnect.php';
head();
SideBar();
$id=$_GET["id"];

if(isset($_POST['submit'])){
	
	$description1=$_POST["description1"];
	
	$q="UPDATE `view` SET `view_description`='".$description1."' WHERE view_id='".$id."'";
	$query=mysql_query($q);
	
	//header('location:chiefdirector_view.php');
	}


$q="SELECT * FROM `view` WHERE view_id='".$id."'";

    $query=mysql_query($q);
	$row=mysql_fetch_assoc($query);
	$title=$row['view_name'];
	$description=$row['view_description'];

?>
<title>VSDZone About Edit </title>
<div class="grid_3 grid_5">
     <h3 class="head-top">Title:</h3>
     <div class="but_list">
       
       
       <div class="well">
        <?php echo "$title"; ?>
        
        </div>
     </div>
       
<form method="post" enctype="multipart/form-data">

		<h3 class="head-top">Content:</h3>
		<textarea class="form-control ckeditor" id="description1" name="description1">				  		<?php echo $description ?></textarea><br/>
		</br>
		<input type="submit" class="btn btn-info" name="submit"></button>
     
</form>


  </div>
<?php


footer();
}else {
	header('location:signin.php');
}
?>