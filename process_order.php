<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
	if(isset($_POST['namecus']))
	{
		$namecus=$_POST['namecus'];
 	}
	if(isset($_POST['phonecus']))
	{
		$phonecus=$_POST['phonecus'];
 	}
	if(isset($_POST['mailcus']))
	{
		$mailcus=$_POST['mailcus'];
 	}
	if(isset($_POST['comcus']))
	{
		$comcus=$_POST['comcus'];
 	}
	if(isset($_POST['qty_radio']))
	{
		$qty_radio=$_POST['qty_radio'];
 	}
	if(isset($_POST['used_radio']))
	{
		$used_radio=$_POST['used_radio'];
 	}
	if(isset($_POST['used_check']))
	{
		$used_check=$_POST['used_check'];
 	}
	if(isset($_POST['id_pack']))
	{
		$id_pack=$_POST['id_pack'];
 	}
	if(isset($_POST['deadline']))
	{
		$deadline=$_POST['deadline'];
 	}
	
	try{
	//them user
	$date=date("Y/m/d");
	$sql="insert into `lk_user` values (null,'$phonecus','$comcus','$namecus','$mailcus','$date',0)";
	mysqli_query($link,$sql);
	//get id user vua them
	$getid_user="select max(`id`) as id from `lk_user`";
	$qr=mysqli_query($link,$getid_user);
	$r=mysqli_fetch_assoc($qr);
	$id_user=$r['id'];
	//add db order
	$add_order="insert into `lk_order` values (null,'$id_user','$id_pack',0,'$date','$deadline')";
	mysqli_query($link,$add_order);
	//get id order
	$getid_order="select max(`id`) as id from `lk_order`";
	$qr1=mysqli_query($link,$getid_order);
	$r1=mysqli_fetch_assoc($qr1);
	$id_order=$r1['id'];
	for ($i = 0; $i < count($used_check); $i++) {
		$sql1="select * from `lk_detail_eservice` where `id`='{$used_check[$i]}'";
		
		$qr2=mysqli_query($link,$sql1);
		$r2=mysqli_fetch_assoc($qr2);
		$price=$r2['price'];
		$addcheck="insert into `lk_detail_order` values (null,'$id_order','{$used_check[$i]}',1,0,'$price')";	
		mysqli_query($link,$addcheck);
	}
		if(isset($_POST['used_radio'])){
			for ($x = 0; $x < count($used_radio); $x++) {
   		$sql2="select * from `lk_detail_eservice` where `id`='{$used_radio[$x]}'";
		$qr3=mysqli_query($link,$sql2);
		$r3=mysqli_fetch_assoc($qr3);
		$price1=$r3['price'];
		$addradio="insert into `lk_detail_order` values (null,'{$id_order}','{$used_radio[$x]}','{$qty_radio[$x]}',0,'{$price1}')";	
		mysqli_query($link,$addradio);
	}
			}
	echo $id_user;
	}
	catch(Exception $e){
		echo 2;
	}
?>