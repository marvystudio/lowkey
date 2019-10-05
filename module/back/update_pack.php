<?php 
if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}
	$sql1="select * from `lk_pack` where `id`=$id";
	$r=mysqli_query($link,$sql1);
	$rs=mysqli_fetch_assoc($r);
	
if(isset($_POST['mota']))
	{   
		
		$name=$_POST['name'];
		$price=$_POST['price'];
		$mota=$_POST['mota'];
		$active=$_POST['active'];
		$sql = "UPDATE `lk_pack` SET `name`='$name',`price`='$price',`info`='$mota',`active`='$active' where `id`='$id' ";
		mysqli_query($link, $sql);
		header("location:?mod=pack");
	}
?>

<div class="container-fluid" style="margin-bottom:50px">

<form action="" method="post" enctype="multipart/form-data" class="col-md-12 col-sm-12 col-xs-12">
<table class="col-md-12 col-sm-12 col-xs-12">
  <tr>
    <td width="130" height="36" align="center">Tên Gói</td>
    <td width="297" align="left">&nbsp;
    	<input value="<?=$rs['name'] ?>" type="text" name="name" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>  
  <tr>
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
  
    <td height="35" align="center">Ẩn / Hiện</td>
    <td align="left">&nbsp;
      <select name="active">
        <option value="1" <?php if($rs['active']==1) echo'selected';?>>Hiện</option>
        <option value="0" <?php if($rs['active']==0) echo'selected';?>>Ẩn</option>
      </select></td>
  </tr>
 
  
  <tr align="center">
    <td height="51" colspan="2">
      <input type="submit" value="Cập Nhật"  class="btn btn-success">&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Đặt Lại"  class="btn btn-success">
      </td>
  </tr>
 
</table>
</form>
</div>
<script>
	//Content
	var mota = CKEDITOR.replace( 'mota', {
		uiColor: '#ffccff',
		language:'vi',
	});
	
		
	CKFinder.setupCKEditor( mota, 'lib/ckfinder/' ) ;

</script>