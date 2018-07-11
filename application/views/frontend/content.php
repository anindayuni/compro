<?php if (!empty($slider)): ?>
    <?php echo $slider; ?>
<?php endif ?>
<div class="col-md-8">
    <?php foreach ($article as $key => $artikel): ?>
        <article class="single-blog-post">
            <div class="post-header text-center">
                <div class="single-tag">
                    <a href="<?= base_url().'category/'.$artikel['category_url']; ?>"> <?= $artikel['category_name']; ?></a>
                </div>
                <h2 class="post-title"><a href="<?= base_url().'news/'.$artikel['article_url']; ?>"><?= $artikel['article_title']; ?></a></h2>
            </div>
            <div class="post-thumb">
                <a href="#" class="popular-img"><img src="<?php if (!empty($artikel['photo_img'])) echo base_url().'gambar/article/'.$artikel['photo_img']; else echo base_url('gambar/article/no-image.png'); ?>" style="max-height: 435px;" alt="<?= $artikel['article_title']; ?>">
                    <div class="post-overlay-meta">
                        <ul class="post-meta pull-left">
                            <li class="author">By <a href="#">Admin</a> |</li>
                            <li class="date"><?= date('d M Y', strtotime($artikel['article_publish_date'])); ?></li>
                            <!-- <li class="comments"><a href="#">1 Comments</a></li> -->
                        </ul>

                        <div class="share-block pull-right">
                            <span>Share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="post-content" style="text-align: justify;">
                    <p><?= substr(strip_tags($artikel['article_content']), 0,450) ?></p>
                </div>
                <div class="read-more-text text-center text-uppercase">
                    <a href="<?= base_url().'news/'.$artikel['article_url']; ?>">continue reading</a>
                </div>
            </article>
        <?php endforeach ?>

        <div class="post-navigation text-uppercase">
            <div class="next-navigation">
                <?php echo $mpaging; ?>
            </div>
        </div>
    </div>