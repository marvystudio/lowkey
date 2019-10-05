<?php
	require_once("lib/connect.php");
	session_start();
	ob_start();
	if(isset($_SESSION['admin_id']))
	{
		header("location:admin.php");
	}


if(isset($_POST['user']))
{
	$user=$_POST['user'];
	
	//Mã hóa MK
	$pass=$_POST['pass'];
	
	//Kiem tra bang cach truy van vao DB
	$sql="select * from `lk_admin` where `username`='{$user}' and `password`='{$pass}'";
	$rs=mysqli_query($link,$sql);
	
	if(mysqli_num_rows($rs)>0)
	{
		$r=mysqli_fetch_assoc($rs);
		$_SESSION['admin_id']=$r['id'];
		$_SESSION['admin_name']=$r['name'];
		
		
		
		header("location:admin.php");
	}
	else
	{
		//Tạo Session lưu tạm (hiện lại) email sau khi nhập sai
		$_SESSION['email']=$user;
?>		
		<script> alert('Sai tài khoản hoặc mật khẩu!'); </script>";	
<?php		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | SmartInvestors</title>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
    html, body
    {
        height: 100%;
    }
    .btn-default{
        background-color: #f2bd10;
        color: white;
        transition: 0.3s;
    }
    .btn-default:hover{
        background-color: orange;
        color: white;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row" style="background-image: url(images/sea_shore_sky_sunset_88046_1920x1080.jpg) ;height: 100vh; background-position: center; background-size: cover">
        <div class="col-md-6" align="center" >
            <div style="width: 70%; margin-top: 120px;  background-color: rgba(0,0,0,0.5); padding: 50px;">
                <p style="color: #f2bd10; font-size: 40px; font-weight: bold">Đăng Nhập</p>
                <form class="form-horizontal" method="post" id="login_form" action="">
                    <fieldset>
                        <div class="form-group form-group-lg">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" style="background-color: transparent; color: white"><i class="glyphicon glyphicon-user"></i></span> 
                                    <input name="user"  placeholder="Username" style="background-color: transparent; border-top-right-radius: 10px; border-bottom-right-radius: 10px; color: white" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon" style="background-color: transparent; color: white"><i class="glyphicon glyphicon-lock"></i></span> <input name="pass" placeholder="Password" style="background-color: transparent; border-top-right-radius: 10px; border-bottom-right-radius: 10px; color: white"  class="form-control" type="password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-default col-xs-12" style="font-weight: bold; border-radius: 10px;">Đăng Nhập</button>
                            </div>
                        </div>
                        <hr width="30%">
                        <div style="color: silver; font-size: 15px">
                            Quên mật khẩu?
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>