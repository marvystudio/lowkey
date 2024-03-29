<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
	$sql="select * from `lk_blog` where `active`=1 order by `date_create`";
	$rs=mysqli_query($link,$sql);
	$sql1="select * from `lk_blog` where `active`=1 order by `date_create` limit 1";
	$rs1=mysqli_query($link,$sql1);
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
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

<div class="news-section overflow-hidden">
    <div class="para-container overflow-hidden" >
        <ul id="scene">
            <li class="layer" data-depth="1.2"><img src="images/bg1.png" width="100%"></li>
            <li class="layer" data-depth="1.3"><img src="images/bg2.png" width="100%"></li>
            <li class="layer" data-depth="1.4"><img src="images/bg3.png" width="100%"></li>
            <li class="layer" data-depth="2"><img src="images/bg4.png" width="100%"></li>
        </ul>
    </div>
    <h1 class="text-center project-title">BLOG</h1>
    <h6 class="text-center project-sub-title">Luôn kết nối với chúng tôi qua những bài viết mới nhất.</h6>
    <div>
        <img class="scroll-down" src="images/1214978-256.png" height="128" width="128"/>
    </div>
</div>
<div class="news-section">
    <div class="container">
        <div class="row">
            <!--<div class="row mb-5">-->
                <div class="col-12 news-content-main">
                    Tin Chính
                </div>
                <?php 
				$r1=mysqli_fetch_assoc($rs1);
				?>
                <div class="col-md-8 ">
                    <div class="news-content news-content-main-background" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/<?= $r1['thumb']?>) center;"></div>
                    <div class="news-content-title">
                        <a href="#"><?= $r1['title']?></a>
                    </div>
                    <div class="news-content-sub"><span style="color:black"><?= $r1['author']?></span> - <?= $r1['date_create']?></div>
                </div>
                <?php 
				mysqli_fetch_assoc($rs);
				while($r=mysqli_fetch_assoc($rs)){
				?>
                <div class="col-md-4 ">
                    <div class="news-content news-content-main-background" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/<?= $r['thumb']?>) center;"></div>
                    <div class="news-content-title">
                        <a href="#"><?= $r['title']?></a>
                    </div>
                    <div class="news-content-sub"><span style="color:black"><?= $r['author']?></span> - <?= $r['date_create']?></div>
                </div>
                <?php }?>
           <!-- </div>-->
            <!--<div class="row mb-md-5">
                <div class="col-md-4 news-wrapper">
                    <div class="news-content" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/arch-bridge-clouds-814499.jpg) center">
                        <div class="news-title-wrapper">
                            <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                            <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-wrapper">
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
                </div>
            </div>-->
           <!-- <div class="row mb-md-5">
                <div class="col-md-4 news-wrapper">
                    <div class="news-content" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/daylight-environment-forest-459225.jpg) center">
                        <div class="news-title-wrapper">
                            <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                            <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-wrapper">
                    <div class="news-content" style="background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/arch-bridge-clouds-814499.jpg) center">
                        <div class="news-title-wrapper">
                            <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                            <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-wrapper">
                    <div class="news-content" style="background:linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ),url(images/architecture-buildings-burj-khalifa-162031.jpg) center">
                        <div class="news-title-wrapper">
                            <a href="#">Tin mới cập nhật về công nghệ xịn xò nhất thế giới nè. Do tui dễ thương quá mà</a>
                            <div><span style="color:white">Alex Holmes</span> - 4 hours ago</div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>

</body>
</html>
<script>
    var scene = document.getElementById('scene');
    anime({
        targets: ".scroll-down",
        bottom:10,
        easing: 'easeInOutQuad',
        direction: 'alternate',
        loop:true
    });
    var parallax = new Parallax(scene);
    $(function() {
        $.scrollify({
            section : ".news-section",
        });
    });
</script>