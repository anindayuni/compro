<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body block-header">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <h2>Data Gallery</h2>
                        <ul class="breadcrumb p-l-0 p-b-0 ">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active"> Gallery</li>
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
                <h2><strong> Data Gallery <?php print_r($row) ?></strong></h2>
                <ul class="header-dropdown">
                    <li>
                        <a href="<?php echo base_url('logincms/gallery/add') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Tambah Gallery</button></a>
                    </li>
                    <li>
                        &nbsp;
                    </li>
                </ul>
            </div>
            <div class="body">
                        <table> 
                                <tr>
                                    <th>   No</th>
                                    <th>   Gambar</th>
                                    <th>   aksi</th>
                                </tr>
                                <?php foreach ($gallery as $g): ?>
                                    
                                <tr>    
                                        <td><?php echo  $g->article_id ?></td>
                                        <td><?php echo  $g->photo_img ?></td>
                                        <td></td>
                                </tr>
                                <?php endforeach ?>

                        </table>
<?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>


        </div>

