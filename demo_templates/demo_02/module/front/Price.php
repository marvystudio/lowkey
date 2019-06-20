<?php
 $sql="select * from `price` where `active`= 1 ";
 $rs=mysqli_query($link,$sql);
?>
<div class="container">
<div class="row">
    <div class="col-lg-9">

        <div  ng-controller="AppCtrl" layout="column" ng-cloak>
        <?php
		while($r1=mysqli_fetch_assoc($rs))
		{
		?>
            <md-toolbar  md-colors="{background: 'default-brown-500'} "  id="<?= $r1['id']?>">
                <div class="md-toolbar-tools">
                    <h2 class="md-flex" ><?= $r1['title']?></h2>
                </div>
            </md-toolbar>
            <md-content flex>
                <img src="img/price/<?= $r1['url']?>" class="img-fluid">
            </md-content>
          <?php } ?>  

        </div>
    </div>
    <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block" >
        <div style="position: sticky!important; top:0;">
            <div class="price-title" >Bảng Giá</div>
            <hr class="news-hr">
            <?php 
			 $rs2=mysqli_query($link,$sql);
			while($r2=mysqli_fetch_assoc($rs2))
			{
			?>
            <div class="row price-number-box">
                
                <a href="#<?= $r2['id']?>" class="col-10 price-number-right">
                    <?= $r2['title']?>
                </a>
            </div>
           
           <?php 
		   }
		   ?>
        </div>
    </div>



</div>
</div>

<script>
    (function() {
        'use strict';

       app.controller('DemoCtrl', function() {
                this.topDirections = ['left', 'up'];
                this.bottomDirections = ['down', 'right'];

                this.isOpen = false;

                this.availableModes = ['md-fling', 'md-scale'];
                this.selectedMode = 'md-fling';

                this.availableDirections = ['up', 'down', 'left', 'right'];
                this.selectedDirection = 'up';
            });
    })();

</script>