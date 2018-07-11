<div class="col-md-8">
    <article class="single-blog-post">
        <div class="post-header text-center">
            <div class="single-tag">
                <a href="<?= base_url().'category/'.$single['category_url']; ?>"> <?= $single['category_name']; ?></a>
            </div>
            <h2 class="post-title"><?= $single['article_title']; ?></h2>
        </div>
        <div class="post-thumb">
            <a href="#" class="popular-img"><img src="<?php if (!empty($single['photo_img'])) echo base_url().'gambar/article/'.$single['photo_img']; else echo base_url('gambar/article/no-image.png'); ?>" style="max-height: 400px;" alt="">
                <div class="post-overlay-meta">
                    <ul class="post-meta pull-left">
                        <li class="author">By <a href="#">Admin</a> |</li>
                        <li class="date"><?= date('d M Y', strtotime($single['article_publish_date'])) ?></li>
                        <!-- <li class="comments"><a href="#">1 Comments</a></li> -->
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
                <?php foreach ($random_articles as $key => $random): ?>
                    <div class="col-sm-4">
                        <div class="single-related-posts">
                            <a href="#" title="">
                                <a href="<?= $random['article_url']; ?>" class="popular-img text-center"><img src="<?php if (!empty($random['photo_img'])) echo base_url().'gambar/article/'.$random['photo_img']; else echo base_url('gambar/article/no-image.png'); ?>" style="max-height: 167px; min-height: 150px; max-width: 218px;" alt="<?= $random['article_title']; ?>">
                            </a>
                            <header>
                                <h3><a href="<?= $random['article_url']; ?>"><?= substr($random['article_title'], 0,100) ?></a></h3>
                            </header>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>