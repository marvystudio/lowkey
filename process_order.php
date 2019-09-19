<?php
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
		$qty_radio[]=$_POST['qty_radio'];
 	}
if(isset($_POST['used_radio']))
	{
		$used_radio[]=$_POST['used_radio'];
 	}
if(isset($_POST['used_check']))
	{
		$used_check[]=$_POST['used_check'];
 	}
if(isset($_POST['id_pack']))
	{
		$id_pack=$_POST['id_pack'];
 	}
	if(isset($_POST['deadline']))
	{
		$deadline=$_POST['deadline'];
 	}
	//them user
$date=date("Y/m/d");
$sql="insert into `lk_user` values (null,'$phonecus','$comcus','$namecus','$mailcus','$date',0)";
mysqli_query($link,$sql);
	//get id user vua them
	$getid_user="select max(`id`) from `lk_user`";
	$qr=mysqli_query($link,$getid_user);
	$r=mysqli_fetch_assoc($qr);
	$id_user=$r['id'];
	//get id order
	$getid_order="select max(`id`) from `lk_order`";
	$qr1=mysqli_query($link,$getid_order);
	$r1=mysqli_fetch_assoc($qr1);
	$id_order=$r1['id'];
	//add db order
	$add_order="insert into `lk_order` values (null,'$id_user','$id_pack',0,'$date','$deadline')";
	mysqli_query($link,$add_order);
	
	foreach($used_check as $value){
		$sql1="select * from `lk_eservice_detail` where `id`='$value'";
		$qr2=mysqli_query($link,$sql1);
		$r2=mysqli_fetch_assoc($qr2);
		$price=$r2['price'];
		$addcheck="insert into `lk_detail_order` values (null,'$id_order','$value',1,0,'$price')";	
		mysqli_query($link,$addcheck);
	}
	
	


?>