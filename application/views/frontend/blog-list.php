<?php if (!empty($slider)): ?>
    <?php echo $slider; ?>
<?php endif ?>
<div class="col-md-8 list">
    <?php foreach ($articles as $key => $article): ?>
        <article class="single-blog-post">
            <div class="media">
                <div class="media-left">
                    <div class="post-thumb">
                        <a href="#" class="popular-img"><img src="<?php if (!empty($article['photo_img'])) echo base_url().'gambar/article/'.$article['photo_img']; else echo base_url('gambar/no-image.png'); ?>" style="max-width: 362px; min-height: 245px; " alt="<?= $article['article_title']; ?>">
                            <div class="post-overlay-meta">
                                <ul class="post-meta pull-left">
                                    <li class="author">By <a href="#">Admin</a> |</li>
                                    <li class="date"><?= date('d M Y', strtotime($article['article_publish_date'])); ?></li>
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
                    </div>
                    <div class="media-body">
                        <div class="post-header text-left">
                            <div class="single-tag">
                                <a href="<?= base_url().'category/'.$article['category_url']; ?>"> <?= $article['category_name']; ?></a>
                            </div>
                            <h2 class="post-title"><a href="<?= base_url().'news/'.$article['article_url']; ?>"><?= substr($article['article_title'], 0,90); ?></a></h2>
                        </div>
                        <div class="post-content">
                            <p><?= substr(strip_tags($article['article_content']), 0,140) ?></p>
                        </div>
                        <div class="read-more-text text-left text-uppercase">
                            <a href="<?= base_url().'news/'.$article['article_url']; ?>">continue reading</a>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>
        <div class="post-navigation text-uppercase">
            <div class="next-navigation">
                <?php echo $mpaging; ?>
            </div>
        </div>
    </div>