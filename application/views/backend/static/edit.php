<section class="content" style="min-height: 800px;">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Form Edit Static Page</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Static</a></li>
                                    <li class="breadcrumb-item active">Static Page</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <a href="<?php echo base_url('logincms/static_page'); ?>">
                                    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10"><i class="icon-arrow-left"></i> Kembali</button>
                                </a>
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
                        <h2><strong>Edit Data</strong> Static Page</h2>
                    </div>
                    
                    <div class="body">
                        <form class="form-horizontal" id="form_validation" method="post" enctype="multipart/form-data">
                            <?php foreach ($static as $key => $st): ?>
                            <input type="hidden" name="article_url" value="<?php echo $st['article_url']; ?>">
                            <input type="hidden" name="article_create_date" value="<?php echo $st['article_create_date']; ?>">
                            <input type="hidden" name="article_publish_date" value="<?php echo $st['article_publish_date']; ?>">
                            <input type="hidden" name="article_id_category" value="<?php echo $st['article_id_category']; ?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Nama / Judul Artikel</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="article_title" required="required" value="<?php echo $st['article_title']; ?>">
                                    </div>
                                </div>
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Kategori</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" value="<?php echo $st['category_name']; ?>" disabled="">
                                    </div>
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
                                                <?php echo $st['article_content']; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div> 
                            </div><br>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label>Status</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <div class="radio inlineblock m-r-20">
                                            <input type="radio" name="article_status" id="male" class="with-gap" value="0" <?php if($st['article_status'] == 0) {echo "checked=''";} ?> >
                                            <label for="male">Non Aktif</label>
                                        </div>                                
                                        <div class="radio inlineblock">
                                            <input type="radio" name="article_status" id="Female" class="with-gap" value="1" <?php if($st['article_status'] == 1) {echo "checked=''";} ?>>
                                            <label for="Female">Aktif</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             
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