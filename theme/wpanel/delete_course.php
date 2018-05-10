<?php
	session_start();
	include('dbconnect.php');

		$news_id_get=$_GET['Course_Id'];

		
		$sql_delete="delete from view where view_id='".$news_id_get."'";
		 $query_run=mysql_query($sql_delete) or die('error in news delete'.mysql_error());
		  if(mysql_affected_rows())
		 {
               echo "<script>window.location='courses.php?course=deleted';</script>";
		 }
		 else
		 {
                echo "<script>window.location='courses.php?course=failed';</script>";
		 }


 ?>