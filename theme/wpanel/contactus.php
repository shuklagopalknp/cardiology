<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();


?>
<title>VSDZone Mails</title>
<div class="grid_3 grid_5">
    <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="200">Id</th>
                                   <th width="200">Name</th>
                                    <th width="200">Mobile</th>
                                    <th width="200">Subject</th>
                                    <th width="45">Time</th>
                                    <th width="45">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

<?php 
$q="SELECT * FROM `contact_us`";
$run=mysql_query($q);

while($row=mysql_fetch_assoc($run)){
	$id=$row['contact_id'];
	$name=$row['name'];
	$mobile=$row['mobile'];
	$subject=$row['subject'];
    $time=$row['time'];
	?>
    <tr>
      <td><?php echo $id; ?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $mobile;?></td>
      <td><?php echo $subject;?></td>
      <td ><?php echo $time;?></td>
      <td><a href="contact_delete.php?contact_id=<?php echo $id; ?>" >
				<i class="fa fa-trash-o fa-2x"></i>
		   </a>
	  </td>
       </tr>
      <?php } ?>  
      

<?php
}



else {
	header('location:signin.php');
}
?>