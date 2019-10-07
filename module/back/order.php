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
            <th class="text-left">ID Order</th>
            <th>Tên Khách</th>
            <th>Ngày Lập Order</th>
            <th>Trạng Thái</th>
            <th><?php /*?><a href="?mod=add_acc" style="color: white"><i class="fas fa-plus-circle"></i> Thêm</a><?php */?>  </th>
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT * from `lk_order`";  	
	$rel = mysqli_query($link,$sql);
	$i=1;
	while($re = mysqli_fetch_assoc($rel))
	{
		$id=$re['id']; 
		$iduser=$re['id_user'];
		$userqr=mysqli_query($link,"SELECT * from `lk_user` where id='{$iduser}'");
		$nameuser=mysqli_fetch_assoc($userqr);
  ?>
  <tr>
  	<td align="center">
      <?=$i++?>
    </td>
    <td class="text-left">
 <?=$re['id']?>
       <a style="color: black" href="?mod=order_detail&iduser=<?=$iduser?>&idorder=<?=$id?>"> <button class="btn btn-info">Kiểm tra</button></a>
    </td>
    <td align="center">
      <?=$nameuser['name']?>
    </td>
    <td align="center" >
		<?=$re['date_create']?>
    </td>
     <td align="center">
		<?php
		if($re['active']==0) {echo "Đang xử lý";}
			else
			{
				echo "Đã Xác Nhận";
			}	
		?>
    </td>
    <?php
    if($re['active']==0)
	{
	?> 
	    <td align="center"><a style="color: black" onclick="act(<?=$id?>)"><button class="btn btn-info">Xác Nhận<i class="fas fa-pen-fancy"></i></button> </a> | <a style="color: black"  href="" onClick="del(<?=$id?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hủy</button> </a></td>
		<?php	
	}
            else
			{
				?>
                 <td> <a style="color: black"  href="" onClick="del(<?=$id?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hủy</button> </a></td>	
				<?php
			}	
			?>
  
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
	function act(a){
			
            $.ajax({
                url:'/lowkey/module/back/act_order.php',
                type:'POST',
                data:{ 
					id_order:a
				},

            }).done(function(data) {
				window.location.reload();
				
            });
	}
	function del(a){
			
            $.ajax({
                url:'/lowkey/module/back/del_order.php',
                type:'POST',
                data:{ 
					id_order:a
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
</script>