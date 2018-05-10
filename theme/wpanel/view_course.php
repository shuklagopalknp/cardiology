<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();
$id=$_GET["id"];
$view_id=$_GET["view_id"];

       $q="SELECT * FROM `view` WHERE `menu_id`='2' AND `view_id`='".$view_id."'";
	   $query=mysql_query($q);
	   $row=mysql_fetch_assoc($query);
	   
	   $id=$row['view_id'];
	   $title=$row['view_name'];
	   $view_description=$row['view_description'];
	   

?>
<title>VSDZone View Courses </title>
<div class="grid_3 grid_5">
     <h3 class="head-top">Title:</h3>
     <div class="well">
        <?php echo "$title"; ?>
        
        </div>
     <h3 class="head-top">Description:</h3>
     <div class="well">
        <?php echo "$view_description"; ?>
        </br><h3><a href="edit_about.php?id=<?php echo $id;?>"  >Edit content..</a></h3>
        
        </div>
     </div>
<div class="col-md-12 form-group">
              </br><button type="button" name="delete" class="btn btn-primary" onclick="location.href='delete_course.php?Course_Id=<?php echo $id?>'">Delete Course</button>
              
            </div>
<?php

footer();

}else {
	header('location:signin.php');
}
?>