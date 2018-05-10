<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

?>

<title>VSDZone Courses </title>

<div class="grid_3 grid_5">

		<div class="but_list">
       <div class="well">
        </br><h4><a href="add_new.php"  >Add New Course..</a></h4>
        
       </div>

       <div class="but_list">
       <div class="well">
        Available Courses:
        
       </div>
     
     
       <?php 
	   $q="SELECT * FROM `view` WHERE `menu_id`='2'";
	   $query=mysql_query($q);
	   
	   while($row=mysql_fetch_assoc($query)){
	   
	   $title=$row['view_name'];
	   $menu_id=$row['menu_id'];
	   $view_id=$row['view_id'];
	   
	   
	   ?>
       </br><h4><a href="view_course.php?id=<?php echo $menu_id?>&view_id=<?php echo $view_id?>"  ><?php echo $title;?></a></h4><?php }?>
      
       </div>
       
       
  </div>

</div>
<?php

footer();

}else {
	header('location:signin.php');
}
?>