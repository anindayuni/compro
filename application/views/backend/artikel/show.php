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
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Create Date</th>
                                    <th>Publish Date</th>
                                    <th>Status</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($artikel as $key => $art) : ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1; ?></th>
                                    <td><?php echo $art['article_title']; ?></td>
                                    <td><?php echo $art['category_name']; ?></td>
                                    <td><?php echo date("d-F-Y", strtotime($art['article_create_date'])); ?></td>
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
                                        <div class="js-sweetalert">
                                            <a href="">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-eye"></i></button>
                                            </a>
                                            <a href="<?php echo base_url('logincms/artikel/edit/').$art['article_id']; ?>">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit"><i class="icon-pencil"></i></button>
                                            </a>
                                            <button class="btn btn-raised btn-primary waves-effect btn-round" data-type="ajax-loader"><i class="icon-trash"></i></button>

                                       </div>
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