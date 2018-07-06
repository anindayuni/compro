<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <h2>Data Photo</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Photo</li>
                                </ul>
                            </div>            
                            <div class="col-lg-3 col-md-8 col-sm-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong> Data foto </strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                <a href="http://localhost/github/company-profile/logincms/foto/add"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah foto</button></a>
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
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($foto as $f): ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $f->photo_id_article ?></td>
                                        <td><img height="50px" width="50px" src="<?php echo base_url("gambar/$f->photo_img")?>"></td>
                                        <td><?php echo $f->photo_date?></td>
                                        <td><a href="<?php echo base_url('logincms/foto/delete/').$f->photo_id?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"> <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-trash"> </i> Delete </button></a></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>