

<?php

session_start();
if(isset($_SESSION["email"])!=''){
	
include 'layout.php';
include 'dbconnect.php';
head();
sidebar();

?>


<?php

footer();

}else {
	header('location:signin.php');
}
?>