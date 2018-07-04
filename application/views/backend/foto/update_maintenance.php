 <!-- Main Content -->
 <section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Data Settings</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Settings</li>
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

<?php 

if ($status['settings_maintenance']==0) {
    $hasil_status='non aktif';
}

else {
 $hasil_status='aktif';   
}
 ?>
                                        <h2><strong>Update</strong> Maintenance <?php echo $status['settings_maintenance'].' - '.$hasil_status ; ?>
                                        </div>

                                        <!-- form  -->


                                        <div class="body">



                                            <div class="row clearfix">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <form action="<?php echo base_url('logincms/settings/update_maintenance_action/1') ?>" method="get" >
                                                            <?php echo form_dropdown($name = 'maintenance_name', $options = array(''=>$hasil_status,'1'=>'aktif','0'=>'non aktif'), $selected = array(''), $extra = 'class="form-control show-tick"') ?>
                                                         <!-- <select class="form-control show-tick" tabindex="-98">
                                                            <option value="">-- Please select --</option>
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Non Aktif</option>
                                                        </select> -->

                                                    </div>

                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">                                    
                                                        <button type="submit" class="btn btn-raised btn-primary btn-round"><i class="fa fa-check"></i> Simpan</button>
                                                    </form>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>



