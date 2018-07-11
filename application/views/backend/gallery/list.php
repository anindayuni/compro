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
                <h2><strong> Data Gallery</strong></h2>
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
                <hr>    

                <br>    
                <script>


                    function hapus() {
                       var id = $("#id_artikel").val();
                       if(confirm('Anda yakin akan menghapus data ini ?')){
                        $.ajax({
                            url:"<?php echo base_url()?>logincms/gallery/hapus",
                            data:"id="+id,
                            success:function() {

                               window.location.reload();   
                           }
                       })
                        return true;
                    }else{
                        return false;    
                    }
                }




            </script>
            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                <?php foreach ($gallery as $g): 

                    $id=$g->article_id;
                    ?>


                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                        <a href="<?php echo  base_url('gambar/gallery/').$g->photo_img ?>">
                          
                          <img class="img-fluid img-thumbnail" src="<?php echo base_url('gambar/gallery/').$g->photo_img ?>" alt="" >

                        </a>

                      <form method="get" align="right">  
                        <input type="hidden" id="id_artikel" value="<?php echo $g->article_id?>">
                        <button type="submit" onclick="hapus()" class="btn btn-raised btn-primary btn-round waves-effect" >Delete</button>
                    </form>
                </div>

            <?php endforeach ?>



        </div>
    </div>
</div>
</div>


</div>



<div class="row">

    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 26 entries</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
            <!-- <ul class="pagination"> -->
<?php
echo $this->pagination->create_links();
?>
                <!-- <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li> -->
              
    
                <!-- <li class="paginate_button page-item active"><a href="<?php echo  base_url('logincms/gallery/index/1') ?>" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li> -->
                
                <!-- <li class="paginate_button page-item "><a href="<?php echo base_url('logincms/gallery/index/3') ?>" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li> -->
                
                <!-- <li class="paginate_button page-item "><a href="<?php echo base_url('logincms/gallery/index/6') ?>" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li> -->
                
                <!-- <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li> -->
            <!-- </ul> -->
        </div>
    </div>
</div>


