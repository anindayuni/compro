<div class="col-md-8">
    <article class="single-blog-post">
        <div class="post-header text-center">
            <h2 class="post-title"><?= $pages['article_title']; ?></h2>
        </div>
        <div class="post-thumb">
            <?php if (!empty($pages['article_title'])): ?>
                
            <?php endif ?>
            <img src="assets/images/post-thumb-6.jpg" alt="">
        </div>
        <div class="post-content">
            <p><?= $pages['article_content']; ?></p>
        </div>
    </article>
</div>