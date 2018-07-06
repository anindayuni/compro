<div class="col-md-8 list">
    <?php foreach ($articles as $key => $article): ?>
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
                            <a href="<?= base_url().'category/'.$article['category_url']; ?>"> <?= $article['category_name']; ?></a>
                        </div>
                        <h2 class="post-title"><a href="<?= base_url().'news/'.$article['article_url']; ?>"><?= substr($article['article_title'], 0,120); ?></a></h2>
                    </div>
                    <div class="post-content">
                        <p><?= substr(strip_tags($article['article_content']), 0,195) ?></p>
                 </div>
                 <div class="read-more-text text-left text-uppercase">
                    <a href="single-blog.html">continue reading</a>
                </div>
            </div>
        </div>
    </article>
<?php endforeach ?>
        <!-- <article class="single-blog-post">
            <div class="media">
                <div class="media-left">
                    <div class="post-thumb">
                        <a href="#"> <img src="<?= base_url('assets/frontend/images/list-2.jpg'); ?>" alt=""></a>
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
                            <a href="#"> Travel</a>
                        </div>
                        <h2 class="post-title"><a href="#">Beauty of Ocean Never be Finished</a></h2>
                    </div>
                    <div class="post-content">
                        <p>
                            Worries about making train connections, bad and irregular food, contact with
                            different
                            people all the time so that you can never get to know anyone or become friendly with
                            them. All the time so that you can never get to know anyone or become friendly.
                        </div>
                        <div class="read-more-text text-left text-uppercase">
                            <a href="single-blog.html">continue reading</a>
                        </div>
                    </div>
                </div>


            </article> -->
            <!-- <article class="single-blog-post">
                <div class="media">
                    <div class="media-left">
                        <div class="post-thumb">
                            <a href="#"> <img src="<?= base_url('assets/frontend/images/list-3.jpg'); ?>" alt=""></a>
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
                                <a href="#"> Travel</a>
                            </div>
                            <h2 class="post-title"><a href="#">Beauty of Ocean Never be Finished</a></h2>
                        </div>
                        <div class="post-content">
                            <p>
                                Worries about making train connections, bad and irregular food, contact with
                                different
                                people all the time so that you can never get to know anyone or become friendly with
                                them. All the time so that you can never get to know anyone or become friendly.
                            </div>
                            <div class="read-more-text text-left text-uppercase">
                                <a href="single-blog.html">continue reading</a>
                            </div>
                        </div>
                    </div>


                </article> -->
                <!-- <article class="single-blog-post">
                    <div class="media">
                        <div class="media-left">
                            <div class="post-thumb">
                                <a href="#"> <img src="<?= base_url('assets/frontend/images/list-4.jpg'); ?>" alt=""></a>
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
                                    <a href="#"> Travel</a>
                                </div>
                                <h2 class="post-title"><a href="#">Beauty of Ocean Never be Finished</a></h2>
                            </div>
                            <div class="post-content">
                                <p>
                                    Worries about making train connections, bad and irregular food, contact with
                                    different
                                    people all the time so that you can never get to know anyone or become friendly with
                                    them. All the time so that you can never get to know anyone or become friendly.
                                </div>
                                <div class="read-more-text text-left text-uppercase">
                                    <a href="single-blog.html">continue reading</a>
                                </div>
                            </div>
                        </div>


                    </article> -->
                    <!-- <article class="single-blog-post">
                        <div class="media">
                            <div class="media-left">
                                <div class="post-thumb">
                                    <a href="#"> <img src="<?= base_url('assets/frontend/images/list-5.jpg'); ?>" alt=""></a>
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
                                        <a href="#"> Travel</a>
                                    </div>
                                    <h2 class="post-title"><a href="#">Beauty of Ocean Never be Finished</a></h2>
                                </div>
                                <div class="post-content">
                                    <p>
                                        Worries about making train connections, bad and irregular food, contact with
                                        different
                                        people all the time so that you can never get to know anyone or become friendly with
                                        them. All the time so that you can never get to know anyone or become friendly.
                                    </div>
                                    <div class="read-more-text text-left text-uppercase">
                                        <a href="single-blog.html">continue reading</a>
                                    </div>
                                </div>
                            </div>


                        </article> -->
                        <div class="post-navigation text-uppercase">
                            <div class="next-navigation pull-left">
                                <a href="#"><i class="fa fa-angle-double-left"></i> Prev Posts </a>
                            </div>
                            <div class="next-navigation pull-right">
                                <a href="#">Next Posts <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>