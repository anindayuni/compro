 <section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Artikel</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('logincms/home'); ?>"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Artikel</a></li>
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
                        <h2><strong> Data Artikel</strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/artikel/add'); ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah Artikel</button></a>
                            </li>
                            <li>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Terbit</th>
                                    <th>Status</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($artikel as $key => $art) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1; ?></th>
                                    <td>
                                        <?php  
                                            $cetak = substr($art['article_title'], 0, 50);
                                            echo $cetak." . . .";
                                        ?>
                                    </td>
                                    <td><?php echo $art['category_name']; ?></td>
                                    <td><?php echo date("d-F-Y", strtotime($art['article_publish_date'])); ?></td>
                                    <td>
                                        <?php 
                                        if ($art['article_status'] == 1){
                                            echo "Aktif";
                                        }
                                        else{
                                            echo "Tidak Aktif";
                                        } 
                                        ?>    
                                    </td>
                                    
                                    <td>
                                        <center>
                                            <!-- <div class="js-sweetalert"> -->
                                                <a href="<?php echo base_url('logincms/artikel/detail/').$art['article_id']; ?>">
                                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-eye"></i></button>
                                                </a>
                                                <a href="<?php echo base_url('logincms/artikel/edit/').$art['article_id']; ?>">
                                                    <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-pencil"></i></button>
                                                </a>

                                                <a href="#hapus-article-<?php echo $art['article_id']; ?>">
<<<<<<< HEAD
                                                    <button class="btn btn-raised btn-primary waves-effect btn-round"><i class="icon-trash"></i></button>
=======
                                                    <button class="btn btn-raised btn-primary waves-effect btn-round"><i class="icon-trash"></i><?php echo $art['article_id']; ?></button>
>>>>>>> 73e71027c7166de134e9639122410389df9be8d1
                                                </a>

                                                <!--  Modal Hapus Artikel -->
                                                <div class="light-modal" id="hapus-article-<?php echo $art['article_id']; ?>" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
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
                                                            <a href="<?php echo base_url('logincms/artikel/delete/').$art['article_id']; ?>">
                                                                <button class="btn btn-raised btn-primary btn-round waves-effect" align="right">OK <?php echo $art['article_id']; ?></button>
                                                            </a>
                                                        </div>
                                                        <div class="light-modal-footer">


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / Modal Hapus Artikel -->

                                            <!-- </div> -->
                                        </center>
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
                                                <!-- Modal Default Size -->
                                                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            
                                                            </div>
                                                           
                                                            <pre>
                                                                <?php print_r('$art[article_id]'); ?>
                                                            </pre>
                                                            
                                                            <div class="modal-body">Apakah Anda Yakin Ingin Menghapus Data Ini? </div>
                                                            <div class="modal-footer">
                                                                <a href="<?php echo base_url('logincms/artikel/hapus/').$art['article_id']; ?>">
                                                                    <button type="button" class="btn btn-primary btn-round waves-effect">YA</button>
                                                                </a>
                                                                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">TIDAK</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>