<script src="datatable/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="../datatable/jquery.dataTables.min.css" />
<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	
	
?>

<style>
 table.dataTable{
	 border-collapse:collapse;a
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
<a href=""><h2><i class="fas fa-arrow-circle-left"></i>Trở Về</h2></a>
<table class="col-md-12 col-sm-12 col-xs-12 table-borderless table-stripe" id="datatable" style="text-align:center; margin-bottom:110px">
  <thead style="color: white; background-color: #343a40; font-size: 18px;">
  <tr align="center">
  	<th>STT</th>
    <th class="text-left">Tiêu Đề</th>
    <th class="text-left">Thump</th>
    <th>Ẩn / Hiện</th>
    <th><a href="?mod=blog_add" style="color: white"><i class="fas fa-plus-circle"></i> Thêm</a></th>
  </tr>
  </thead>
  <?php   	
  	$sql = "SELECT * from `lk_blog`";  	
	$rel = mysqli_query($link,$sql);
	$i=1;
	while($re = mysqli_fetch_assoc($rel))
	{
  ?>
  <tr>   
  	<td align="center"><h5>
      <?=$i++?>
    </h5></td>
    <td align="left"><h5>&nbsp;&nbsp;
     <a href=""><strong style="color:#033"><?=$re['title']?></strong></a>
    </h5></td>        
    <td align="left"><h5>
      <img src="images/<?=$re['thumb']?>" height="300px" width="300px" alt="<?=$re['thumb']?>" />
    </h5></td>       
    <td align="center"><h5>
		<?php
		if($re['active']==1) {echo "Hiện";}
			else
			{
				echo "Ẩn";
			}
		?>
    </h5></td>  
    <td align="center"><h5><a href="?mod=blog_update&id=<?=$re['id']?>"><button class="btn btn-info"><i class="fas fa-pen-fancy"></i></button></a> 
    
      |<button class="btn btn-info" onClick="del(<?=$re['id']?>)"><i class="fas fa-file-image"></i></button>

     </h5></td>
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
					id_blog:a,
					xoablog:1
				},

            }).done(function(data) {
				window.location.reload();
            });
	}
</script>
