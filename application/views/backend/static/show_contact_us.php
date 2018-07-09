 <div class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Static Page</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Static Page</a></li>
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
                        <h2><strong> Daftar Static Page</strong></h2>
                        <ul class="header-dropdown">
                            <!-- <li>
                                <a href="<?php echo base_url('logincms/artikel/add'); ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah Artikel</button></a>
                            </li> -->
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($message as $key => $pesan) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $key+1; ?></th>
                                        <td><?= $pesan['contact_us_name']; ?></td>
                                        <td><?= $pesan['contact_us_email']; ?></td>
                                        <td><?= $pesan['contact_us_subject']; ?></td>
                                        <td>
                                            <a href="#defaultModal" data-toggle="modal" data-target="#defaultModal"> dfdf</a>  
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" data-toggle="modal" data-target="#exampleModal"><i class="icon-eye"></i></button>
                                            <button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" label="Detail"><i class="icon-trash"></i></button>
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

