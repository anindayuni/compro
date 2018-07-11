<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Detail Static Page</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Static</a></li>
                                    <li class="breadcrumb-item active">Detail Static Page</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="<?php echo base_url('logincms/static_page'); ?>">
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

             <?php foreach ($static as $key => $st): ?>
                <div class="card">
                    <div class="header">
                        <h2><strong>Detail</strong> Static Page</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown">
                                <label>Create Date</label>
                                <label>: </label>
                                <label><?php echo date("d-F-Y", strtotime($st['article_create_date'])); ?></label>
                            </li>
                            &nbsp; | &nbsp;
                            <li class="remove">
                                <label>Publish Date</label>
                                <label>: </label>
                                <label><?php echo date("d-F-Y", strtotime($st['article_publish_date'])); ?></label>
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
                                        <label><?php echo $st['article_title']; ?></label>
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
                                        <label><?php echo date("d-F-Y", strtotime($st['article_create_date'])); ?></label>
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
                                        <label><?php echo date("d-F-Y", strtotime($st['article_publish_date'])); ?></label>
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
                                        <?php if ($st['article_status'] == 0): echo "<i class='icon-close'></i> Non Aktif"; ?>
                                        <?php elseif ($st['article_status'] == 1): echo "<i class='icon-check'></i> Aktif"; ?>
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
                                    <label><?php echo $st['category_name']; ?></label>
                                </div> 
                            </div><br>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>URL</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo $st['category_url']; ?></label>
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
                                        <img src="<?php echo base_url('gambar/category/').$st['category_photo']; ?>" width="100" height="100">
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
                                            <label><?php echo $st['article_content']; ?></label>
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