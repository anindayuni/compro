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
                <a href="#" class="popular-img"><img src="<?php if (!empty($artikel['photo_img'])) echo base_url().'gambar/'.$artikel['photo_img']; else echo base_url('gambar/no-image.png'); ?>" style="max-height: 435px;" alt="<?= $artikel['article_title']; ?>">
                    <div class="post-overlay-meta">
                        <ul class="post-meta pull-left">
                            <!-- <li class="author">By <a href="#">Admin</a> |</li> -->
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
                <div class="post-content">
                    <p style="text-align: justify;"><?= substr(strip_tags($artikel['article_content']), 0,450) ?></p>
               <!--  <p>
                    Worries about making train connections, bad and irregular food, contact with different
                    people all the time so that you can never get to know anyone or become friendly with them.
                    It can all go to Hell!” He felt a slight itch up on his belly; pushed himself slowly up on
                    his back towards the headboard so that he could lift his head better; found where the itch
                    was, and saw that it was covered with lots of little white spots which he didn’t know what
                    to make of; and when he tried to feel the place with one of his legs he drew it quickly back
                    because as soon as he touched it he was overcome by a cold shudder. He slid back into his
                    former position.
                </p>
                <p>
                    “Getting up early all the time”, he thought, “it makes you stupid. You’ve got to get enough
                    sleep. Other travelling salesmen live a life of luxury. For instance, whenever I go back to
                    the guest house during the morning to copy out the contract, these gentlemen are always
                    still sitting there eating their breakfasts.
                </p> -->
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

    <!-- <div class="post-navigation text-uppercase">
        <div class="next-navigation pull-left">
            <a href="#"><i class="fa fa-angle-double-left"></i> Prev Posts </a>
        </div>
        <div class="next-navigation pull-right">
            <a href="#">Next Posts <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div> -->
</div>