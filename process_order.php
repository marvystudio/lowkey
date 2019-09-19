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
	//them user
$date=date("Y/m/d");
$sql="insert into `lk_user` values (null,'$phonecus','$comcus','$namecus','$mailcus','$date',0)";
mysqli_query($link,$sql);
	//get id user vua them


?>