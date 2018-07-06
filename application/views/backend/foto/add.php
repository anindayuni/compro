 <!-- <h1>Tambah Gambar</h1><hr> -->
<!-- Menampilkan Error jika validasi tidak valid -->
<!-- <div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php echo form_open("logincms/foto/add_action", array('enctype'=>'multipart/form-data')); ?>
  <table cellpadding="8">
    <tr>
      <td>Deskripsi</td>
      <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><input type="file" name="input_gambar"></td>
    </tr>
  </table>
    
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
 -->




<?php 
// die;
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
                        <!-- <form action="<?php echo base_url('logincms/foto/tambah') ?>" method="post" enctype="multipart/form-data"> -->
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
                                    <!-- <input type="text" class="form-control" placeholder="Password"> -->
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
                                    <!-- <label>Upload Foto</label> -->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="form-group">
                                  <input type="submit" name="submit" value="Simpan">
                                    <!-- <button type="submit" value="upload" class="btn btn-raised btn-primary btn-round"><i class="fa fa-check"></i> Simpan</button> -->

                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


