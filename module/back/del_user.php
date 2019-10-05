<?php 
require_once("../../lib/connect.php");
if(isset($_POST['id_user'])){
	$id_user=$_POST['id_user'];
	mysqli_query($link,"DELETE FROM `lk_user` WHERE `id`=$id_user  ");
	echo 1;
	}
?>