<div class="col-md-8">
    <article class="single-blog-post">
        <div class="post-header text-center">
            <div class="single-tag">
                <a href="<?= base_url().'category/'.$single['category_url']; ?>"> <?= $single['category_name']; ?></a>
            </div>
            <h2 class="post-title"><?= $single['article_title']; ?></h2>
        </div>
        <div class="post-thumb">
            <a href="#" class="popular-img"><img src="<?php if (!empty($single['photo_img'])) echo base_url().'gambar/'.$single['photo_img']; else echo base_url('gambar/no-image.png'); ?>" style="max-height: 400px;" alt="">
            <div class="post-overlay-meta">
                <ul class="post-meta pull-left">
                    <li class="author">By <a href="#">Admin</a> |</li>
                    <li class="date">Jul 14, 2015 |</li>
                    <li class="comments"><a href="#">1 Comments</a></li>
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
        <div class="post-content" style="text-align: justify;">
           <p>
               <?= $single['article_content']; ?>
           </p>
        </div>
        <!-- <div class="single-post-meta text-uppercase">

            <div class="single-tag text-uppercase">
                <a href="#">featured</a>
                <a href="#">Lifestyle</a>
                <a href="#">nice</a>
                <a href="#">ocean</a>
                <a href="#">WordPress</a>
                <a href="#">zinnias</a>
            </div>
        </div> -->
    </article>
    <hr/>
    <br/>
    <!-- <div class="user-profile media">
        <div class="author-avatar pull-left">
            <img class="img-circle" alt="" src="<?= base_url('assets/frontend/images/author-profile.png'); ?>"></div>

            <div class="media-body">
                <div class="profile-heading text-uppercase">
                    <a href="#">Kate Charlotte</a>
                </div>
                <div class="author-description">
                    <p> I’m a desperate housewife. I live in the country. My house is near Salt Lake Street. I
                        love
                    writing Kids comics and cooking easy foods.</p>
                </div>

                <div class="author-social-profile">
                    <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div> -->
        <div class="related-posts">
            <h3 class="common-title text-uppercase text-center">You Might Also Like</h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-related-posts">
                        <a href="#" title="">
                            <img src="<?= base_url('assets/frontend/images/ralated-post-thumb-1.jpg'); ?>"
                            class="img-responsive related-thumb wp-post-image" alt="">
                        </a>
                        <header>
                            <h3><a href="#">Preparing Slides for…</a></h3>
                        </header>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-related-posts">
                        <a href="#" title="">
                            <img src="<?= base_url('assets/frontend/images/ralated-post-thumb-2.jpg'); ?>"
                            class="img-responsive related-thumb wp-post-image" alt="">
                        </a>
                        <header>
                            <h3><a href="#">Preparing Slides for…</a></h3>
                        </header>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-related-posts">
                        <a href="#" title="">
                            <img src="<?= base_url('assets/frontend/images/ralated-post-thumb-3.jpg'); ?>"
                            class="img-responsive related-thumb wp-post-image" alt="">
                        </a>
                        <header>
                            <h3><a href="#">Preparing Slides for…</a></h3>
                        </header>
                    </div>
                </div>
            </div>
        </div>

    
    <div class="post-navigation text-uppercase">
        <div class="next-navigation pull-left">
            <a href="#"><i class="fa fa-angle-double-left"></i> Prev Posts </a>
        </div>
        <div class="next-navigation pull-right">
            <a href="#">Next Posts <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</div>