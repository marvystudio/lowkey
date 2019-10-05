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
            <th class="text-left">Tên Dịch Vụ</th>
           <!-- <th>Giá</th>
            <th>Mô Tả</th>-->
            <th>Trạng Thái</th>
            <th><a href="?mod=add_service" style="color: white"><i class="fas fa-plus-circle"></i> Thêm</a>  </th>
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT * from `lk_service`";  	
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
      <a style="color: black" href=""> <?=$r['name']?></a>
    </td>
    <?php /*?><td align="center">
<?=$r['price']?>
    </td>
    <td align="center" >
		<?=$r['info']?>
    </td><?php */?>
     <td align="center">
		<?php
		if($r['active']==0) {echo "Ẩn";}
			else
			{
				echo "Hiện";
			}	
		?>
    </td>
   
	    <td align="center"><a style="color: black" href="?mod=update_service&id=<?=$r['id']?>"><button class="btn btn-info">Sửa<i class="fas fa-pen-fancy"></i></button> </a> | <a style="color: black"  href="" onClick="del(<?=$r['id']?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button> </a></td>
	
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
					id_service:a,
					xoaser:1
				},

            }).done(function(data) {
				window.reload();
            });
	}
</script>