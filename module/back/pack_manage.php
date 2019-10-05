<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	if( isset($_GET['id_pack']))
	{
			$id_pack=$_GET['id_pack'];
	}
	$sql0 = "SELECT * from `lk_pack` where `id`=$id_pack";  	
	$rel0 = mysqli_query($link,$sql0);
	$r0 = mysqli_fetch_assoc($rel0);
	
	$sql1 = "SELECT * from `lk_service` where `active`=1";  	
	$rel1 = mysqli_query($link,$sql1);
	// $r1 = mysqli_fetch_assoc($rel1);
	
	
?>

<style>
 table.dataTable{
	 border-collapse:collapse;
 }
 #datatable_paginate{
	 position:absolute;
	 bottom:60px;
	 right:0;
 }
 #datatable_info{
	 position:absolute;
	 bottom:70px;
	 left:0;
 }
</style>
<h1>Dịch Vụ Trong Gói <?= $r0['name']?></h1>
<select id="select">
<?php 
	while($r1 = mysqli_fetch_assoc($rel1)){
?>
  <option value="<?=$r1['id']?>"><?=$r1['name']?></option>
  <?php
	}
	?>
  
</select>
<button onClick="add()">Thêm</button>
<table class="col-md-12 col-sm-12 col-xs-12 table-hover table-striped  " id="datatable" style="text-align:center; margin-bottom:110px">
    <thead style="color: white; background-color: #343a40; font-size: 18px;">
        <tr>
            <th>STT</th>
            <th class="text-left">Tên Dịch Vụ</th>
           <!-- <th>Giá</th>
            <th>Mô Tả</th>-->
            <th>Trạng Thái</th>
            
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT a.name as nameser , a.id as idser
	from `lk_service`  a 
	, `lk_pack` b
	, `lk_sop`  c
	where a.id=c.id_service
	and   b.id=c.id_pack
	and   c.id_pack={$id_pack}
	";  	
	$rel = mysqli_query($link,$sql);
	$i=1;
	while($r = mysqli_fetch_assoc($rel))
	{
  ?>
  <tr>
  	<td align="center">
      <?=$i++?>
    </td>
    <td class="text-left">
      <a style="color: black" href=""> <?=$r['nameser']?></a>
    </td>
    <td>
	   <a style="color: black"  href="" onClick="del(<?=$r['idser']?>,<?=$id_pack?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button> </a>
       </td>
	
  </tr>
  <?php } ?>
</table>

<script>
	$(document).ready(function(){    	
		$('#datatable').DataTable( {
   			 language: {
        		url: 'datatable/Vietnamese.json'
    		}
		});
    });
	
	function del(a,b){
			
            $.ajax({
                url:'/lowkey/module/back/del.php',
                type:'POST',
                data:{ 
					id_service:a,
					id_pack:b,
					xoasop: 1
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
	function add(){
			
            $.ajax({
                url:'/lowkey/module/back/del.php',
                type:'POST',
                data:{ 
					id_service:$('#select').val(),
					id_pack:<?=$id_pack?>,
					addsop:1
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
</script>