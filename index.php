<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
?>

<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/bootstrap-horizon.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.1.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.css">
    <link rel="stylesheet" href="lib/animate.css">
    <link rel="stylesheet" href="lib/hamburgers.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="lib/wow.min.js"></script>
    <script src="lib/parallax.js"></script>
    <script src="lib/anime.js"></script>
    <script src="lib/jquery.scrollify.js"></script>
    <script src="lib/particles.js"></script>
    <script type="module"
            src="https://unpkg.com/@google/model-viewer@0.3.1/dist/model-viewer.js">
    </script>

    <script nomodule
            src="https://unpkg.com/@google/model-viewer@0.3.1/dist/model-viewer-legacy.js">
    </script>
</head>
<body>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Trang Chủ</a>
    <a href="projects.php">Sản Phẩm</a>
    <a href="blog.html">Blog</a>
    <a href="">Dịch Vụ</a>
    <a href="contact.html">Liên Hệ</a>
</div>

<div class="home-background">
    <span onclick="openNav()" class="d-block d-md-none home-nav-btn" style="">
        <i class="fas fa-bars fa-2x"></i>
    </span>
    <div class="container-fluid">
        <div class="row d-none d-md-block">
            <div class="home-nav-wrapper">
                <a href="index.html">
                    Trang Chủ
                </a>
                <a href="projects.php">
                    Sản Phẩm
                </a>
                <a href="blog.html">
                   Blog
                </a>
                <a href="#">
                    Dịch Vụ
                </a>
                <a href="contact.html">
                    Liên Hệ
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 text-center home-top-wrapper d-none d-md-block">
                <h1 class="home-top-title">
                    Thiết Kế Web <br>Chuyên Nghiệp
                </h1>
                <h5>Công ty làm web chuyên nghiệp cung cấp dịch vụ làm web đa nền tảng theo yêu cầu, đảm bảo từ kỹ thuật hạ tầng lẫn giao diện sáng tạo, tính năng chuyên nghiệp, chuẩn SEO.</h5>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 text-center home-top-wrapper  d-block d-md-none mt-5">
            <h1 class="home-top-title">
                Thiết Kế Web Chuyên Nghiệp Đa Nền Tảng
            </h1>
            <h6>
                Công ty làm web chuyên nghiệp cung cấp dịch vụ làm web đa nền tảng theo yêu cầu, đảm bảo từ kỹ thuật hạ tầng lẫn giao diện sáng tạo, tính năng chuyên nghiệp, chuẩn SEO.
            </h6>
        </div>
    </div>
</div>
<div class="services-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-3">
                    <h5 style="color: #aaaaaa; font-weight: bold">
                        VỀ CHÚNG TÔI
                    </h5>
                    <h1 style="font-family: utmneu;">
                       WEBSITE ĐỒ HỌA
                    </h1>
                    <div class="row home-desc">
                        <div class="col-md-3">
                            <hr class="custom-hr">
                        </div>
                        <div class="col-md-9">
                            <h6>
                                Đội ngũ Marvy gồm những lập trình viên, designers đầy đam mê nhiệt huyết với nhiều năm kinh nghiệm trong lĩnh vực thiết kế web, với tiêu chí lấy sự hài lòng của khách hàng làm mục tiêu, mong muốn được phụng sự và tạo ra những sản phẩm chất lượng cao, cam kết mang lại kết quả uy tín nhất cho những ai chọn chúng tôi làm người đồng hành.
                            </h6>
                            <button class="contact-btn btn">Liên Hệ</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 justify-content-center order-first order-lg-last">
                <img src="images/layer-desktop.png" class="img-fluid d-block d-lg-none"/>
                <div class="layer-3d d-none d-lg-flex">
                    <img src="images/layer-desktop.png" />
                    <img src="images/layer-desktop.png" />
                    <img src="images/layer-desktop.png" />
                    <img src="images/layer-desktop.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services-background position-relative">

    <img src="images/phone-res.png" class="img-fluid d-block d-lg-none"/>
    <div class="para-container overflow-hidden para-home d-none d-lg-flex" >
        <ul id="scene">
            <li class="layer" data-depth="1.1"><img src="images/phone1.png" width="100%"></li>
            <li class="layer" data-depth="1.3"><img src="images/phone2.png" width="100%"></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="mt-5">
                    <h5 class="text-md-right font-weight-bold" style="color: #aaaaaa;">
                        ĐIỂM KHÁC BIỆT
                    </h5>
                    <h1 class="text-md-right" style="font-family: utmneu;" >
                        UI UX - GIAO DIỆN THẨM MỸ CAO
                    </h1>
                    <div class="row home-desc">
                        <div class="col-md-12 text-md-right">
                            <h6>
                                <p>Marvy rất coi trọng thẩm mỹ trang web vì nó thể hiện bộ mặt thương hiệu của khách hàng. Khác với những dịch vụ làm website giá rẻ khác, Marvy tuyệt đối không làm ra những website có giao diện sơ sài.</p>
                                <p>Thiết kế UI UX của chúng tôi theo hơi hướng hiện đại, tối giản với lối sử dụng màu sắc hài hòa trên nền cấu trúc khoa học. Một khi chọn Marvy, website của khách hàng sẽ được đảm bảo thẩm mỹ thị giác và ổn định phần trãi nghiệm.</p>
                            </h6>
                            <button class="contact-btn btn">Liên Hệ</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-background" style="background: linear-gradient(90deg, rgba(64,58,156,1) 19%, rgba(6,208,210,1) 100%); color: white">
    <div class="text-center services-wrapper">
        <h1 class="home-top-title" style="color: white">
            Tại Sao Nên Chọn Marvy
        </h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="services-img">
                    <img src="images/103800-128.png" height="64" width="64"/>
                </div>
                <h3 class="services-name">UI UX</h3>
                <h6 class="services-desc">
                    Điểm sáng của Marvy- thẩm mỹ frontend và trãi nghiệm người dùng chuyên nghiệp
                </h6>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/998675-128.png" height="64" width="64"/>
                <h3 class="services-name">Tối ưu SEO</h3>
                <h6 class="services-desc">
                    Website chuẩn SEO để khách hàng dễ dàng lên top Google, tăng doanh số dễ dàng
                </h6>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/185097-128.png" height="64" width="64"/>
                <h3 class="services-name">Cơ sở hạ tầng mạnh mẽ</h3>
                <h6 class="services-desc">
                    Kĩ thuật backend, tốc độ trang web, mọi tính năng được lập trình cẩn thận với thuật toán tối ưu hóa
                </h6>
            </div>
        </div>
        <div class="row mt-md-5">
            <div class="col-md-4 text-center">
                <div class="services-img">
                    <img src="images/4552605-128.png" height="64" width="64"/>
                </div>
                <h3 class="services-name">Đa nền tảng</h3>
                <h6 class="services-desc">
                    Hiển thị website đa nền tảng, desktop, mobile, tablet,… với độ tương thích cao
                </h6>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/384881-128.png" height="64" width="64"/>
                <h3 class="services-name">Dịch vụ hậu mãi ưu đãi</h3>
                <h6 class="services-desc">
                    Khi chọn Marvy, khách hàng sẽ nhận được dịch vụ bảo hành tận tình, hỗ trợ các sự cố 24/7 và bảo trì vĩnh viễn
                </h6>
            </div>
            <div class="col-md-4 text-center">
                <img src="images/185093-128.png" height="64" width="64"/>
                <h3 class="services-name">Trang quản trị thân thiện</h3>
                <h6 class="services-desc">
                    Không cần phải có kiến thức lập trình, khách hàng vẫn có thể sử dụng và biên tập nội dung dễ dàng
                </h6>
            </div>
        </div>
    </div>
</div>

<div class="services-background" >
    <div class="text-center services-wrapper">
        <h1 class="home-top-title">
            Qui Trình Làm Việc
        </h1>
    </div>
    <div class="container mt-4">
        <ul class="nav nav-tabs custom-tab justify-content-center">
             <?php 
			 $flag=0;
			$sql="select * from `lk_procedure` order by `orders`";
			$r = mysqli_query($link,$sql);
			while($rs=mysqli_fetch_assoc($r))
			{
			
			?>
            <li class="nav-item">
                <a class="nav-link <?php if($flag==0){ echo "active";$flag=1;} ?>" data-toggle="tab" href="#why<?=$rs['orders']?>"><?= $rs['orders'] ?></a>
            </li>
            <?php } ?>
           <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#why2">2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#why3">3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#why4">4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#why5">5</a>
            </li>-->
        </ul>
        <div class="tab-content mt-2">
           	<?php
			$r1 = mysqli_query($link,$sql);
            while($rs1=mysqli_fetch_assoc($r1))
			{
			?>
            <div class="tab-pane container <?php if($flag==1){ echo "active";$flag=2;} else { echo "fade";} ?> text-center" id="why<?=$rs1['orders']?>">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> <?=$rs1['content']?></h1>
            </div>
            <?php } ?>
            <!--<div class="tab-pane container fade text-center" id="why2">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> Phân tích, đưa ra giải pháp, thiết kế layout giao diện</h1>
            </div>
            <div class="tab-pane container fade text-center" id="why3">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> Tiến hành lập trình, triển khai và tối ưu hóa các tính năng</h1>
            </div>
            <div class="tab-pane container fade text-center" id="why4">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> Kiểm tra, testing</h1>
            </div>
            <div class="tab-pane container fade text-center" id="why5">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> Nghiệm thu và bàn giao sản phẩm</h1>
            </div>-->
        </div>
    </div>

</div>

<div class="services-background">
    <div class="text-center services-wrapper">
        <h1 class="home-top-title">
            Chọn Dịch Vụ Phù Hợp Với Bạn
        </h1>
    </div>
    <div class="container mt-5">
        <div class="card-columns home-price-columns">
        	<?php 
			$sql2="select * from `lk_pack` where `active`='1'";
			$r2=mysqli_query($link,$sql2);
			while($rs2=mysqli_fetch_assoc($r2)){
			$id_pack= $rs2['id'];
			?>
            <div class="card home-price">
                <div class="card-body text-center pl-5 pr-5">
                    <h2 class="card-text">
                        <?= $rs2['name']?>
                    </h2>
                    <h6 class="card-text">
                        <?= $rs2['info']?>
                    </h6>
                    <h2 class="card-text">
                       <?= $rs2['price']?> VND
                    </h2>
                    <a href="detailcheck.php">
                    <button class="btn contact-btn mt-3 mb-3">
                        Đăng Ký
                    </button>
                    </a>
                </div>
                <div class="card-footer text-center font-weight-bold">
                <?php 
				$sql3="select * from `lk_sop` as b, `lk_service` as c where b.id_service=c.id and b.id_pack={$id_pack}";
				$r3=mysqli_query($link,$sql3);
				while($rs3=mysqli_fetch_assoc($r3)){
				?>
                    <p class="card-text"><?= $rs3['name']?></p>
                <?php }?>  
                 
                   <!-- <p class="card-text">Không giới hạn băng thông</p>
                    <p class="card-text">Responsive</p>
                    <p class="card-text">Chuẩn SEO</p>
                    <p class="card-text">Miễn phí 1 mail doanh nghiệp</p>
                    <p class="card-text">Hỗ trợ miễn phí SSL</p>-->
                </div>
            </div>
            <?php }?>
           <!-- <div class="card home-price">
                <div class="card-body text-center pl-5 pr-5">
                    <h2 class="card-text">
                        Marvy Studio
                    </h2>
                    <h6 class="card-text">
                        Giao diện tương tác, branding 4.0, hỗ trợ web AR/XR. Phù hợp với đối tượng doanh nghệp muốn làm nổi bật thương hiệu của mình.
                    </h6>
                    <h2 class="card-text">
                        Liên Hệ
                    </h2>
                    <button class="btn contact-btn mt-3 mb-3">
                        Liên Hệ
                    </button>
                </div>
                <div class="card-footer text-center font-weight-bold">
                    <p class="card-text">Bao gồm các quyền lợi của gói Business</p>
                    <p class="card-text">Hỗ trợ AR</p>
                    <p class="card-text">Hỗ trợ hình 360</p>
                    <p class="card-text">Thiết kế logo chuyên nghiệp</p>
                    <p class="card-text">Thiết kế mô hình 3D</p>
                    <p class="card-text">Thiết kế hình ảnh / banner chuyên nghiệp</p>
                </div>
            </div>-->
        </div>
    </div>
</div>

<div class="services-background">
    <div class="text-center services-wrapper">
        <h1 class="home-top-title">
            So Sánh Chi Tiết
        </h1>
    </div>
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-borderless price-table">
                <tr>
                    <th class="d-none d-md-block">

                    </th>
                    <th class="text-center">
                        BUSINESS
                    </th>
                    <th class="text-center">
                        STUDIO
                    </th>
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Bản Thiết Kế Độc Quyền
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Bản Thiết Kế Độc Quyền
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Bản Thiết Kế Độc Quyền
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Trang Admin
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Trang Admin
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Trang Admin
                            </span>
                        X
                    </td>
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Hỗ Trợ 24/7
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                SSL
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                SSL
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        SSL
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                SSL
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                SSL
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Chatbot
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Chatbot
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Chatbot
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Không Giới Hạn Băng Thông
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Không Giới Hạn Băng Thông
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Không Giới Hạn Băng Thông
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Chuẩn SEO
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Chuẩn SEO
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Chuẩn SEO
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Mail Doanh Nghiệp
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Mail Doanh Nghiệp
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Mail Doanh Nghiệp
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Hỗ Trợ Xem Ảnh 360
                    </td>
                    <td class="text-center price-check">
                            <span class="d-block d-md-none">
                                Hỗ Trợ Xem Ảnh 360
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Hỗ Trợ Xem Ảnh 360
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Hỗ Trợ Xem AR
                    </td>
                    <td class="text-center price-check">
                            <span class="d-block d-md-none">
                                Hỗ Trợ Xem AR
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                Hỗ Trợ Xem AR
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Thiết Kế Logo Chuyên Nghiệp
                    </td>
                    <td class="text-center price-check">
                            <span class="d-block d-md-none">
                                 Thiết Kế Logo Chuyên Nghiệp
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                 Thiết Kế Logo Chuyên Nghiệp
                            </span>
                        X
                    </td >
                </tr>
                <tr>
                    <td class="price-name d-none d-md-block">
                        Web Tương Tác
                    </td>
                    <td class="text-center price-check">
                            <span class="d-block d-md-none">
                                 Web Tương Tác
                            </span>
                        X
                    </td>
                    <td class="text-center price-check main">
                            <span class="d-block d-md-none">
                                 Web Tương Tác
                            </span>
                        X
                    </td >
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="services-background">
    <div class="text-center services-wrapper">
        <h1 class="home-top-title">
            Blog
        </h1>
    </div>
    <div class="container">
        <div class="row mb-md-5">
            <?php
			$sql4="select * from `lk_blog` where `active`=1";
			$r4=mysqli_query($link,$sql4);
			while($rs4=mysqli_fetch_assoc($r4)){
			 ?>
            <div class="col-md-4 news-wrapper">
                <div class="news-content" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/<?=$rs4['thumb']?>) center">
                    <div class="news-title-wrapper">
                        <a href="#"><?=$rs4['title']?></a>
                        <div><span style="color:white"><?=$rs4['author']?></span> - <?=$rs4['date_create']?></div>
                    </div>
                </div>
            </div>
            <?php }?>
            <!--<div class="col-md-4 news-wrapper">
                <div class="news-content" style="background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/clouds-cloudy-cold-2437295.jpg) center">
                    <div class="news-title-wrapper">
                        <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                        <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 news-wrapper">
                <div class="news-content" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/fog-foggy-forest-4827.jpg) center">
                    <div class="news-title-wrapper">
                        <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                        <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                    </div>
                </div>
            </div>-->
        </div>
        
    </div>
</div>

<footer class="home-footer mt-5 p-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 style="color: white; font-family: harabara;">MARVY lite</h1>
                <h5 style="color: white; font-family: harabara; opacity: 0.5">Liên Kết Với Marvy Studio</h5>
                <h6 class="mt-5 mb-2" style="font-family: harabara;opacity: 0.5;color: white;">Theo Dõi Chúng Tôi</h6>
                <span style="opacity: 0.5;color: white;">
                    <i class="fab fa-facebook fa-2x fa-fw"></i>
                    <i class="fab fa-instagram fa-2x fa-fw"></i>
                    <i class="fab fa-google-plus fa-2x fa-fw"></i>
                </span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
    $(function() {
        $.scrollify({
            section : ".project-section",
        });
    });
</script>

