<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Form Input Data Kategori</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Kategori</a></li>
                                    <li class="breadcrumb-item active">Tambah Kategori</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="<?php echo base_url('logincms/kategori'); ?>">
                                    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10"><i class="icon-arrow-left"></i> KEMBALI</button>
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
                        <h2><strong>Tambah Data</strong> Kategori</h2>
                    </div>
                    
                    <div class="body">
                        
                        <form class="form-horizontal" id="form_validation" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="category_date" value="<?php echo date('Y-m-d'); ?>">
                            <input type="hidden" name="category_type" value="blog">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Kategori" name="category_name" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Sub Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Sub Kategori" name="category_sub_category">
                                    </div>
                                </div>
                            </div>

                           <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <select class="form-control show-tick" name="category_status">
                                        <option value="0">Off</option>
                                        <option value="1">On</option>
                                    </select>
                                </div> 
                            </div><br>
                            
                             <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label >Foto</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="file" name="category_photo">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-8 offset-sm-2">
                                    &nbsp;
                                </div>
                                <div class="col-sm-8 offset-sm-2">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout --> 
        
    </div>
</section>