<div class="col-md-4">
    <div class="zinnia-sidebar">
        <div class="widget about-me text-center">
            <div class="about-img">
                <img src="<?= base_url('gambar/profil/Sinar Biyatnujanat.jpg'); ?>" alt="<?= $sosmed['settings_namesite']; ?>" data-toggle="modal" data-target="#myProfil">
            </div>
            <h2 class="me-title">RM Sinar Biyatnujanat SE</h2>
            <p class="sub-title">DPRD DIY</p>
            <div class="about-me-content">
                <p>Menjadi Institusi yang profesional, antisipatif dan responsif dalam mendukung serta memfasilitasi kinerja dan hasil kerja DPRD.</p>
            </div>
            <div class="about-me-social">
                <ul class="list-inline">
                    <li><a href="<?php if (!empty($sosmed['settings_facebook'])) echo $sosmed['settings_facebook']; else echo "#";  ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_instagram'])) echo $sosmed['settings_instagram']; else echo "#";  ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_twitter'])) echo $sosmed['settings_twitter']; else echo "#";  ?>"><i class="fa fa-twitter" target="_blank"></i></a></li>
                    <li><a href="<?php if (!empty($sosmed['settings_youtube'])) echo $sosmed['settings_youtube']; else echo "#";  ?>"><i class="fa fa-youtube" target="_blank"></i></a></li>
                </ul>
            </div>
        </div>

        <!-- <div class="widget instagram-widget">
            <div class="widget-title text-uppercase text-center">
                <h2>Instagram @Zinnia</h2>
            </div>
            <div class="insta-pic">
                <ul class="list-inline">
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-3.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-4.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-5.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-6.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-7.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-8.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-9.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-1.jpg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?= base_url('assets/frontend/images/ft-insta-2.jpg'); ?>" alt=""></a></li>
                </ul>
            </div>
        </div> -->
        <div class="widget latest-post-widget">
            <div class="widget-title text-uppercase text-center">
                <h2>Latest Posts</h2>
            </div>
            <?php foreach ($latest_article as $key => $art): ?>
                <div class="latest-post">
                    <div class="media">
                        <div class="media-left">
                            <a href="#" class="popular-img"><img src="<?php if (!empty($art['photo_img'])) echo base_url().'gambar/article/'.$art['photo_img']; else echo base_url('gambar/article/no-image.png'); ?>" style="max-width: 115px; max-height: 90px; min-height: 90px;min-width: 115px;" alt="<?= $art['article_title']; ?>">
                            </a>
                        </div>
                        <div class="latest-post-content">
                            <div class="single-tag">
                                <a href="<?= base_url().'category/'.$art['category_url']; ?>"> <?= $art['category_name']; ?></a>
                            </div>
                            <h2><a href="<?= base_url().'news/'.$art['article_url'] ?>"><?= substr($art['article_title'], 0,65); ?></a></h2>
                            <p><?= date('d M Y', strtotime($art['article_publish_date'])); ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="widget widget-categories">
            <div class="widget-title text-uppercase text-center">
                <h2>Categories</h2>
            </div>
            <ul>
                <?php foreach ($category as $key => $cat): ?>
                    <li class="cat-item"><a
                        href="<?= base_url().'category/'.$cat['category_url']; ?>"><?= $cat['category_name']; ?></a> <span
                        class="post_count pull-right"> (<?= $cat['jml']; ?> )</span>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body" align="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="<?= base_url('gambar/profil/Sinar Biyatnujanat.jpg'); ?>" alt="<?= $sosmed['settings_namesite']; ?>">
            </div>
        </div>
    </div>
</div>