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
                <h2><strong> Data Gallery <?php     print_r($row) ?></strong></h2>
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


                    var canvas= document.getElementById("MyCanvas").getContext("2d");

            </script>
            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                <?php foreach ($gallery as $g): ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> 
                        <!-- <a href="<?php echo  base_url('gambar/gallery/').$g->photo_img ?>"> -->
                            <!-- <img class="img-fluid img-thumbnail" src="<?php echo base_url('gambar/gallery/').$g->photo_img ?>" alt="" >  -->
                            <canvas id="MyCanvas" width="100px" height="100px" style="border: 1px">    
                                <img class="img-fluid img-thumbnail" src="<?php echo base_url('gambar/gallery/').$g->photo_img ?>" alt="" > 
                            </canvas>
                            <!-- </a> -->
                            <form method="get" align="right">  
                                <input type="hidden" id="id_artikel" value="<?php echo $g->article_id?>">
                                <button type="submit" onclick="hapus()" class="btn btn-raised btn-primary btn-round waves-effect" >Delete</button>
                            </form>
                        </div>

                    <?php endforeach ?>
                    <?php
                    echo $this->pagination->create_links();
                    ?>

                        <!--     <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/2.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/2.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/3.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/3.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/4.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/4.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/5.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/5.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/6.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/6.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/7.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/7.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/8.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/8.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/9.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/9.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/10.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/10.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/11.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/11.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/12.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/12.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/13.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/13.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/14.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/14.jpg" alt=""> </a> </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b-30"> <a href="assets/images/image-gallery/15.jpg"> <img class="img-fluid img-thumbnail" src="assets/images/image-gallery/15.jpg" alt=""> </a> </div> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>

