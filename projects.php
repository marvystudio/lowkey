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
    <title>Dự Án</title>
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
<div class="project-section overflow-hidden">
    <div class="para-container overflow-hidden" >
        <ul id="scene">
            <li class="layer" data-depth="1.2"><img src="images/bg1.png" width="100%"></li>
            <li class="layer" data-depth="1.3"><img src="images/bg2.png" width="100%"></li>
            <li class="layer" data-depth="1.4"><img src="images/bg3.png" width="100%"></li>
            <li class="layer" data-depth="2"><img src="images/bg4.png" width="100%"></li>
        </ul>
    </div>
    <h1 class="text-center project-title">Các Sản Phẩm Mẫu</h1>
    <h6 class="text-center project-sub-title">Với triết lý thiết kế tập trung về tính khả dụng của website, cùng đội ngũ phát triển chuyên nghiệp, chúng tôi tự tin sẽ đem lại giải pháp tốt nhất cho doanh nghiệp của bạn</h6>
    <img class="scroll-down" src="images/1214978-256.png" height="128" width="128"/>
</div>
<div class="project-section">
    <div class="text-right project-packs">
        Phổ Thông
    </div>
    <div class="container">
    <?php 
	$sql="select * from `lk_project` where `type`=1";
	$rs=mysqli_query($link,$sql);
	while($r=mysqli_fetch_assoc($rs))
	{
	?>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="d-inline-block container-3d">
                    <div class="inner">
                        <img src="images/<?= $r['thumb']?>"  class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name">
                    <?= $r['name']?>
                </div>
                <div class="project-cate-name">
                   <?= $r['kind']?>
                </div>
                <button class="btn contact-btn"><a href="<?= $r['link']?>"> Xem Demo</a></button>
            </div>
        </div>
        <?php
	}
		?>
        <!--<div class="row mt-5">
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name">
                    Demo 02
                </div>
                <div class="project-cate-name">
                    Services
                </div>
                <button class="btn contact-btn">Xem Demo</button>
            </div>
            <div class="col-md-6">
                <div class="d-inline-block container-3d">
                    <div class="inner">
                        <img src="images/demo2.png"  class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="d-inline-block container-3d">
                    <div class="inner">
                        <img src="images/demo3.png"  class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name">
                    Demo 03
                </div>
                <div class="project-cate-name">
                    Ecommerce
                </div>
                <button class="btn contact-btn">Xem Demo</button>
            </div>
        </div>-->
    </div>
</div>


<div class="project-section" style="position: relative" >
    <div  id="particles" style=" background-color: black; width: 100%; height: 100vh; position: absolute; z-index: -1 ">

    </div>
    <div style="padding-top: 200px">
        <h1 class="welcome text-center">Welcome To</h1>
        <img src="images/logomarvy_onblack.png" class="marvy" width="200"/>
    </div>

</div>
<div class="project-section" style="background-color: black; padding: 10px 0px">
    <div class="text-right project-packs" style="color: white">
        Pro
    </div>
    <div class="container">
        <?php 
	$sql1="select * from `lk_project` where `type`=2";
	$rs1=mysqli_query($link,$sql1);
	while($r1=mysqli_fetch_assoc($rs1))
	{
		$flag=1;
		?>
        <div class="row mt-5 marvy-row" >
            <div class="col-md-6" style="border-right: solid medium white">
                <img src="images/<?= $r1['thumb']?>"  width="90%"/>
            </div>
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name" style="color: white">
                    <?= $r1['name']?>
                </div>
                <div class="project-cate-name">
                    <?= $r1['kind']?>
                </div>
                <button class="btn marvy-btn"><a href="<?= $r1['link']?>">Xem Demo</a></button>
            </div>
        </div>
        <?php 
		}	
		?>
       <!-- <div class="row mt-5 marvy-row">
            <div class="col-md-6" style="border-right: solid medium white">
                <img src="images/demo5.png"  width="90%"/>
            </div>
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name" style="color: white">
                    Demo 05
                </div>
                <div class="project-cate-name">
                    Interactive
                </div>
                <button class="btn marvy-btn">Xem Demo</button>
            </div>
        </div>
        <div class="row mt-5 marvy-row">
            <div class="col-md-6" style="border-right: solid medium white">
                <img src="images/demo6.png"  width="90%"/>
            </div>
            <div class="col-md-6 project-name-wrapper">
                <div class="project-name" style="color: white">
                    Demo 06
                </div>
                <div class="project-cate-name">
                    Interactive
                </div>
                <button class="btn marvy-btn">Xem Demo</button>
            </div>
        </div>-->
    </div>
</div>
</body>
</html>
<script>
    particlesJS.load('particles','particlesjs-config.json');
    (function() {
        // Init
        var container = document.getElementsByClassName("container-3d"),
            inner = document.getElementsByClassName("inner");


        // Mouse
        var mouse = {
            _x: 0,
            _y: 0,
            x: 0,
            y: 0,
            updatePosition: function(event) {
                var e = event || window.event;
                this.x = e.clientX - this._x;
                this.y = (e.clientY - this._y) * -1;
            },
            setOrigin: function(e) {
                this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
                this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
            },
            show: function() {
                return "(" + this.x + ", " + this.y + ")";
            }
        };

        // Track the mouse position relative to the center of the container.
        for(var i=0, len=container.length; i<len; i++) {
            mouse.setOrigin(container[i]);
        }
        //-----------------------------------------

        var counter = 0;
        var updateRate = 10;
        var isTimeToUpdate = function() {
            return counter++ % updateRate === 0;
        };

        //-----------------------------------------


        var onMouseEnterHandler = function(event) {
            update(event);
        };

        var onMouseLeaveHandler = function() {
            for(var i=0, len=inner.length; i<len; i++) {
                inner[i].style = "";
            }
        };

        var onMouseMoveHandler = function(event) {
            if (isTimeToUpdate()) {
                update(event);
            }
        };

        //-----------------------------------------

        var update = function(event) {
            mouse.updatePosition(event);
            for(var i=0, len=inner.length; i<len; i++) {
                updateTransformStyle(
                    (mouse.y / inner[i].offsetHeight / 2).toFixed(2),
                    (mouse.x / inner[i].offsetWidth / 2).toFixed(2)
                );
            }
        };

        var updateTransformStyle = function(x, y) {

            var style = "rotateX(" + x*5 + "deg) rotateY(" + y*5 + "deg)";
            for(var i=0, len=inner.length; i<len; i++) {
                inner[i].style.transform = style;
                inner[i].style.webkitTransform = style;
                inner[i].style.mozTransform = style;
                inner[i].style.msTransform = style;
                inner[i].style.oTransform = style;
            }
        };

        //-----------------------------------------
        for(var i=0, len=container.length; i<len; i++) {
            container[i].onmouseenter = onMouseEnterHandler;
            container[i].onmouseleave = onMouseLeaveHandler;
            container[i].onmousemove = onMouseMoveHandler;
        }
    })();
    anime({
        targets: ".scroll-down",
        bottom:10,
        easing: 'easeInOutQuad',
        direction: 'alternate',
        loop:true
    });
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
    $(function() {
        $.scrollify({
            section : ".project-section",
        });
    });
</script>