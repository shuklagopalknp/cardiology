<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();


$q="SELECT * FROM `view` WHERE `view_id`='5'";
$run=mysql_query($q);

while($row=mysql_fetch_assoc($run)){
	$id=$row['view_id'];
	$view_name=$row['view_name'];
	$view_description=$row['view_description'];
	$view_image=$row['view_image'];
    $time=$row['time'];

?>
<title>VSDZone About Us </title>

<div class="grid_3 grid_5">
     
     <div class="but_list">
       <div class="well">
        <?php echo "$view_name"; ?>
        
       </div>
       <div class="well">
       <?php echo "$view_description"; ?>
       
       </br><h3><a href="edit_about.php?id=<?php echo $id;?>"  >Edit content..</a></h3>
       </div>
       <div class="well">
       <img src="viewpic\<?php echo "$view_image"; ?>" />
       </br><h3><a href="edit_picture.php?id=<?php echo $id;?>"  >Change picture..</a></h3>
       </div>
       
  </div>

</div>
<?php

footer();
}
}else {
	header('location:signin.php');
}
?>