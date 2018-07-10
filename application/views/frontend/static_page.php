<div class="col-md-8">
    <article class="single-blog-post">
        <div class="post-header text-center">
            <h2 class="post-title"><?= $pages['article_title']; ?></h2>
        </div>
        <div class="post-thumb">
            <img src="<?= base_url('gambar/category/').$pages['category_photo']; ?>" alt="<?= $pages['article_title']; ?>" title="<?= $pages['article_title']; ?>">
        </div>
        <div class="post-content"style="text-align: justify;">
            <p><?= $pages['article_content']; ?></p>
        </div>
    </article>
</div>
