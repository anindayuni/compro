 <?php 
 foreach ($settings as $s) {



    if ($status['settings_maintenance']==0) {
        $cekAktif=FALSE;
        $cekNonAktif=TRUE;
    }
    else {
       $cekAktif=TRUE;   
       $cekNonAktif=FALSE;   
   }
   ?>

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
                        <h2><strong>Data</strong> Settings</h2>
                    </div>
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" action="<?php echo base_url('logincms/settings/update/1') ?>" method="get"enctype="multipart/form-data" novalidate="novalidate">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Maintenance</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                   <!--      <div class="form-group">
                                            <div class="radio inlineblock m-r-20">
                                                <input type="radio" name="maintenance_name" id="male" class="with-gap" value="1" checked="true">

                                                <label for="male">Aktif</label>
                                            </div>                                
                                            <div class="radio inlineblock">
                                               <input type="radio" name="maintenance_name" id="Female" class="with-gap" value="0" checked="">
                                               <label for="Female">Non Aktif</label>
                                           </div>
                                       </div>
 -->


                                        <!-- <div class="radio inlineblock m-r-20"> -->
                                           <?php echo form_radio($data = array('name'=>'maintenance_name'), $value = '1', $checked = $cekAktif, $extra = ' class="with-gap"') ?> <label>Aktif</label> <br>
                                       <!-- </div> -->
                                            <!-- <div class="radio inlineblock"> -->
                                           <?php echo form_radio($data = array('name'=>'maintenance_name'), $value = '0', $checked = $cekNonAktif, $extra = ' class="with-gap"') ?> <label>Non Aktif</label>
                                           <!-- </div> -->
                                       </div>
                                   </div>
                               </div>
                               <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Instagram</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                     <input type="text" class="form-control" name="instagram_name" placeholder="Url" value="<?php echo $url['settings_instagram'] ?>">
                                 </div>
                             </div>
                         </div>
                         <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label>Facebook</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="facebook_name" placeholder="Url" value="<?php echo $url['settings_facebook'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label>Twitter</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="twitter_name" placeholder="Url" value="<?php echo $url['settings_twitter'] ?>">
                                </div>
                            </div>

                        </div><br>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                <label>Youtube</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="youtube_name" placeholder="Url" value="<?php echo $url['settings_youtube'] ?>">
                                </div>
                            </div>

                        </div><br>





                        <div class="row clearfix">
                            <div class="col-sm-8 offset-sm-2">
                                &nbsp;
                            </div>
                            <div class="col-sm-8 offset-sm-2">
                                <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-pencil"></i> Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php 
}
?>

