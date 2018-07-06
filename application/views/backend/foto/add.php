<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Data Foto</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Foto</li>
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
                        <h2><strong>Data</strong>Foto</h2>

                    </div>
                    <div class="body">
                      
                        <?php echo form_open("logincms/foto/add_action", array('enctype'=>'multipart/form-data')); ?>

                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                   <label>Judul Artikel</label>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">

                                <select name="judul_artikel" class="form-control show-tick">
                                    <?php foreach ($judul_artikel as $j): ?>
                                        <option value="<?php echo $j->article_id ?>"><?php echo $j->article_title ?></option>
                                    <?php endforeach ?>
                                </select>
                                
                            </div>
                        </div>



                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                                <label>Upload Foto</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">

                                <input type="file" name="userfile"/>

                            </div>
                        </div>
                    </div>


                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group">
                              <input  class="btn btn-raised btn-primary btn-round" type="submit" name="submit" value="Simpan">
                              

                          </div>
                      </div>

                  </div>

              </form>
          </div>
      </div>
  </div>
</div>


