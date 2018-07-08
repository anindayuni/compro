<div class="col-md-8">
    <div class="all-blog-post">
        <div class="row grid">
            <?php foreach ($gallery as $key => $img): ?>
                <div class="col-md-6">
                    <article class="single-blog-post">
                        <div class="post-thumb">
                            <a href="#" data-toggle="modal" data-target="#img<?= $key; ?>"> <img src="<?= base_url('gambar/').$img['photo_img']; ?>" alt=""></a>
                            <div class="post-overlay-meta">
                                <ul class="post-meta pull-left">
                                    <li class="comments">Perbesar Gambar</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Modal -->
                <div class="modal fade bs-example-modal-lg" id="img<?= $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img style="width: 100%; height: auto;" src="<?= base_url('gambar/').$img['photo_img']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- <div class="col-md-6">
                <article class="single-blog-post">
                    <div class="post-thumb">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <img src="<?= base_url('assets/frontend/images/post-thumb-2.jpg'); ?>" alt=""></a>
                        <div class="post-overlay-meta">
                            <ul class="post-meta pull-left">
                                <li class="comments"><a href="#">Perbesar Gambar</a></li>
                            </ul>
                            <div class="share-block pull-right">
                                <span>Share</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div> -->
        </div>
    </div>
    <div class="post-navigation text-uppercase">
        <div class="next-navigation">
            <?php echo $mpaging; ?>
        </div>
    </div>
<!-- <div class="post-navigation text-uppercase">
    <div class="next-navigation pull-left">
        <a href="#"><i class="fa fa-angle-double-left"></i> Prev Posts </a>
    </div>
    <div class="next-navigation pull-right">
        <a href="#">Next Posts <i class="fa fa-angle-double-right"></i></a>
    </div>
</div> -->
</div>