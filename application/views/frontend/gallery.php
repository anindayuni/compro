<div class="col-md-8">
    <div class="all-blog-post">
        <div class="row grid">
            <?php foreach ($gallery as $key => $img): ?>
                <div class="col-md-6">
                    <article id="zinniaGallery" class="polaroid single-blog-post">
                        <div class="post-thumb mygallery">

                            <a href="#" data-toggle="modal" data-target="#img<?= $key; ?>"> <img src="<?= base_url('gambar/gallery/').$img['photo_img']; ?>" alt="<?= $img['article_title']; ?>"></a>
                            
                            <div class="post-overlay-meta">
                                <ul class="post-meta pull-left">
                                    <li class="comments">Perbesar</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Modal -->
                <div class="modal fade bs-example-modal-lg" id="img<?= $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body" style="text-align: center;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <img style="height: auto;" src="<?= base_url('gambar/gallery/').$img['photo_img']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="post-navigation text-uppercase">
        <div class="next-navigation">
            <?php echo $mpaging; ?>
        </div>
    </div>
</div>