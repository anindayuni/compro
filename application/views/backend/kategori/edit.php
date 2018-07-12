<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Form Edit Data Kategori</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/kategori'); ?>">Kategori</a></li>
                                    <li class="breadcrumb-item active">Edit Kategori</li>
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
                        <h2><strong>Edit Data</strong> Kategori</h2>
                    </div>
                    
                    <div class="body">
                        
                        <form class="form-horizontal" id="form_validation" method="POST" enctype="multipart/form-data">

                            <?php foreach ($kategori as $key => $kat): ?>
                            <input type="hidden" name="category_id" value="<?php echo $kat['category_id']; ?>">
                            <input type="hidden" name="category_date" value="<?php echo $kat['category_date']; ?>">
                            <input type="hidden" name="category_type" value="<?php echo $kat['category_type']; ?>">
                            <input type="hidden" name="category_url" value="<?php echo $kat['category_url']; ?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="category_name" required="required" value="<?php echo $kat['category_name']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Sub Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="category_sub_category" value="<?php echo $kat['category_sub_category']; ?>">
                                    </div>
                                </div>
                            </div>

                           <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <select class="form-control show-tick" name="category_status">
                                        <option value="0" <?php if($kat['category_status'] == 0){echo "selected=selected";} ?>>Off</option>
                                        <option value="1" <?php if($kat['category_status'] == 1){echo "selected=selected";} ?>>On</option>
                                    </select>
                                </div> 
                            </div><br>

                             <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label >Foto</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="file" name="category_photo" value="<?php echo $kat['category_photo']; ?>">
                                    </div>
                                    <span><?php echo $kat['category_photo'];?></span>
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
                        <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout --> 
        
    </div>
</section>