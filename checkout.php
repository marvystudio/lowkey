<?php 
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
	if(isset($_GET['iduser']))
	{
		$iduser=$_GET['iduser'];
 	}
	if(isset($_GET['idorder']))
	{
		$idorder=$_GET['idorder'];
 	}
	$total=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận</title>
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
<div class="detail-body">
    <div  id="particles" style=" background-color:  rgba(64,58,156,1); width: 100%; height: 30vh;"></div>
    <div class="container" style="margin-top: -150px">
        <div class="row">
            <div class="col-12">
                <div class="detail-info detail-form">
                    <div class="row">
                        <div class="col-12">
                            <h3>THÔNG TIN <b>KHÁCH HÀNG</b></h3>
                        </div>
                    </div>
                    <hr>
                    <?php 
					$qr="select * from `lk_user` where `id`={$iduser}";
					$s=mysqli_query($link,$qr);
					$rs=mysqli_fetch_assoc($s);
					?>
                    <div class="row">
                        <table class="table table-borderless">
                            <tr>
                                <td>
                                    Khách Hàng:
                                </td>
                                <td>
                                    <b><?=$rs['name']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SDT:
                                </td>
                                <td>
                                    <b><?=$rs['phone']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <b><?=$rs['mail']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tên công ty:
                                </td>
                                <td>
                                   <b><?=$rs['company']?></b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Các dịch vụ đăng ký:
                                </td>
                                <td>
                                 <?php 
								$a="select * from `lk_order` where `id_user`={$iduser}";
								$b=mysqli_query($link,$a);
								$ser=mysqli_fetch_assoc($b);
								$idorder=$ser['id'];
								$a1="select * from `lk_detail_order` where `id_order`={$idorder}";
								$b1=mysqli_query($link,$a1);
								
								?>
                                    <ul class="list-unstyled" style="font-weight: bold">
                                    <?php 
										while($result=mysqli_fetch_assoc($b1)){
										$idser=$result['id_eservice'];
										$a2="select * from `lk_detail_eservice` where id={$idser}";
										
										$b2=mysqli_query($link,$a2);
										$q=mysqli_fetch_assoc($b2);
										$total=$total + $q['price'];
										
									?>
                                        <li> <?=$q['name']?> - <?=$q['price']?>VND</li>
                                 	<?php 
									}
									?>
                                        
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tổng tiền:
                                </td>
                                <td>
                                    <b>
                                        <?=$total?> VND
                                    </b>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h6 style="color: #808285;">
                    Cảm ơn anh/ chị đã dành thời gian để điền yêu cầu thiết kế
                    Nếu anh/chị có thông tin, tài liệu gì thêm liên quan, vui lòng gửi email cho chúng tôi.
                    Marvy lite sẽ phản hồi trong thời gian sớm nhất.
                    Xin chân thành cám ơn.
                </h6>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn detail-btn detail-send">
                    Gửi
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    particlesJS.load('particles','particlesjs-config-detail.json');
</script>