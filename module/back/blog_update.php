<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}	
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	}	
	
	if(isset($_POST['content']))
	{
		$file = $_FILES['img_url'];
		$header=$_POST['header'];
		$content=$_POST['content'];
		$author=$_POST['author'];
		$title=$_POST['title'];
		$active=$_POST['active'];
		
		$date=date("Y-m-d H:i:s");
		if($file['name']!='')//Có submit file
		{
			//Lay ten file			
			$img_url = vn_str_filter(mt_rand().$file['name']);//mt_rand(): sinh so ngau nhien, xu ly trung ten file
			//Copy file toi thu muc chua anh
			copy($file['tmp_name'],"images/{$img_url}");
			$sql = "UPDATE `lk_blog` set `title`='$title',`header`='$header',`active`='$active',`author`='$author',`thumb`='$img_url' where `id`='$id'";
		mysqli_query($link, $sql);
		}
		else
		{
			$sql = "UPDATE `lk_blog` set `title`='$title',`header`='$header',`active`='$active',`author`='$author' where `id`='$id'";
		mysqli_query($link, $sql);
		}
							
		
		
		//Chuyen den trang view
		header("location:?mod=blog");
	}
	$qr="select * from `lk_blog` where id=$id";
	$rss=mysqli_query($link,$qr);
	$kd=mysqli_fetch_assoc($rss);
?>
<script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="lib/ckfinder/ckfinder.js"></script>
<form action="" method="post" enctype="multipart/form-data" class="col-md-12 col-sm-12 col-xs-12">
<table  class="col-md-12 col-sm-12 col-xs-12">
  <tr>
    <td width="130" height="36" align="center">Tiêu Đề</td>
    <td width="297" align="left">&nbsp;
    	<input type="text" name="title" value="<?=$kd['title']?>" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>     
  <tr>
    <td width="130" height="36" align="center">Header</td>
    <td width="297" align="left">&nbsp;
    	<input type="text" name="header" value="<?=$kd['header']?>" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>    
  <tr>
    <td width="130" height="36" align="center">Nội Dung <p style="color:red">*</p></td>
    <td width="600" align="left">&nbsp;
    	<textarea name="content" id="content" class="ckeditor" required><?=$kd['content']?></textarea>
    </td>
  </tr>
  <tr>
    <td width="130" height="36" align="center">Tác Giả</td>
    <td width="297" align="left">&nbsp;
    	<input type="text" name="author" value="<?=$kd['author']?>" class="col-md-12 col-sm-12 col-xs-12" required style="height:50px; margin-bottom:20px">
    </td>
  </tr>    
  <tr>
  		<td height="36" align="center">Thumbnail</td>
    <td align="left" style="line-height:10px">&nbsp;
      <label for="fileField"></label>
      <input type="file" name="img_url" id="fileField"  ></td>
  </tr>
 
  <tr>
    <td height="35" align="center">Ẩn / Hiện</td>
    <td align="left">&nbsp;
      <select name="active">
         <option value="1" <?php if($kd['active']==1) echo'selected';?>>Hiện</option>
        <option value="0" <?php if($kd['active']==0) echo'selected';?>>Ẩn</option>
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

<script>
	//Content
	var content_up = CKEDITOR.replace( 'content_up', {
		uiColor: '#ffccff',
		language:'vi',
	});
	var content_down = CKEDITOR.replace( 'content_down', {
		uiColor: '#ffccff',
		language:'vi',
	});
		
	CKFinder.setupCKEditor( content_up, 'lib/ckfinder/' ) ;
	CKFinder.setupCKEditor( content_down, 'lib/ckfinder/' ) ;
	
</script>