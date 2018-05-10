<?php
	session_start();
	include('dbconnect.php');

		$news_id_get=$_GET['franchise_id'];

		
		$sql_delete="delete from franchise where id='".$news_id_get."'";
		 $query_run=mysql_query($sql_delete) or die('error in news delete'.mysql_error());
		  if(mysql_affected_rows())
		 {
               echo "<script>window.location='franchise.php?franchise=deleted';</script>";
		 }
		 else
		 {
                echo "<script>window.location='franchise.php?franchise=failed';</script>";
		 }


 ?>