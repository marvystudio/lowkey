<?php 
require_once("../../lib/connect.php");
if(isset($_POST['id_order'])){
	$id_order=$_POST['id_order'];
	mysqli_query($link,"UPDATE `lk_order` SET `active` = 1 WHERE `id`=$id_order  ");
	echo 1;
	}
?>