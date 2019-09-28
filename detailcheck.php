<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết</title>
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
        <!--<div class="row">
            <div class="col-12">
                <img src="images/demo6.png" class="img-fluid detail-img" style=""/>
            </div>
        </div>
        <div class="row">
            <div class="col-12  ">
                <div class="detail-info">
                    <h1>
                        Mẫu Website Interactive Giới Thiệu Sản Phẩm Dự ÁN
                    </h1>
                    <div>
                        <span class="mr-2">
                            <img src="images/111117-128.png" width="28"/>
                        </span>
                        <a class="detail-tag" href="#">Mẫu Website Bán Hàng</a>
                        <a class="detail-tag" href="#">Mẫu Website Bán Hàng</a>
                        <a class="detail-tag" href="#">Mẫu Website Bán Hàng</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="detail-price">
                                7.000.000đ
                            </h2>
                        </div>
                        <div class="col-md-6 text-sm-right">
                            <button class="btn detail-btn">
                                <i class="far fa-eye fa-fw"></i> Live Preview
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            Việc thiết kế website công ty nội thất đã không còn quá xa lạ với những công ty thiết kế website như Mona Media chúng tôi. Trong những năm gần đây, nhu cầu thiết kế website nội thất tăng đột biến vì có lẽ thị trường nhà ở đang nóng dần lên cũng như những nhu cầu của người dùng về thẩm mĩ đã  được nâng lên, vì thế mà họ thường cần dịch vụ trang trí nội thất hoặc bán nội thất. Mẫu website thiết kế nội thất giống amore-architecture là một mẫu website hoàn hảo cho ai chưa có ý tưởng riêng cho việc là mebsite của mình. Website tại Mona Media luôn được tối ưu  tất cả các chức năng cũng như các tiêu chuẩn như chuẩn SEO- chuẩn di động.
                        </div>
                    </div>
                </div>
            </div>

        </div>-->
        <form>
        <div class="row detail-text-divider mt-5">
            <div class="col-12">
                <div class="detail-info detail-form">
                    <div class="row">
                        <div class="col-12">
                            <h3>THÔNG TIN <b>KHÁCH HÀNG</b></h3>
                            <h6>
                                Vui lòng để lại thông tin của anh/chị để chúng tôi dễ dàng liên hệ
                            </h6>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input id="namecus" class="form-control detail-input" type="text" placeholder="Nhập tên(*)" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input id="mailcus" class="form-control detail-input" type="text" placeholder="Nhập email(*)" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input id="phonecus" class="form-control detail-input" type="text" placeholder="Nhập số điện thoại(*)" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input id="comcus" class="form-control detail-input" type="text" placeholder="Tên công ty">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row detail-text-divider mt-5 " style="padding-left: 35px">
            <div class="col-12 mb-4">
                <h3>GÓI <b>SỬ DỤNG</b></h3>
                <ul class="nav nav-tabs detail-tab">
                 <li class="nav-item">
                <?php 
				$qrpack="select * from `lk_pack` where `active`=1";
				$rspack = mysqli_query($link,$qrpack);
				while($pack=mysqli_fetch_assoc($rspack)){
					
				
				?>
                   
                        <input type="radio" checked name="pack" value="<?=$pack['id']?>"> <?=$pack['name']?>
                    
                   <?php 
				}
				   ?>
                   <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#marvy">Marvy Studio</a>
                    </li>	-->
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane container active p-0" id="business">
                <div class="row detail-text-divider mt-5">
                    <div class="col-12">
                        <div class="detail-info detail-form">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h3>THÔNG TIN <b>THIẾT KẾ</b></h3>
                                    <h6>
                                        Cho chúng tôi biết về các thông tin thiết kế của anh/chị để chúng tôi có thể phục vụ anh/chị một cách tốt nhất
                                    </h6>
                                </div>
                            </div>
                             <?php 
							$sql="select * from `lk_eservice` where `active`=1";
							$rs=mysqli_query($link,$sql);
							while($r=mysqli_fetch_assoc($rs)){
								$id_eser=$r['id'];
							// check box
								
							?>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h4>
                                        <?= $r['name'] ?>
                                    </h4>
                                </div>
                                <?php 
								$sql1="select * from `lk_detail_eservice` where `active`=1 and `id_eservice`='{$id_eser}'";
								$rs1=mysqli_query($link,$sql1);
								while($r1=mysqli_fetch_assoc($rs1)){
									
								?>
                                
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        <?= $r1['name'] ?><br>
                                        <span>
										<?php if($r1['price']!=0)
										{ 
											echo $r1['price']."/".$r1['unit'];
										} 
										?>
                                        </span>
                                        <input type="checkbox" checked="checked" name="checkbox<?= $r1['id']?>" value="<?= $r1['price']?>">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                	<?php 
									}
								
									?>
                                
                                
                            </div>
                            <?php 
								
								}
							?>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h3><b>THANH TOÁN</b></h3>
                                </div>
                                <div class="col-md-6 text-md-right" >
                                    <h2>
                                        <b id="pricetotal"> 0 VND</b>
                                    </h2>
                                </div>
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
                        <button class="btn detail-btn" type="button" onClick="save()">
                            Tiếp
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade p-0" id="marvy">
                <div class="row detail-text-divider mt-5">
                    <div class="col-12">
                        <div class="detail-info detail-form">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h3>THÔNG TIN <b>THIẾT KẾ</b></h3>
                                    <h6>
                                        Cho chúng tôi biết về các thông tin thiết kế của anh/chị để chúng tôi có thể phục vụ anh/chị một cách tốt nhất
                                    </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h4>
                                        Lĩnh vực kinh doanh
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Website thương mại điện tử<br>
                                        <span>20.000.000 VND</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Website giới thiệu doanh nghiệp<br>
                                        <span>Free</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Website bán hàng<br>
                                        <span>50.000.000 VND</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Website tư vấn<br>
                                        <span>50.000.000 VND</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h4>
                                        Dịch vụ thiết kế logo
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tôi đã có logo<br>
                                        <input type="radio" checked="checked" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Thiết kế cơ bản<br>
                                        <span>199k/logo</span>
                                        <input type="radio" checked="checked" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Thiết kế chuyên nghiệp<br>
                                        <span>799k/logo</span>
                                        <input type="radio" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="logoqty">
                                        Số Lượng
                                    </label>
                                    <input id="logoqty" type="number" min="1" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h4>
                                        Dịch vụ thiết kế banner
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tôi đã có banner<br>
                                        <input type="radio" checked="checked" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Thiết kế cơ bản<br>
                                        <span>199k/logo</span>
                                        <input type="radio" checked="checked" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Thiết kế chuyên nghiệp<br>
                                        <span>799k/logo</span>
                                        <input type="radio" name="logo">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="bannerqty">
                                        Số Lượng
                                    </label>
                                    <input id="bannerqty" type="number" min="1" class="form-control">
                                </div>
                            </div>
                            <!-- /design info -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Tên miền
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tôi đã có tên miền<br>
                                        <span>Free</span>
                                        <input type="radio" name="domain" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tên miền .vn<br>
                                        <span>600k/năm</span>
                                        <input type="radio" name="domain">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tên miền .com<br>
                                        <span>200k/năm</span>
                                        <input type="radio" name="domain">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tên miền lạ (.studio, .media, ...)<br>
                                        <span>1000k/năm</span>
                                        <input type="radio" name="domain">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="domainqty">
                                        Số Năm (tối đa 4 năm)
                                    </label>
                                    <input id="domainqty" type="number" min="1" max="4" class="form-control">
                                </div>
                            </div>
                            <!-- /domain info -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Hosting
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Tôi đã có host<br>
                                        <span>Free</span>
                                        <input type="radio" name="hosting">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Host 1 năm<br>
                                        <span>500k/năm</span>
                                        <input type="radio" name="hosting" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Host 2 năm<br>
                                        <span>800k/năm</span>
                                        <input type="radio" name="hosting">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Host 3 năm<br>
                                        <span>1000k/năm</span>
                                        <input type="radio" name="hosting">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Host 4 năm<br>
                                        <span>1200k</span>
                                        <input type="radio" name="hosting">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /domain info -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Đa ngôn ngữ (miễn phí tiếng Việt + 1 ngôn ngữ tùy chọn)
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Không thêm ngôn ngữ mới<br>
                                        <span>Free</span>
                                        <input type="radio" name="multilang" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Thêm ngôn ngữ mới<br>
                                        <span>200k/ngôn ngữ</span>
                                        <input type="radio" name="multilang" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="multilangqty">
                                        Số lượng ngôn ngữ thêm
                                    </label>
                                    <input id="multilangqty" type="number" min="1" class="form-control">
                                    <label for="multilangdesc">
                                        Tên ngôn ngữ bạn muốn thêm
                                    </label>

                                    <textarea id="multilangdesc"  class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row detail-text-divider mt-5">
                    <div class="col-12">
                        <div class="detail-info detail-form">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h3>DỊCH VỤ <b>STUDIO</b></h3>
                                    <h6>
                                        Đồng hành với <a>marvy.studio</a>, với sự phát triển vượt bậc của công nghệ, chúng tôi sẽ nâng cấp website của bạn lên một tầm cao mới. Với ứng dụng của AR/XR, hình 360 và các mô hình 3D, website của bạn sẽ thật sự cuốn hút
                                    </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Hỗ trợ AR<br>
                                        <span>2000k</span>
                                        <input type="checkbox" checked="checked">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="checkbox-container">
                                        Web XR<br>
                                        <span>2000k</span>
                                        <input type="checkbox">
                                        <span class="checkbox-checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        Hình 360
                                    </h4>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Không cảm ơn<br>
                                        <span>Free</span>
                                        <input type="radio" name="multilang" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label class="radio-container">
                                        Hình 360 vật kích thước nhỏ<br>
                                        <span>500k/hình</span>
                                        <input type="radio" name="multilang" checked="checked">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="img-360">
                                        Số lượng
                                    </label>
                                    <input id="img-360" type="number" min="1" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row detail-text-divider mt-5">
                    <div class="col-12">
                        <div class="detail-info detail-form">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h3>HẠN GIAO SẢN PHẨM</h3>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <h2>
                                        <b>7 Ngày</b>
                                    </h2>
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h3><b>THANH TOÁN</b></h3>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <h2>
                                        <b id="pricetotal"> 0 VND</b>
                                    </h2>
                                </div>
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
                        <button class="btn detail-btn detail-send" type="" onClick="save()">
                            Tiếp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script>

var id_checkbox = [];
var id_radio = [];
<?php
$getid_check="select b.`id` as id from `lk_eservice` as a , `lk_detail_eservice` as b where a.`id`=b.`id_eservice` and a.`active`=1 and b.`active`=1";
$kq=mysqli_query($link,$getid_check);
while($r=mysqli_fetch_assoc($kq)){
?>
	id_checkbox.push("<?=$r['id']?>");
<?php	
}
$getid_radio="select b.`id` as id from `lk_eservice` as a , `lk_detail_eservice` as b where a.`id`=b.`id_eservice` and a.`active`=1 and a.`kind`=2 and b.`active`=1";
$kq2=mysqli_query($link,$getid_radio);
while($r2=mysqli_fetch_assoc($kq2)){
?>
	id_radio.push("<?=$r2['id']?>");
<?php
}
?>
	
    particlesJS.load('particles','particlesjs-config-detail.json');
	var used_checkF=[];
	var used_radioF=[];
	var qty_radioF=[];
	
	function calcu() {
		var used_check=[];
		var used_radio=[];
		var qty_radio=[];
		
		var total= 0;
		//getvalue checkbox
		for (var i=0;i <= id_checkbox.length-1;i++)
		{
  		var check = $("input[name=checkbox"+id_checkbox[i]+"]:checked").val();
			if(check !== undefined)
			{
				total= total + parseFloat(check);
				used_check.push(id_checkbox[i])
			}
		}
		//get value radio
		for (var i=0;i <= id_radio.length-1;i++)
		{
  		var radio = $("input[name=radio"+id_radio[i]+"]:checked").val();
		var qty = $("#quality"+id_radio[i]).val();
			if(radio !== undefined && radio != 0 && qty >0)
			{
				total= total + parseFloat(radio)*qty;
				used_radio.push(id_radio[i]);
				qty_radio.push(qty);
			}
		}
		used_checkF=used_check;
		used_radioF=used_radio;
		qty_radioF=qty_radio;
		//set total
		$("#pricetotal").html(total);
		
		
	}
	//record service
	function record(){
	var used_check=[];
	var used_radio=[];
	var qty_radio=[];
	for (var i=0;i <= id_checkbox.length-1;i++)
		{
  		var check = $("input[name=checkbox"+id_checkbox[i]+"]:checked").val();
			if(check !== undefined)
			{
				used_check.push(id_checkbox[i])
			}
		}
	for (var i=0;i <= id_radio.length-1;i++)
		{
  		var radio = $("input[name=radio"+id_radio[i]+"]:checked").val();
		var qty = $("#quality"+id_radio[i]).val();
			if(radio !== undefined && radio != 0 && qty >0)
			{
				used_radio.push(id_radio[i]);
				qty_radio.push(qty);
			}
		}
	return used_radio;
	return qty_radio;
	return used_check;
	}
	$(document).ready(function(){
		calcu();
		
	});
	$("input[type='number']").keyup(function(){
		if($(this).val()<1)
		{
			$(this).val(1);
		}
 		calcu();
	});
	$("input").change(function(){
 		calcu();
	});
	//$("input[type='radio']:checked").click(function(){
//		var a =$(this).attr("name").match(/\d+/)[0];
//		$('#checkbox'+a).attr('checked', true);   
//		
//	});
	//$("input[type='radio']").change(function(){
// 		if($(this).val()==0)
//		{
//			var a =$(this).attr("name").match(/\d+/)[0];
//			$("#quality"+a).val(0);
//			$("#quality"+a).prop('disabled', true);
//			$("#text"+a).val("");
//			$("#text"+a).prop('disabled', true);
//			
//			
//		}
//		else
//		{
//			var a =$(this).attr("name").match(/\d+/)[0];
//			$("#quality"+a).val(1);
//			$("#quality"+a).prop('disabled', false);
//			$("#text"+a).val("");
//			$("#text"+a).prop('disabled', false);
//		}
//		calcu();
//	});
	
	 function check(array1,array2,array3) {
		 	
            $.ajax({
                url:'/lowkey/process_order.php',
                type:'POST',
                data:{ 
				used_check: array1,
				used_radio: array2,
				qty_radio: array3,
				namecus: $("#namecus").val(),
				mailcus: $("#mailcus").val(),
				phonecus: $("#phonecus").val(),
				comcus: $("#comcus").val(),
				id_pack: $("input[name=pack]:checked").val(),
				deadline :"11/12/2020"
				},

            }).done(function(data) {
				
              	location.href = "/lowkey/checkout.php?iduser="+data;
				
				
            });
        }
		function save(){
			check(used_checkF,used_radioF,qty_radioF);
			
		}
	
</script>