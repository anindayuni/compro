<div class="col-md-8 list">
    <?php foreach ($category_list as $key => $list): ?>
        <article class="single-blog-post">
            <div class="media">
                <div class="media-left">
                    <div class="post-thumb">
                        <a href="#"> <img src="<?= base_url('assets/frontend/images/list-1.jpg'); ?>" alt=""></a>
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
                </div>
                <div class="media-body">
                    <div class="post-header text-left">
                        <div class="single-tag">
                            <a href="#"> <?= $list['category_name'] ?></a>
                        </div>
                        <h2 class="post-title"><a href="<?= base_url().'news/'.$list['article_url']; ?>"><?= substr($list['article_title'], 0,120); ?></a></h2>
                    </div>
                    <div class="post-content">
                        <p><?= substr(strip_tags($list['article_content']), 0,195) ?></p>
                        </div>
                        <div class="read-more-text text-left text-uppercase">
                            <a href="<?= base_url().'news/'.$list['article_url']; ?>">continue reading</a>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach ?>


        <div class="post-navigation text-uppercase">
            <div class="next-navigation pull-left">
                <a href="#"><i class="fa fa-angle-double-left"></i> Prev Posts </a>
            </div>
            <div class="next-navigation pull-right">
                <a href="#">Next Posts <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>