<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Kategori</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Kategori</a></li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong> Data Kategori</strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/kategori/add'); ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah Kategori</button></a>
                            </li>
                            <li>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>URL</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kategori as $key => $kat) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1; ?></th>
                                    <td><?php echo $kat['category_name']; ?></td>
                                    <td><img src="<?php echo base_url('gambar/').$kat['category_photo']; ?>" height="50" width="50"></td>
                                    <td>
                                        <?php 
                                        if ($kat['category_status'] == 1){
                                            echo "On";
                                        }
                                        else{
                                            echo "Off";
                                        } 
                                        ?>    
                                    </td>
                                    <td><?php echo $kat['category_type']; ?></td>
                                    <td><?php echo $kat['category_url']; ?></td>
                                    <td>
                                       <!--  <center> -->
                                        <a href="<?php echo base_url('logincms/kategori/detail/').$kat['category_id']; ?>">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-eye"></i></button>
                                        </a>
                                        <a href="<?php echo base_url('logincms/kategori/edit/').$kat['category_id']; ?>">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-pencil"></i></button>
                                        </a>
                                        <?php if ($kat['category_type'] != "static") : ?>
                                        <a href="">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-trash"></i></button>
                                        </a>
                                        <?php endif; ?>
                                       <!--  </center> -->
                                    </td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows --> 
    </div>
</section>