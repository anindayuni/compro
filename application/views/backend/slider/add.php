<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Data slider</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">slider</li>
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
                    <h2><strong>Tambah Data</strong> Slider</h2>
                </div>
                
                <div class="body">
                    <form action="<?php echo base_url('logincms/slider/add_action') ?>" class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <!-- <input type="hidden" name="article_create_date" value="2018-07-06">
                        <input type="hidden" name="article_publish_date" value="2018-07-06"> -->


                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label>Nama Slider</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukkan nama slider" name="nama_slider" required="required" aria-required="true">
                                </div>
                            </div>
                        </div> <br>


                        <div class="row clearfix">
                          <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <div class="form-group">
                                    <label>Upload Foto</label>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">

                                    <input type="file" name="userfile"/>

                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label>Status</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">
                                    <div class="radio inlineblock">
                                        <input type="radio" name="article_status" id="aktif" class="with-gap" value="1" checked="">
                                        <label for="aktif">Aktif</label>
                                    </div>
                                    <div class="radio inlineblock m-r-20">
                                        <input type="radio" name="article_status" id="nonaktif" class="with-gap" value="0">
                                        <label for="nonaktif">Non Aktif</label>
                                    </div>                                
                                </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



