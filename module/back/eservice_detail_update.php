<?php
	if(! isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	if(isset($_GET['id_eservice'])){
		$id_eservice=$_GET['id_eservice'];
	}
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$tag=$_POST['nametag'];
		$active=$_POST['active'];
		$price=$_POST['price'];
		$unit=$_POST['unit'];
		mysqli_query($link,"UPDATE `lk_detail_eservice` set `name`='$name',`name_tag`='$tag',`active`='$active',`price`='$price',`unit`='$unit' where `id`='$id'");
		header("location:?mod=eservice_detail&id={$id_eservice}");
		
	}
	$sql = "SELECT * from `lk_detail_eservice` where id=$id";  	
	$rel = mysqli_query($link,$sql);
	$r=mysqli_fetch_assoc($rel);
?>



<form method="post">
Tên:<input type="text" name="name" value="<?=$r['name']?>" required><br/>
NameTag:<input type="text" name="nametag" value="<?=$r['name_tag']?>"><br />
Giá:<input type="number" name="price" required value="<?=$r['price']?>"><br />
Đơn Vị:<input type="text" name="unit" required value="<?=$r['unit']?>"><br/>
Trạng Thái:
 <select name="active" >
          <option value="1" <?php if($r['active']==1) echo'selected';?>>Hiện</option>
        <option value="0" <?php if($r['active']==0) echo'selected';?>>Ẩn</option>
      </select>
      <br/>
      <button>Cập Nhật</button>
</form>