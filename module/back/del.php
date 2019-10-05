<?php 
require_once("../../lib/connect.php");
	if(isset($_POST['id_service'])&& isset($_POST['xoaser'])){
	$id_service=$_POST['id_service'];
	mysqli_query($link,"DELETE FROM `lk_service` WHERE `id`=$id_service  ");
	echo 1;
	}
	if(isset($_POST['id_service']) && isset($_POST['id_pack'])&& isset($_POST['xoasop'])){
	$id_service=$_POST['id_service'];
	$id_pack=$_POST['id_pack'];
	mysqli_query($link,"DELETE FROM `lk_sop` WHERE `id_service`=$id_service and `id_pack`=$id_pack  ");
	echo 1;
	}
	if(isset($_POST['id_service']) && isset($_POST['id_pack'])&& isset($_POST['addsop'])){
	$id_service=$_POST['id_service'];
	$id_pack=$_POST['id_pack'];
	mysqli_query($link,"INSERT INTO `lk_sop` values (null,$id_pack,$id_service)");
	echo 1;
	}
	if(isset($_POST['id_project'])&& isset($_POST['xoapro'])){
	$id_project=$_POST['id_project'];
	mysqli_query($link,"DELETE FROM `lk_project` WHERE `id`=$id_project  ");
	echo 1;
	}
	if(isset($_POST['id_eservice'])&& isset($_POST['xoaeser'])){
	$id_eservice=$_POST['id_eservice'];
	mysqli_query($link,"DELETE FROM `lk_eservice` WHERE `id`=$id_eservice  ");
	echo 1;
	}
	
?>