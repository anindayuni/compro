<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Data Gallery</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
                                </ul>
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
                        <h2><strong> Data Gallery </strong></h2>
                        <!-- <label>Max Image 1 MB</label> -->
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/gallery') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Kembali</button></a>
                            </li>
                            <li>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- <form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="get" enctype="multipart/form-data"> -->
                            <?php 
                            echo $this->session->userdata('msg');
                            ?>
                            <form action="<?php echo base_url('logincms/gallery/add_action') ?>" id="uploadWidget" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                    <h4>Drop files here or click to upload Gallery</h4>
                                    <h5>[ Maksimum 1 MB / IMG ]</h5>
                                    <p>.gif &nbsp; .jpg &nbsp; .png &nbsp; .jpeg</p>
                                </div>

                                
                                <div class="fallback">
                                    <input id="file" name="file" type="file" multiple />
                           
                                </div>


                            </form>





                        </div>
                    </div>
                </div>
            </div>



<?php 
if (isset($pesan)) {
    echo $pesan;
}

 ?>

   