<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Detail Artikel</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/artikel'); ?>">Artikel</a></li>
                                    <li class="breadcrumb-item active">Detail Artikel</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="<?php echo base_url('logincms/artikel'); ?>">
                                    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10"><i class="icon-arrow-left"></i> Kembali</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php foreach ($artikel as $key => $art): ?>
                <div class="card">
                    <div class="header">
                        <h2><strong>Detail</strong> Artikel</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <label>Create Date</label>
                                <label>: </label>
                                <label><?php echo date("d-F-Y", strtotime($art['article_create_date'])); ?></label>
                            </li>
                            &nbsp; | &nbsp;
                            <li class="remove">
                                <label>Publish Date</label>
                                <label>: </label>
                                <label><?php echo date("d-F-Y", strtotime($art['article_publish_date'])); ?></label>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data">
                            
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama / Judul Artikel</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo $art['article_title']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <label>: </label>
                                    <label>
                                        <?php if ($art['article_status'] == 0): echo "Non Aktif"; ?>
                                        <?php elseif ($art['article_status'] == 1): echo "Aktif"; ?>
                                        <?php else : echo "Cek Status Artikel Anda"; ?>
                                        <?php endif; ?>
                                    </label>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <label>: </label>
                                    <label><?php echo $art['category_name']; ?></label>
                                </div> 
                            </div><br>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>URL</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo $art['article_url']; ?></label>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Featured Image</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <?php foreach ($gambar as $key => $gbr) : ?>
                                        <img src="<?php if($gbr['photo_img']==null){ echo base_url('gambar/article/no-image.jpg'); } else {echo base_url('gambar/article/').$gbr['photo_img']; } ?>" width="150" height="150">
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Konten</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="card">
                                        <div class="body">
                                            <label><?php echo $art['article_content']; ?></label>
                                        </div>
                                    </div>
                                </div> 
                            </div><br>


                            <div class="row clearfix">
                                
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                             
                             <?php endforeach; ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout --> 
        
    </div>
</section>