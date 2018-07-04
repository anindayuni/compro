<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Form Edit Data Artikel</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Artikel</a></li>
                                    <li class="breadcrumb-item active">Edit Artikel</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Edit Data</strong> Artikel</h2>
                    </div>
                    <!-- <?php  
                        echo "<pre>";
                        print_r($status);
                        echo "</pre>";
                    ?> -->
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data">
                            <?php foreach ($artikel as $key => $art): ?>
                            <!-- <input type="hidden" name="article_create_date" value="<?php echo date('Y-m-d'); ?>"> -->
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama / Judul Artikel</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Judul Artikel" name="article_title" required="required" value="<?php echo $art['article_title']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Create Date</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="article_create_date" required="required" disabled="" value="<?php echo $art['article_create_date']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Publish Date</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="date" class="tanggal form-control" placeholder="" name="article_publish_date" required="required" value="<?php echo $art['article_publish_date']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <select class="form-control show-tick" name="article_status">
                                        <option <?php if ($art['article_status'] == '0') {echo "selected=selected";} ?> value="0">Non Aktif</option>
                                        <option <?php if ($art['article_status'] == '1') {echo "selected=selected";} ?> value="1">Aktif</option>
                                    </select>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <select class="form-control show-tick" name="article_id_category">
                                        <?php foreach ($kategori as $key => $kat): ?>
                                        <option <?php if ($art['article_id_category'] ==  $kat['category_id']) {echo "selected=selected";} ?> value="<?php echo $kat['category_id']; ?>"><?php echo $kat['category_name']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Konten</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="card">
                                        <div class="body">
                                            <textarea id="ckeditor" name="article_content">

                                            </textarea>
                                        </div>
                                    </div>
                                </div> 
                            </div><br>
                             
                             <?php endforeach; ?>

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
        <!-- #END# Horizontal Layout --> 
        
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('.tanggal').datepicker({
            format: "dd-mm-yyyy",
            autoclose:true
        });
    });
</script>