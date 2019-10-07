<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	if(isset($_GET['id'])){
	$id=$_GET['id'];
	}
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$tag=$_POST['nametag'];
		$active=$_POST['active'];
		$update="UPDATE `lk_eservice` set `name`='$name',`name_tag`='$tag',`active`='$active' where `id`='$id'";
		mysqli_query($link,$update);
		header("location:?mod=eservice");
	}
	$sql = "SELECT * from `lk_eservice` where id=$id";  	
	$rel = mysqli_query($link,$sql);
	$r=mysqli_fetch_assoc($rel);
?>

<form method="post">
Tên:<input type="text" name="name" required value="<?=$r['name']?>"><br/>
NameTag:<input type="text" name="nametag" value="<?=$r['name_tag']?>"><br />
Trạng Thái:
 <select name="active" >
       <option value="1" <?php if($r['active']==1) echo'selected';?>>Hiện</option>
        <option value="0" <?php if($r['active']==0) echo'selected';?>>Ẩn</option>
      </select>
      <br/>
      <button>Cập nhật</button>
</form>