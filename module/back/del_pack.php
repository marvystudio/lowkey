<?php 
require_once("../../lib/connect.php");
if(isset($_POST['id_pack'])){
	$id_pack=$_POST['id_pack'];
	mysqli_query($link,"DELETE FROM `lk_pack` WHERE `id`=$id_pack  ");
	echo 1;
	}
?>