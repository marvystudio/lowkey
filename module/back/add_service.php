<?php 

if(isset($_POST['name']))
	{   
		
		$name=$_POST['name'];
		
		$active=$_POST['active'];
			$sql = "Insert into `lk_service` values (null,'$name',1,'$active')";
		mysqli_query($link, $sql);
		header("location:?mod=service");
	}
?>

<div class="container-fluid" style="margin-bottom:50px">

<form action="" method="post" enctype="multipart/form-data" class="col-md-12 col-sm-12 col-xs-12">
<table class="col-md-12 col-sm-12 col-xs-12">
  <tr>
    <td width="130" height="36" align="center">Tên Gói</td>
    <td width="297" align="left">&nbsp;
    	<input value="" type="text" name="name" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>  
  <?php /*?><tr>
    <td width="130" height="36" align="center">Giá</td>
    <td width="297" align="left">&nbsp;
    	<input value="<?=$rs['price'] ?>" type="text" name="price" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>    
  <tr>
    <td width="130" height="36" align="center">Mô Tả <p style="color:red">*</p></td>
    <td width="600" align="left">&nbsp;
    	<textarea  name="mota" id="mota" class="ckeditor" required><?=$rs['info'] ?></textarea>
    </td>
  </tr>
  <?php */?>
    <td height="35" align="center">Ẩn / Hiện</td>
    <td align="left">&nbsp;
      <select name="active">
        <option value="1">Hiện</option>
        <option value="0">Ẩn</option>
      </select></td>
  </tr>
 
  
  <tr align="center">
    <td height="51" colspan="2">
      <input type="submit" value="Thêm"  class="btn btn-success">&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Đặt Lại"  class="btn btn-success">
      </td>
  </tr>
 
</table>
</form>
</div>
