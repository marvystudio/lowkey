<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	if(isset($_GET['id'])){
		$id_eservice=$_GET['id'];
	}
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$tag=$_POST['nametag'];
		$active=$_POST['active'];
		$price=$_POST['price'];
		$unit=$_POST['unit'];
		mysqli_query($link,"INSERT INTO `lk_detail_eservice` values (null,'$name','$tag','$price','$unit','0','$id_eservice','$active')");
		
	}
	
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

<form method="post">
Tên:<input type="text" name="name" required><br/>
NameTag:<input type="text" name="nametag"><br />
Giá:<input type="number" name="price" required><br />
Đơn Vị:<input type="text" name="unit" required><br/>
Trạng Thái:
 <select name="active" >
         <option value="0" selected="selected" >Ẩn</option>
        <option value="1" >Hiện</option>
      </select>
      <br/>
      <button>Thêm</button>
</form>

<table class="col-md-12 col-sm-12 col-xs-12 table-hover table-striped  " id="datatable" style="text-align:center; margin-bottom:110px">
    <thead style="color: white; background-color: #343a40; font-size: 18px;">
        <tr>
            <th>STT</th>
            <th style="text-align:center">Tên</th>
            <th style="width:30%">NameTag</th>
            <th>Giá</th>
            <th>Đơn Vị</th>
            <th>Trạng Thái</th>
            <th></th>
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT * from `lk_detail_eservice` where `id_eservice`=$id_eservice";  	
	$rel = mysqli_query($link,$sql);
	$i=1;
	while($re = mysqli_fetch_assoc($rel))
	{
		$id=$re['id'];
		
		
  ?>
  <tr>
  	<td align="center">
      <?=$i++?>
    </td>
    <td align="center">
      <?=$re['name']?>
    </td>
      <td align="center">
      <?=$re['name_tag']?>
    </td>
     <td align="center">
      <?=$re['price']?>
    </td>
     <td align="center">
      <?=$re['unit']?>
    </td>
      <td align="center">
		<?php
		if($re['active']==1) {echo "Hiện";}
			else
			{
				echo "Ẩn";
			}
		?>
    </td>
    
    <td align="center"><a style="color: black"  href="?mod=eservice_detail_update&id=<?=$id?>&id_eservice=<?=$id_eservice?>"><button class="btn btn-info"><i class="fas fa-pen-fancy"></i>Sửa</button> </a> | <a style="color: black"  href="" onClick="del(<?=$id?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button> </a></td>
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
	function del(a){
			
            $.ajax({
                url:'/lowkey/module/back/del.php',
                type:'POST',
                data:{ 
					id_detail_eservice:a,
					xoaeser_detail:1
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
</script>