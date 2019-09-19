
<?php
	require_once("lib/connect.php");
	require_once("lib/xulytiengviet.php");
	ob_start();
	if(isset($_GET['id_blog']))
	{
		$id_blog=$_GET['id_blog'];
	}
	$sql="select * from `lk_blog` where `active`=1 and `id`={$id_blog}";
	$rs=mysqli_query($link,$sql);
	$r=mysqli_fetch_assoc($rs);
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc</title>
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="news-main-title"><?= $r['title']?></h1>
            <h4>
                <?= $r['header']?>
            </h4>

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img src="images/<?= $r['thumb']?>" class="img-fluid"/>
        </div>
        <div class="col-12">
            <?= $r['content']?>
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
			$sql2="select * from `lk_procedure` order by `orders`";
			$r2 = mysqli_query($link,$sql2);
			while($rs2=mysqli_fetch_assoc($r2))
			{
			
			?>
            <li class="nav-item">
                <a class="nav-link <?php if($flag==0){ echo "active";$flag=1;} ?>" data-toggle="tab" href="#why<?=$rs2['orders']?>"><?= $rs2['orders'] ?></a>
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
			$r1 = mysqli_query($link,$sql2);
            while($rs1=mysqli_fetch_assoc($r1))
			{
			?>
            <div class="tab-pane container <?php if($flag==1){ echo "active";$flag=2;} else { echo "fade";} ?> text-center" id="why<?=$rs1['orders']?>">
                <h1><span style="color: rgba(64,58,156,1); font-size: 100px">"</span> <?=$rs1['content']?></h1>
            </div>
            <?php } ?>
           
           
        </div>
        </div>

    </div>
</div>
</body>
</html>