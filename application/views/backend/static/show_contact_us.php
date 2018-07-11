 <div class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Message</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Message</a></li>
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
                        <h2><strong> Message</strong></h2>
                        <ul class="header-dropdown">
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($message as $key => $pesan) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $key+1; ?></th>
                                        <td><?= $pesan['contact_us_name']; ?></td>
                                        <td><?= $pesan['contact_us_email']; ?></td>
                                        <td>
                                            <?php  
                                                $cetak = substr($pesan['contact_us_subject'], 0, 25);
                                                echo $cetak;
                                            ?>
                                        </td>
                                        <td>
                                            <a href="#lihat_pesan-<?= $pesan['contact_us_id']; ?>">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect"><i class="icon-eye"></i></button>
                                            </a>
                                            <!--  Modal Tampil Pesan -->
                                                <div class="light-modal" id="lihat_pesan-<?= $pesan['contact_us_id']; ?>" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
                                                    <div class="light-modal-content  animated zoomInUp">
                                                        <div class="light-modal-header">
                                                            <h3 class="light-modal-heading">Lihat Pesan</h3>
                                                            <a href="#" class="light-modal-close-icon" aria-label="close">&times;</a>
                                                        </div>
                                                        <!-- light modal body -->
                                                        <div class="light-modal-body">
                                                            <div></div>
                                                            
                                                            <form class="form-horizontal" id="form_validation" >
                                                                
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                                            <label>Nama Pengirim</label>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                                            <div class="form-group">
                                                                                <label>: </label>
                                                                                <label><?php echo $pesan['contact_us_name']; ?></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                                            <label>Email</label>
                                                                        </div>
                                                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                                                            <div class="form-group">
                                                                                <label>: </label>
                                                                                <label><?php echo $pesan['contact_us_email']; ?></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                                                <label>Subject</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                                                <div class="form-group">
                                                                                    <label>: </label>
                                                                                    <label><?php echo $pesan['contact_us_subject']; ?></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-4 col-md-4 col-sm-4 form-control-label">
                                                                                <label>Pesan</label>
                                                                            </div>
                                                                            <div class="col-lg-8 col-md-8 col-sm-8">
                                                                                <label>: </label>
                                                                            </div> 
                                                                               
                                                                        </div>
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 form-control-label">
                                                                                <textarea rows="8%" cols="60%"><?php echo $pesan['contact_us_message']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>

                                                                    <br>
                                                            <a href="<?php echo base_url('logincms/static_page/change_message_status/').$pesan['contact_us_id']; ?>">
                                                                <button class="btn btn-raised btn-primary btn-round waves-effect" align="right">TUTUP</button>
                                                            </a>
                                                        </div>
                                                        <div class="light-modal-footer">


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / Modal Tampil Pesan -->
                                            
                                            <a href="#hapus-pesan">
                                                <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-trash"></i></button>
                                            </a>
                                            <center>

                                            <!--  Modal Hapus Pesan -->
                                                <div class="light-modal" id="hapus-pesan" role="dialog" aria-labelledby="light-modal-label" aria-hidden="false">
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
                                                            <a href="<?php echo base_url('logincms/static_page/delete_message/').$pesan['contact_us_id']; ?>">
                                                                <button class="btn btn-raised btn-primary btn-round waves-effect" align="right">OK</button>
                                                            </a>
                                                        </div>
                                                        <div class="light-modal-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / Modal Hapus Pesan -->
                                            </center>
                                        </td>
                                        <td>
                                            <?php if ($pesan['contact_us_status'] == 1) : ?>
                                            <div class="checkbox">
                                                <input id="checkbox2" type="checkbox" checked="">
                                                <label for="checkbox2">
                                                    Dibaca
                                                </label>
                                            </div>
                                            <?php else : ?>
                                            <button class="btn btn-primary btn-icon  btn-icon-mini btn-round">
                                                <i class="icon icon-envelope"></i> 
                                            </button> Pesan
                                            <?php endif; ?>
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
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                vitae eros sit amet  Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
</div>

