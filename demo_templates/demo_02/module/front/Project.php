<?php
if(isset($_GET['id_pro'])){
	$id_pro=$_GET['id_pro'];
	}
	?>
<style>

</style>
<div  id="showcase-background-toggle"></div>
<div class="container">
    <div class="row">
      <?php
$sql1="select `date` from `congtrinh` where `id`={$id_pro}";
$rs0=mysqli_query($link,$sql1);
$r0=mysqli_fetch_assoc($rs0);
$sql="select * from `img` where `id_congtrinh`={$id_pro}";
$rs=mysqli_query($link,$sql);
while($r=mysqli_fetch_assoc($rs))
{
?>
        <div class="col-md-4 wow bounceIn">
            <div class="card ">
                <div class="card-body ">
                    <div class="card-3d">
                        <div class="card-3d-img-wrapper">
                            <img class="card-3d-img" id="myImg<?=$r['id']?>" onclick="zoomimg(<?=$r['id']?>)" src="img/congtrinh/<?=$r['url']?>">
                        </div>
                    </div>
                    <div class="showcase-img-title-date ">
                        <?=$r0['date']?>
                    </div>
                    <div class="showcase-img-title-name">
                        <?=$r['title']?>
                    </div>
                    <!-- The Modal -->
                    <div id="myModal<?=$r['id']?>" class="showcase-modal">
                        <span class="close" id="close<?=$r['id']?>">&times;</span>
                        <img class="showcase-modal-content" id="modalimg<?=$r['id']?>">

                        <div id="caption">
                            <div class="showcase-img-title-date">
                                <center><?=$r0['date']?></center>
                            </div>
                            <div class="showcase-img-title-name">
                                <?=$r['title']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php /*?><div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-body text-center">

                </div>
            </div>
        </div><?php */?>
    
    
    

<?php } ?>
    </div>
</div>



<script>
    function zoomimg(id) {
        var modal = document.getElementById("myModal"+id);
        var img = document.getElementById("myImg"+id);
        var modalImg = document.getElementById("modalimg"+id);
        var span = document.getElementById("close"+id);
        modal.style.display = "block";
        modalImg.src = img.src;
        span.onclick = function() {
            modal.style.display = "none";
        }
        modal.onclick = function() {
            modal.style.display = "none";
        }
        $('#modalimg'+id).click(function (e) {
            e.stopPropagation();
        });

    }
    $('.card-3d').mousemove(function(ev){
        let parentWidth = $(this).width();  // Chiều rộng div cha
        let parentHeight = $(this).height();  // Chiều dài div cha
        let mouseX = ev.pageX - $(this).offset().left;  // Vị trí x chuột trong div cha
        let mouseY = ev.pageY - $(this).offset().top;  // Vị trí y chuột trong div cha
        let x = (parentWidth/2 - mouseX)/15;
        let y = -(parentHeight/2 - mouseY)/15;

        $(this).css({
            'transform': 'rotateX('+ y +'deg) rotateY('+ 2*x +'deg) translateZ(50px)',
            'transition': 'all .15s ease'
        });
        $(this).find('.card-3d-img').css({
            'transform': 'scale(1.05) translateX('+ -5*x +'px) translateY('+ -5*y +'px)',
            'transition': 'all .15s ease'
        });
    });

    $('.card-3d').mouseleave(function(ev) {
        $(this).css({
            'transform': 'rotateX(0) rotateY(0)',
            'transition': 'all .6s ease'
        });

        $(this).find('.card-3d-img').css({
            'transform': 'scale(1) translateX(0px) translateY(0px) translateZ(0)',
            'transition': 'all .6s ease'
        });
    });
</script>

