<div class="col-xs-12">
    <div class="blog-carousel">
        <div id="zinniaCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php foreach ($get_slider as $key => $slider): ?>
                    <div class="item <?php if($key==0) echo 'active'; ?>">
                    <div class="single-carousel">
                        <img src="<?= base_url('gambar/slider/'.$slider['photo_img']); ?>">
                    </div>
                </div>
                <?php endforeach ?>                
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#zinniaCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#zinniaCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>