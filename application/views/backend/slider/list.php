<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <h2>Data Slider</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active"> Slider</li>
                                </ul>
                            </div>            
                            <div class="col-lg-3 col-md-8 col-sm-12">
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
                        <h2><strong> Data slider </strong></h2>
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/slider/add') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah slider</button></a>
                            </li>
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
                                    <th>Nama Slider</th>
                                    <th>Foto</th>
                                    <th>Nama File</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <form method="get">
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach ($slider as $f): ?>

                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $f->article_title?></td>
                                            <td><img height="50px" width="50px" src="<?php echo base_url("gambar/slider/$f->photo_img")?>"></td>
                                            <td><?php echo $f->photo_img ?></td>
                                            <td><?php echo date('m-d-Y', strtotime($f->article_create_date))?></td>

                                            <?php 
                                            if ($f->article_status==0) {
                                                $tampil_nonaktif='checked=""';
                                                $tampil_aktif='';
                                            }
                                            else {
                                                $tampil_nonaktif='';
                                                $tampil_aktif='checked=""';
                                            }
                                            ?>

                                            <?php 

                                            $status_name='status_name'.$f->article_id;
                                            $status_id_aktif='status_a'.$f->article_id;
                                            $status_id_nonaktif='status_na'.$f->article_id;
                                            $id='id'.$f->article_id;
                                            $status_function_aktif='update_a'.$f->article_id.'()';
                                            $status_function_nonaktif='update_na'.$f->article_id.'()';

                                            ?>

                                            <script type="text/javascript">
                                                function <?php echo $status_function_aktif ?>{ 
                                                  var status = $("#<?php echo $status_id_aktif ?>").val();
                                                  var id = $("#<?php echo $id ?>").val();
                                                  $.ajax({
                                                    url:"<?php echo base_url()?>logincms/slider/update_status",
                                                    data:"status_aktif="+status+"&id="+id,
                                                    success:function(html) {
                                                        alert('Status slider berhasil diubah menjadi aktif');

                                                    }

                                                })

                                              }
                                              function <?php echo $status_function_nonaktif ?>{ 
                                                var status = $("#<?php echo $status_id_nonaktif ?>").val();
                                                var id = $("#<?php echo $id ?>").val();
                                                $.ajax({
                                                    url:"<?php echo base_url()?>logincms/slider/update_status",
                                                    data:"status_aktif="+status+"&id="+id,
                                                    success:function(html) {
                                                        alert('Status slider berhasil diubah menjadi non aktif');

                                                    }

                                                })

                                            }
                                        </script>
                                        <!-- <td><?php echo $tampil_status ?></td> -->
                                        <td>



                                            <div class="radio inlineblock m-r-20">
                                                <input type="hidden" name="id_artikel" id="<?php echo $id ?>" value="<?php echo $f->article_id ?>">

                                                
                                                <input type="radio" <?php echo $tampil_aktif ?> id="<?php echo $status_id_aktif ?>" name="<?php echo $status_name ?>" onchange="<?php echo $status_function_aktif ?>" value="1" class="with-gap">
                                                <!-- <input type="radio" name="article_status" id="male"  value="0" checked=""> -->
                                                <label for="<?php echo $status_id_aktif ?>">Aktif</label>
                                            </div>                                
                                            <div class="radio inlineblock">
                                             <input type="radio" <?php echo $tampil_nonaktif ?> id="<?php echo $status_id_nonaktif ?>" name="<?php echo $status_name ?>" onchange="<?php echo $status_function_nonaktif ?>" value="0" class="with-gap">
                                             <label for="<?php echo $status_id_nonaktif ?>">Non Aktif</label>
                                         </div>


                                     </td>
                    </form>
                                     <td>
                                        <a href="<?php echo base_url('logincms/slider/edit/').$f->article_id?>"> <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-pencil"> </i>  </button></a> 
                                        <a href="<?php echo base_url('logincms/slider/delete/').$f->article_id?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')"> <button class="btn btn-raised btn-primary btn-round" data-type="basic"><i class="icon-trash"> </i>  </button></a> 


                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


