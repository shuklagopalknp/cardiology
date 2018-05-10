<?php
session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

?>
<title>VSDZone Dashboard </title>
<?php

footer();

}else {
	header('location:signin.php');
}
?>