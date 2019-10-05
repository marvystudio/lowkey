<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}

	if(isset($_POST['active']))
	{
		$file = $_FILES['img_url'];
		$active=$_POST['active'];
		$links=$_POST['links'];
		$loai=$_POST['loai'];
		$name=$_POST['name'];
		$tenloai=$_POST['tenloai'];
		if($file['name']!='')//Có submit file
		{
			//Lay ten file			
			$img_url =vn_str_filter(mt_rand().$file['name']);//mt_rand(): sinh so ngau nhien, xu ly trung ten file
			//Copy file toi thu muc chua anh
			copy($file['tmp_name'],"images/{$img_url}");
			$sql = "INSERT into `lk_project` values (null,'$name','$img_url','$links','$loai','$tenloai','$active')";
			mysqli_query($link,$sql);
			echo $sql;
		}
		else	
		{
		$sql1 = "INSERT into `lk_project` values (null,$name,null,$links,$loai,$tenloai,$active)";
		mysqli_query($link, $sql1);
		echo $sql1;
		}
		
		
		
		//Chuyen den trang view
		//header("location:?mod=project");
	}
	
?>
<form action="" method="post" enctype="multipart/form-data" class="col-md-12 col-sm-12 col-xs-12">
<table  class="col-md-12 col-sm-12 col-xs-12">
 <tr>
    <td width="130" height="36" align="center">Tên</td>
    <td width="600" align="left">&nbsp;
    	<textarea name="name" id="name" ></textarea>
    </td>
  </tr>
  <tr>
  		<td height="36" align="center">Hình</td>
    <td align="left" style="line-height:10px">&nbsp;
      <label for="fileField"></label>
      <input type="file" name="img_url" id="fileField" required></td>
  </tr>
  <tr>
    <td width="130" height="36" align="center">Link</td>
    <td width="600" align="left">&nbsp;
    	<textarea name="links" id="links" ></textarea>
    </td>
  </tr>
  <tr>
    <td height="35" align="center">Loại</td>
    <td align="left">&nbsp;
      <select name="loai" class="form-control">
         <option value="2" >Pro</option>
        <option value="1" >Phổ Thông</option>
      </select>
     </td>
  </tr>
   <tr>
    <td width="130" height="36" align="center">Tên Loại</td>
    <td width="600" align="left">&nbsp;
    	<textarea name="tenloai" id="tenloai" ></textarea>
    </td>
  </tr>
  <tr>
    <td height="35" align="center">Ẩn / Hiện</td>
    <td align="left">&nbsp;
      <select name="active" class="form-control">
         <option value="1" selected >Hiện</option>
        <option value="0">Ẩn</option>
      </select>
     </td>
  </tr>
  <tr align="center">
    <td height="51" colspan="2">
      <input type="submit" value="Thêm"  class="btn btn-success">&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Đặt Lại"  class="btn btn-success">
      </td>
  </tr>
 
</table>
</form>

<script>

		
	CKFinder.setupCKEditor( content, 'lib/ckfinder/' ) ;
	
</script>