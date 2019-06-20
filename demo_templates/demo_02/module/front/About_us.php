<?php 
$sql="select * from `about`";
$rs=mysqli_query($link,$sql);
$r=mysqli_fetch_assoc($rs);

?>
<div class="content-wrapper"  ng-controller="myCtrl"> <!-- Start content-wrapper -->
    <div class="para-container d-none d-lg-block">
        <ul id="scene">
            <li class="layer" data-depth="1"><img src="img/illustrate-purpose/1.png" width="100%"></li>
            <li class="layer" data-depth="2"><img src="img/illustrate-purpose/2.png" width="100%"></li>
            <li class="layer" data-depth=".1"><img src="img/illustrate-purpose/3.png" width="100%"></li>
            <li class="layer" data-depth="1"><img src="img/illustrate-purpose/4.png" width="100%"></li>
        </ul>
    </div>
    <div class="container" > <!-- Start container -->
        <div class="row"> <!-- Start Row-final -->
            <div class="col-md-10 offset-md-1 ">
                <div class="row " >
                    <div class="col-lg-7 wow bounceInRight">
                        <img src="img/<?=$r['url']?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 order-lg-first wow bounceInLeft">
                        <div class="text-content {{takewidth >1023 ? 'text-content-translate' : ''}}">
                            <h3><b><?=$r['title']?></b></h3>
                            <hr class="hr-custom">
                            <span><?=$r['content']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End row-final -->
    </div> <!-- End container -->

</div> <!-- End content-wrapper -->

<div class="product-content-wrapper "> <!-- Start product-content-wrapper -->
    <div class="container"> <!-- Start container -->

        <div class="row " > <!-- Start row first -->
            <div class="col-sm-12 text-center product-content-background"  style=" " >
                <h2><b>SẢN PHẨM</b> <span style="font-family: robotrg!important;">& DỊCH VỤ</span></h2>
            </div>
        </div> <!-- End row first -->

        <div class="row" style="margin-top: -150px; z-index: 99!important;">
            <div class="col-sm-10 offset-sm-1 "   >
                <div class="row text-center flex-nowrap" style="overflow-x: auto">
                    <?php
                    $sql1="select * from `category` where `active`=1 limit 3";
                    $rs1=mysqli_query($link,$sql1);
                    while($r1=mysqli_fetch_assoc($rs1))
                    {
                        $ten=explode(' ',$r1['name']);
                        ?>
                        <div class="col-12 col-sm-4 wow bounceIn" >
                            <div class="card" style="border: 0">
                                <img src="img/thump/<?=$r1['thump']?>" alt="" class="img-fluid">
                                <div class="card-block" style="width: 235px;margin: auto;border: 1px solid #8080803b;border-top: 0px;">
                                    <h4 class="card-title" style="padding-bottom: 20px;font-weight: bold;font-size: 35px;"><?=$ten[0];?><span style="display: block"> <?=$ten[1];?></span></h4>
                                    <a href="#" class="btn btn-outline-warning">Xem Thêm</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php /*?><div class="col-12 col-sm-4">
							<div class="card" style="border: 0">
								<img src="images/9.jpg" alt="" class="img-fluid">
								<div class="card-block" style="width: 235px;margin: auto;border: 1px solid #8080803b;border-top: 0px;">
									<h4 class="card-title" style="padding-bottom: 20px;font-family: serif;font-weight: bold;font-size: 35px;">Sơn <span style="display: block">Hiệu ứng</span></h4>
									<a href="#" class="btn btn-outline-info">Xem Thêm</a>
								</div>
							</div>
						</div><?php */?>

                </div>
            </div>
        </div> <!-- End row final -->

    </div> <!-- Start container -->
</div> <!-- End product-content-wrapper -->


<script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>

