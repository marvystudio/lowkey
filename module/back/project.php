<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
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

<table class="col-md-12 col-sm-12 col-xs-12 table-hover table-striped  " id="datatable" style="text-align:center; margin-bottom:110px">
    <thead style="color: white; background-color: #343a40; font-size: 18px;">
        <tr>
            <th>STT</th>
            <th style="text-align:center">Tên</th>
            <th style="width:30%">Hình</th>
            <th>Link</th>
            <th>Loại</th>
            <th>Tên Loại</th>
            <th>Trạng Thái</th>
            <th><a href="?mod=project_add" style="color: white"><i class="fas fa-plus-circle"></i> Thêm</a></th>
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT * from `lk_project`";  	
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
    <td class="text-left">
      <img src="images/<?=$re['thumb']?>" height="200px" width="200px" alt="hinhanh.gif">
    </td>
    <td align="center">
    <?php 
		if($re['link']!=null)
		{
			echo $re['link'];
		}
	?>
     <td align="center">
		<?php
		if($re['type']==1) {echo "Phổ Thông";}
			else
			{
				echo "Pro";
			}
		?>
    </td>
    
      <td align="center">
		<?php
		echo $re['kind'];
		?>
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
    
    <td align="center"><a style="color: black"  href="?mod=project_update&id= <?=$id?>"><button class="btn btn-info"><i class="fas fa-pen-fancy"></i>Sửa</button> </a> | <a style="color: black"  href="" onClick="del(<?=$id?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button> </a></td>
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
					id_project:a,
					xoapro:1
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
</script>