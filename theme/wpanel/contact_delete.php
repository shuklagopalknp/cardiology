<?php
	session_start();
	include('dbconnect.php');

		$news_id_get=$_GET['contact_id'];

		
		$sql_delete="delete from contact_us where contact_id='".$news_id_get."'";
		 $query_run=mysql_query($sql_delete) or die('error in contact delete'.mysql_error());
		  if(mysql_affected_rows())
		 {
               echo "<script>window.location='contactus.php?contact=deleted';</script>";
		 }
		 else
		 {
                echo "<script>window.location='contactus.php?contact=failed';</script>";
		 }


 ?>