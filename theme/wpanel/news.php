<?php
session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();
if(isset($_POST['submit'])){

$title=$_POST["title1"];
$description=$_POST["description1"];
if($_FILES['news_pic']['name']!='')
		  {
			$news_pic=$_FILES['news_pic']['name'];
			$tmpName=$_FILES['news_pic']['tmp_name'];
			$pos=strpos($news_pic,".");
			$len=strlen($news_pic);
			$ext=substr($news_pic,$pos,$len-$pos);
			$ext=strtolower($ext);
			$img_ext=array('.png','.jpg','.bmp','.gif','.jpeg');
			if(in_array($ext, $img_ext))
			{
				$num=rand(1111,9999);
				$num=rand(1111,9999);
				$news_pic="news_pic".$num."_".$num.$ext;
				$path="news/$news_pic";
				move_uploaded_file($tmpName,$path); 
			} 
			else
			{
				echo "<script>alert('Invalid Crop Image Format (PNG, JPG, BMP, GIF, JPEG are allowed)');history.go(-1);</script>";
				 die();
				 exit();
			} 
			  }

$q="INSERT INTO `news`(`title1`, `description1`, `news_pic`, `update_time`) VALUES ('".$title."','".$description."','".$news_pic."',now())";

mysql_query($q);

}
if(isset($_POST['update'])){
$title=$_POST["title"];
$description=$_POST["description1"];
$q="update `news` set `title1`='".$title."', `description1`='".$description."', update_time=now() where news_id='".$_GET["news_id"]."'";
mysql_query($q);
}

?>
<?php if(isset($_GET["news_id"])){

$q3="SELECT * FROM `news` where news_id='".$_GET["news_id"]."'";
								$run3=mysql_query($q3);
								
									$row3=mysql_fetch_assoc($run3);
									$title1=$row3['title1'];
									$description1=$row3['description1'];
									$news_pic=$row3['news_pic'];
									$news_id=$row3['news_id'];									
									$update_time=$row3['update_time'];
									$date=date('d-m-Y',strtotime($update_time));
?>

<form method="post" enctype="multipart/form-data">
<label>Title:</label><br/>

<input type="text" class="form-control" id="title" value="<?php echo $title1;?>" name="title">
<label>Description:</label><br/>

<textarea class="form-control ckeditor" id="description" name="description1"><?php echo $description1;?></textarea>
<br/>
<input type="hidden" class="btn btn-info" name="news_id" id="news_id" value="<?php echo $news_id;?>">
<input type="submit" class="btn btn-info" name="update" value="update"></button>
     
</form>
<?php }else{?>
<title>VSDZone news </title>
<form method="post" enctype="multipart/form-data">
<label>Title:</label><br/>

<input type="text" class="form-control" id="title" placeholder="Enter title" name="title1">
<label>Description:</label><br/>

<textarea class="form-control ckeditor" id="description" name="description1" placeholder="Enter Description"></textarea>
<div class="form-group">
        <label for="exampleInputFile">upload Photo</label>
        <input type="file" id="news_pic" name="news_pic">
   </div>

<input type="submit" class="btn btn-info" name="submit" value="submit"></button>
     
</form>
<?php }?>

    </br></br>
    <div class="grid_3 grid_5">
    <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="67">Sr No.</th>
                                    <th>Date</th>
                               
                                    <th width="129">News Name</th>
                                    
                                    <th width="114">Descreption</th>
                                    <th width="27">Edit</th>
									<th width="45">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
								$i=1;
								$q2="SELECT * FROM `news` order by update_time Desc";
								$run=mysql_query($q2);
								
									while($row=mysql_fetch_assoc($run)){
									$title1=$row['title1'];
									$description1=$row['description1'];
									$news_pic=$row['news_pic'];
									$news_id=$row['news_id'];									
									$update_time=$row['update_time'];
									$date=date('d-m-Y',strtotime($update_time));
									
							?>
                                <tr>
                                 <td><?php echo $i++; ?></td>
                                <td width="95" ><?php echo $date;?></td>
             
                                   
                                    <td><?php echo $title1; ?></td>
                                     <td><?php echo $description1; ?></td>
                                    <td><a href="news.php?news_id=<?php echo $news_id; ?>" onClick="javascript:if(confirm('Do You Want to Edit News <?php echo $title1; ?> ?')){return true;}else{return false}" title="Click Here to Edit News <?php echo $title1; ?>.">
											<i class="fa fa-edit fa-2x"></i>
										</a>		
									</td>
									<td>
										<a href="news_delete.php?news_id=<?php echo $news_id; ?>" onClick="javascript:if(confirm('Do You Want to Delete News <?php echo $title1; ?> ?')){return true;}else{return false}" title="Click Here to Delete News <?php echo $title1; ?>.">
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