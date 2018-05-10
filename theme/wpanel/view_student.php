<?php
session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

?>
<title>VSDZone Student List </title>
<div class="grid_3 grid_5">
    <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="67">Reg. number</th>
                                    <th>Name</th>
                                    <th>Email</th>
                               
                                    <th width="129">Contact Name</th>
                                    
                                    <th width="114">Course Name</th>
                                    <th width="114">Centre Name</th>
                                    
                                    
                                    <th width="27">View</th>
									                                </tr>
                            </thead>
                            <tbody>
							<?php 
								$i=1;
								$q2="SELECT * FROM `students`";
								$run=mysql_query($q2);
								
									while($row=mysql_fetch_assoc($run)){
										
									$Student_Id=$row['Student_Id'];
									$reg_number=$row['reg_number'];
									$s_name=$row['s_name'];
									$s_email=$row['s_email'];
									$s_contact=$row['s_contact'];
									$c_name=$row['c_name'];									
									$center_name=$row['center_name'];
									
									
							?>
                                <tr>
                                 
                                <td width="95" ><?php echo $reg_number;?></td>
                                <td width="130"><?php echo $s_name; ?></td>
             					<td width="250"><?php echo $s_email; ?></td>
                                <td width="150"><?php echo $s_contact; ?></td>
                                <td width="150"><?php echo $c_name; ?></td>
                                <td width="150"><?php echo $center_name; ?></td>
                                <td width="50"><a href="view_studentprofile.php?Student_id=<?php echo $Student_Id; ?>" >
								<i class="fa fa-edit fa-2x"></i>
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