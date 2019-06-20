<div class="row " style="overflow-y: hidden">
    <div class="col-md-4 wow bounceIn"  >

        <div id="first-slide" class="carousel slide" data-ride="carousel" > <!--first-slide-->
            <!-- Indicators -->
            <ul class="carousel-indicators">
                        <?php
                        $co1=0;
                        $sql = "SELECT * from `slide1` ";
                        $rs = mysqli_query($link,$sql);
                        while($r = mysqli_fetch_assoc($rs))
                        {
                        ?>
                        <li data-target="#first-slide" data-slide-to="<?=$co1?>" class="<?php if($co1==0){echo "active";}?>"></li>
                        <?php
                        $co1++;
                        }
                        ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner" style=" max-height:500px !important;">
                         <?php
                        $co=0;
                        $sql0 = "SELECT * from `slide1` ";
                        $rs0 = mysqli_query($link,$sql0);
                        while($r0 = mysqli_fetch_assoc($rs0))
                        {
                        ?>
                            <div class="carousel-item <?php if($co==0){echo "active";$co=1;}?>">
                                <a href="" ><img src="img/slide/<?=$r0['url'] ?>" alt="" style="width:100%; height:300px"></a>
                            </div>
                        <?php } ?>

            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#first-slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#first-slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div> <!--/first-slide-->
    </div>
    <div class="col-md-4 wow bounceIn" >
        <div id="second-slide" class="carousel slide" data-ride="carousel" > <!--second-slide-->
             <!-- Indicators -->
            <ul class="carousel-indicators">
                        <?php
                        $co2=0;
                        $sql = "SELECT * from `slide2` ";
                        $rs = mysqli_query($link,$sql);
                        while($r = mysqli_fetch_assoc($rs))
                        {
                        ?>
                        <li data-target="#first-slide" data-slide-to="<?=$co2?>" class="<?php if($co2==0){echo "active";}?>"></li>
                        <?php
                        $co1++;
                        }
                        ?>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner"  >
                         <?php
                        $co3=0;
                        $sql0 = "SELECT * from `slide2` ";
                        $rs0 = mysqli_query($link,$sql0);
                        while($r0 = mysqli_fetch_assoc($rs0))
                        {
                        ?>
                            <div class="carousel-item <?php if($co3==0){echo "active";$co3=1;}?>">
                                <a href="" ><img src="img/slide/<?=$r0['url'] ?>" alt="" style="width:100%; height:300px" ></a>
                            </div>
                        <?php } ?>

            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#second-slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#second-slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div> <!--/second-slide-->
    </div>
    <div class="col-md-4"> <!--col-md-4-->
        <div id="news-title-wrapper">
            <span>Các công trình mới</span>
        </div>
        <div id="news-content-wrapper" class="wow bounceInUp"> <!--news-content-wrapper-->
            <?php
            $sql="select * from `congtrinh` where `active`=1 ORDER BY `date` DESC limit 3 ";
            $r=mysqli_query($link,$sql);
            while($rs = mysqli_fetch_assoc($r))
            {
            ?>
            <a class="news-article" href="?mod=Project&id_pro=<?=$rs['id']?>">
                <?=$rs['name']?>
            </a>
            <div class="news-date">
                <?=$rs['date']?>
            </div>

            <hr class="news-hr">
            <?php
            }
            ?>

            </div> <!--/news-content-wrapper-->
    </div> <!--/col-md-4-->
</div>