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
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Artikel</a></li>
                                    <li class="breadcrumb-item active">Detail Artikel</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Detail</strong> Artikel</h2>
                    </div>
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data">
                            <?php foreach ($artikel as $key => $art): ?>
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
                                    <label>Create Date</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo date("d-F-Y", strtotime($art['article_create_date'])); ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Publish Date</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo date("d-F-Y", strtotime($art['article_publish_date'])); ?></label>
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
                             
                             <?php endforeach; ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout --> 
        
    </div>
</section>