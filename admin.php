<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	session_start();
	ob_start();
	if(!isset($_SESSION['admin_id']))
	{
		header("location:login.php");	
	}
	
		if(isset($_SESSION['admin_name']))
		{
			$AdName=$_SESSION['admin_name'];	
		}
		else
		{
			header("location:login.php");	
		}	
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="img/shortcut/Christian-cross-icon.png" />-->
    <link href="https://fonts.googleapis.com/css?family=Exo+2|Pacifico" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="lib/admin/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/admin/demo.css">
    <link rel="stylesheet" type="text/css" href="lib/admin/paper-dashboard.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="lib/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/admin/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/admin/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="lib/admin/paper-dashboard.js"></script>
    <script type="text/javascript" src="lib/admin/bootstrap-notify.js"></script>
    <script type="text/javascript" src="lib/admin/demo.js"></script>
    <script type="text/javascript" src="lib/admin/chartjs.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

</head>

<body style="background-color: #F4F3EF">
<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="images/Option 2.png" alt="hinhanh.gif">
                </div>
            </a>
            <a href="#" class="simple-text logo-normal">
                <?= $AdName?>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php /*?><li class="<?php if ($_GET['mod'] == "dashboard" || $_GET['mod'] == "" ){echo "active";}?>" >
                    <a href="?mod=dashboard">
                        <i class="fas fa-signal"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "depart" || $_GET['mod'] == "update_depart" || $_GET['mod'] == "add_depart" || $_GET['mod'] == "cate"||$_GET['mod'] == "add_cate" || $_GET['mod'] == "update_cate" ||$_GET['mod'] == "post" || $_GET['mod'] == "update_post" || $_GET['mod'] == "add_post" ){echo "active";}?>">
                    <a href="?mod=depart">
                        <i class="far fa-edit"></i>
                        <p>Bài Đọc</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "upload" ){echo "active";}?>">
                    <a href="?mod=upload">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Upload Hình Soạn Post</p>
                    </a>
                </li>
                <?php 
				
				?>

                <li class="<?php if ($_GET['mod'] == "account" ||$_GET['mod'] == "update_acc" || $_GET['mod'] == "add_acc"   ){echo "active";} ?>">
                    <a href="?mod=account">
                        <i class="far fa-user"></i>
                        <p>tài khoản admin</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "staff" ||$_GET['mod'] == "update_staff" || $_GET['mod'] == "add_staff"   ){echo "active";} ?>">
                    <a href="?mod=staff">
                        <i class="far fa-clipboard"></i>
                        <p>nhân viên</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "slider" ||$_GET['mod'] == "update_slide" || $_GET['mod'] == "add_slide"   ){echo "active";} ?>">
                    <a href="?mod=slider">
                        <i class="far fa-images"></i>
                        <p>slide trang chủ</p>
                    </a>
                </li>
                
                
                <li class="<?php if ($_GET['mod'] == "chart" || $_GET['mod'] == "add_chart"   ){echo "active";} ?>">
                    <a href="?mod=chart">
                        <i class="fas fa-chart-bar"></i>
                        <p>biểu đồ</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "user" ){echo "active";} ?>">
                    <a href="?mod=user">
                        <i class="far fa-bell"></i>
                        <p>thành viên</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "note" ){echo "active";} ?>">
                    <a href="?mod=note">
                        <i class="far fa-user"></i>
                        <p>Ghi Chú Thay Đổi</p>
                    </a>
                </li>
               <?php */?>
                <li class="<?php if ($_GET['mod'] == "order" ){echo "active";} ?>">
                    <a href="?mod=order">
                        <i class="far fa-user"></i>
                        <p>Order</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "user" ){echo "active";} ?>">
                    <a href="?mod=user">
                        <i class="far fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
                 <li class="<?php if ($_GET['mod'] == "pack" ){echo "active";} ?>">
                    <a href="?mod=pack">
                        <i class="far fa-user"></i>
                        <p>Pack</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "service" ){echo "active";} ?>">
                    <a href="?mod=service">
                        <i class="far fa-user"></i>
                        <p>Service</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "project" ){echo "active";} ?>">
                    <a href="?mod=project">
                        <i class="far fa-user"></i>
                        <p>Project</p>
                    </a>
                </li>
                <li class="<?php if ($_GET['mod'] == "eservice" ){echo "active";} ?>">
                    <a href="?mod=eservice">
                        <i class="far fa-user"></i>
                        <p>Extend Service</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">ADMIN</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h5 class="card-title">
                               <?php /*?> <?php
                                switch (@$_GET['mod']){
                                    case ""; echo "Bài Đọc"; break;
                                    case "depart"; echo "Chủng Loại Bài Đọc"; break;
                                    case "add_depart"; echo "Thêm Chủng Loại Bài Đọc"; break;
                                    case "update_depart"; echo "Sửa Chủng Loại Bài Đọc"; break;
                                    case "account"; echo "Tài Khoản ADMIN"; break;
                                    case "add_acc"; echo "Thêm Tài Khoản ADMIN"; break;
                                    case "update_acc"; echo "Cập Nhật Tài Khoản ADMIN"; break;
                                    case "staff"; echo "Nhân Viên"; break;
                                    case "add_staff"; echo "Thêm Nhân Viên"; break;
                                    case "update_staff"; echo "Cập Nhật Nhân Viên"; break;
                                    case "slider"; echo "Slide Trang Chủ"; break;
                                    case "update_slide"; echo "Cập Nhật Slide Trang Chủ"; break;
                                    case "add_slide"; echo "Thêm Slide Trang Chủ"; break;
                                    case "chart"; echo "Biểu Đồ"; break;
                                    case "update_chart"; echo "Cập Nhật Biểu Đồ"; break;
                                    case "user"; echo "Thành Viên"; break;
                                    case "note"; echo "Ghi Chú"; break;

									 case "cate"; echo "Quản Lý Thể Loại Bài Đọc"; break;
									 case "update_cate"; echo "Cập Nhật Thể Loại Bài Đọc"; break;
                                    case "add_post"; echo "Thêm Post"; break;
                                    case "post"; echo "Quản Lý Post"; break;
                                    case "update_post"; echo "Cập Nhật Post"; break;

									 case "add_cate"; echo "Thêm Thể Loại"; break;

                                }
                                ?><?php */?>
                            </h5>
                        </div>
                        <div class="card-body ">
                            <hr>
                            <?php
                            $mod=@$_GET['mod'];
                            if($mod=='') $mod='order';
                            include("module/back/{$mod}.php");
                            ?>
                        </div>
                        <div class="card-footer ">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar-fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
    $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').fadeIn(0);
        },
        function() {
            $(this).find('.dropdown-menu').fadeOut(0);
        });

    $('ul.nav li.dropdown ul.dropdown-menu li.toggle').hover(function() {
            $(this).find('.collapse').addClass("in");
            $(this).find('.collapse').removeClass("out");
        },
        function() {
            $(this).find('.collapse').removeClass("in");
            $(this).find('.collapse').addClass("out");
        });
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>