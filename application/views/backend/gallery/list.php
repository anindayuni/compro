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


            <style type="text/css">
            ul .page-item{
                /*padding-left: 30px;*/
                padding-right: 30px;
                /*font-size: 10px;*/
            }

            li .active {
                padding-right: 30px;
            }

            .frame-gallery{
                height: 250px;
                /*background: black;*/
                /*z-index: 100;*/
                /*position:inherit;*/
                /*float: left;*/
                width: 100%;
                /*height: 220px;*/
                /*max-height: 270px;*/
            }  

            .img-thumbnail {
                /*max-height: 300px;*/
            }

           .frame-gallery{
                /*text-align: center;*/
                /*vertical-align: middle;*/
                /*horizontal-align:middle;*/
                /*z-index: -400;*/
                /*align:'center';*/
                /*margin-left: auto;*/
                /*margin-right: auto;*/
                /*object-fit: cover;*/
                /*object-position: center;*/
                /*object-position: 50% 50%;*/
                overflow: hidden;
                /*overflow: auto;*/

            }


        </style>

        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
            <?php foreach ($gallery as $g): 

                $id=$g->article_id;

                ?>


                <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                    <a href="<?php echo  base_url('gambar/gallery/').$g->photo_img ?>">
                        <div class="frame-gallery">

                          <img class="img-fluid img-thumbnail object" src="<?php echo base_url('gambar/gallery/').$g->photo_img ?>" alt="" >

                      </div>
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




<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">

            <div class="body">
                <div>
                    <div  class="dataTables_wrapper">
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing <?php 

                                    if (empty($this->uri->segment('4'))) {
                                        echo '1';
                                    }
                                    else {
                                        echo $this->uri->segment('4');
                                    }
                                 ?> to  of <?php echo $total_rows ?> entries</div>
                            </div>

                            <div class="col-sm-12 col-md-7">
                                <!-- <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"> -->
                                    <div >


                                        <?php echo $mpaging; ?>
<!--                         <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>

                        </ul>
                    -->                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

