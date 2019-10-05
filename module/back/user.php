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
            <th class="text-left">Tên Khách Hàng</th>
            <th>Mail</th>
            <th>SDT</th>
            <th>Công Ty</th>
            <th>Ngày Tạo</th>
            <th><?php /*?><a href="?mod=add_acc" style="color: white"><i class="fas fa-plus-circle"></i> Thêm</a><?php */?>  </th>
        </tr>
    </thead>
  <?php   	
  	$sql = "SELECT * from `lk_user`";  	
	$rel = mysqli_query($link,$sql);
	$i=1;
	while($r=mysqli_fetch_assoc($rel)){
		
	
	
  ?>
  <tr>
  	<td align="center">
      <?=$i++?>
    </td>
    <td class="text-left">
      <a style="color: black" href=""> <?=$r['name']?></a>
    </td>
    <td align="center">
      <?=$r['mail']?>
    </td>
    <td align="center" >
		<?=$r['phone']?>
    </td>
     <td align="center">
		<?php
		$r['company'];
		?>
    </td>
    <td align="center">
		<?php
		$r['date_create'];
		?>
    </td>
	<td> <a style="color: black"  href="" onClick="del(<?=$r['id'];?>)"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Xóa</button> </a></td>	
  
  </tr>
 	<?php
			}	
			?>
</table>
<script>
function del(a){
			
            $.ajax({
                url:'/lowkey/module/back/del_user.php',
                type:'POST',
                data:{ 
					id_user:a
				},

            }).done(function(data) {
				window.location.reload();
				window.location.reload();
            });
	}
</script>