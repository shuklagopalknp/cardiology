<?php
	session_start();
	include('dbconnect.php');

		$news_id_get=$_GET['image_id'];

		
		$sql_delete="delete from gallery where image_id='".$news_id_get."'";
		 $query_run=mysql_query($sql_delete) or die('error in news delete'.mysql_error());
		  if(mysql_affected_rows())
		 {
               echo "<script>window.location='image.php?image=deleted';</script>";
		 }
		 else
		 {
                echo "<script>window.location='image.php?image=failed';</script>";
		 }


 ?>