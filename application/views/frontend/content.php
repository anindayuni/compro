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
                <a href="#"> <img src="<?= base_url('assets/frontend/images/post-thumb-1.jpg'); ?>" alt=""></a>
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
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="post-content">
                <p><?= substr(strip_tags($artikel['article_content']), 0,450) ?></p>
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
    
    <!-- <article class="single-blog-post">
        <div class="post-header text-center">
            <div class="single-tag">
                <a href="#"> Travel</a>
            </div>
            <h2 class="post-title"><a href="#">A Thing of Beauty is a Joy</a></h2>
        </div>
        <div class="post-thumb">
            <a href="#"><img src="<?= base_url('assets/frontend/images/post-thumb-3.jpg'); ?>" alt=""></a>
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
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-content">
            <p>
                I ought to just try that with my boss; I’d get kicked out on the spot. But who knows, maybe
                that would be the best thing for me. If I didn’t have my parents to think about I’d have
                given in my notice a long time ago, I’d have gone up to the boss and told him just what I
                think, tell him everything I would, let him know just what I feel. He’d fall right off his
                desk! And it’s a funny sort of business to be sitting up there at your desk, talking down at
                your subordinates from up there, especially when you have to go right up close because the
                boss is hard of hearing.
            </p>
            <p>
                Well, there’s still some hope; once I’ve got the money together to pay off my parents’ debt
                to him – another five or six years I suppose – that’s definitely what I’ll do. That’s when
                I’ll make the big change.
            </p>
        </div>
        <div class="read-more-text text-center text-uppercase">
            <a href="single-blog.html">continue reading</a>
        </div>
    </article> -->
    <!-- <article class="single-blog-post">
        <div class="post-header text-center">
            <div class="single-tag">
                <a href="#"> Lifestyle</a>
            </div>
            <h2 class="post-title"><a href="#">Ocean Shows it’s Real Madness</a></h2>
        </div>
        <div class="post-thumb">
            <a href="#"><img src="<?= base_url('assets/frontend/images/post-thumb-4.jpg'); ?>" alt=""></a>
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
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-content">
            <p>
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this.
            </p>
            <p>
                it would be necessary to have uniform grammar, pronunciation and more common words. If
                several languages coalesce, the grammar of the resulting language is more simple and regular
                than that of the individual languages. The new common language will be more
            </p>
        </div>
        <div class="read-more-text text-center text-uppercase">
            <a href="single-blog.html">continue reading</a>
        </div>
    </article> -->
    <!-- <article class="single-blog-post">
        <div class="post-header text-center">
            <div class="single-tag">
                <a href="#">Link</a>
            </div>
        </div>
        <div class="post-thumb">
            <div class="link-post-format text-center">
                <h3><a href="http://shapedtheme.com/">http://shapedtheme.com/</a></h3>
            </div>
        </div>
        <div class="read-more-text text-center text-uppercase">
            <a href="single-blog.html">continue reading</a>
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