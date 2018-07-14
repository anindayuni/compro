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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
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
                                    <th>Foto</th>
                                    <th>Nama Kategori</th>
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
                                    <td><img src="<?php echo base_url('gambar/category/').$kat['category_photo']; ?>" height="50" width="50"></td>
                                    <td><?php echo $kat['category_name']; ?></td>
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
                                    <td align="center">
                                        <!-- <center> -->
                                        <a href="<?php echo base_url('logincms/kategori/detail/').$kat['category_id']; ?>">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-eye"></i></button>
                                        </a>
                                        <a href="<?php echo base_url('logincms/kategori/edit/').$kat['category_id']; ?>">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-pencil"></i></button>
                                        </a>
                                        <?php if ($kat['category_type'] == "blog") : ?>
                                        <a href="#hapus-kategori-<?php echo $kat['category_id']; ?>">
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-trash"></i></button>
                                        </a>
                                        <?php endif; ?>

                                            <!--  Modal Hapus Kategori -->
                                            <div class="light-modal" id="hapus-kategori-<?php echo $kat['category_id']; ?>" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
                                                <div class="light-modal-content  animated zoomInUp">
                                                    <div class="light-modal-header">
                                                        <!-- <h3 class="light-modal-heading"></h3> -->
                                                        <a href="#" class="light-modal-close-icon" aria-label="close">&times;</a>
                                                    </div>
                                                    <!-- light modal body -->
                                                    <div class="light-modal-body">
                                                        <div></div>
                                                        Anda Yakin Ingin Menghapus Data Ini ?
                                                        <br><br>
                                                        <a href="#">
                                                            <button class="btn btn-raised btn-primary btn-round waves-effect" align="right">CANCEL</button>
                                                        </a>
                                                        <a href="<?php echo base_url('logincms/kategori/delete/').$kat['category_id']; ?>">
                                                            <button class="btn btn-raised btn-primary btn-round waves-effect" align="right">OK</button>
                                                        </a>
                                                    </div>
                                                    <div class="light-modal-footer">
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- / Modal Hapus Kategori -->


                                        <!-- </center> -->
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
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                ...
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>