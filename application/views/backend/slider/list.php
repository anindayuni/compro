<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <h2>Data Slider</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active"> Slider</li>
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
                        <h2><strong> Data slider </strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/slider/add') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah slider</button></a>
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
                                    <th>Nama Slider</th>
                                    <th>Foto</th>
                                    <th>Nama File</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                foreach ($slider as $f): ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $f->article_title?></td>
                                        <td><img height="50px" width="50px" src="<?php echo base_url("gambar/slider/$f->photo_img")?>"></td>
                                        <td><?php echo $f->photo_img ?></td>
                                        <td><?php echo date('m-d-Y', strtotime($f->article_create_date))?></td>
                                        
                                        <?php 
                                        if ($f->article_status==0) {
                                            $tampil_status='Non Aktif';
                                        }
                                        else {
                                            $tampil_status='Aktif';
                                        }
                                        ?>

                                        <!-- <td><?php echo $tampil_status ?></td> -->
                                        <td><input type="radio" name="buah" onclick="displayResult(this.value)" value="Anggur">Anggur
                                            <input type="radio" name="buah" onclick="displayResult(this.value)" value="Apel">Apel
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('logincms/slider/edit/').$f->article_id?>"> <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-pencil"> </i>  </button></a>
                                            <a href="<?php echo base_url('logincms/slider/delete/').$f->article_id?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"> <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-trash"> </i>  </button></a>


                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>