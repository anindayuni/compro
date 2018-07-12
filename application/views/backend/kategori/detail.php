<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Detail Kategori</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/kategori'); ?>">Kategori</a></li>
                                    <li class="breadcrumb-item active">Detail Kategori</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="<?php echo base_url('logincms/kategori'); ?>">
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
                <div class="card">
                    <div class="header">
                        <h2><strong>Detail</strong> Kategori</h2>
                    </div>
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data">
                            <?php foreach ($kategori as $key => $kat): ?>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo $kat['category_name']; ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Sub Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label>
                                            <?php if (empty($kat['category_sub_category'])): echo " - ";  ?>
                                            <?php else : echo $kat['category_sub_category']; ?>
                                            <?php endif; ?>
                                            
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Tanggal Create Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <label>: </label>
                                        <label><?php echo date("d-F-Y", strtotime($kat['category_date'])); ?></label>
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
                                        <?php if ($kat['category_status'] == 0): echo "Off"; ?>
                                        <?php elseif ($kat['category_status'] == 1): echo "On"; ?>
                                        <?php else : echo "Cek Status Kategori Anda"; ?>
                                        <?php endif; ?>
                                    </label>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Tipe Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <label>: </label>
                                    <label><?php echo $kat['category_type']; ?></label>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Foto Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    
                                        <img src="<?php echo base_url('gambar/category/').$kat['category_photo']; ?>" height="150" width="150">
                                       
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