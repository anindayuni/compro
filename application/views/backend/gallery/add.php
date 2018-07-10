<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Data Gallery</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Gallery</li>
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
                        <h2><strong>File Upload</strong> </h2>

                    </div>
                    <div class="body">
                        <!-- <form action="" id="frmFileUpload" class="dropzone dz-clickable" method="get" enctype="multipart/form-data"> -->
                            <form action="<?php echo base_url('logincms/gallery/add_action') ?>" id="frmFileUpload" class="dropzone dz-clickable" method="get" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                    <h4>Drop files here or click to upload Gallery</h4>
                                    </div>

                                    <div class="fallback">
                                        <input id="file" name="file" type="file" multiple />
                                    </div>

                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <script type="text/javascript">
                   
                   $(document).ready(function() {
                       $(document).on('change'),'#file', function(){
                            var property=document.getElementById("file").files[0];
                            var image_name = property.name;
                            var image_extension = image_name.split('.').pop().toLowerCase();
                            if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg']) == -1)
                            {
                                alert('invalid image file');
                            }

                            var image_size = property.size;
                            if(image_size > 2000000){
                                alert('gambar kegedean');
                            }
                            else {
                                var form_data = new FormData();
                                form_data.append("file", property);

                                $.ajax({
                                    url:"",
                                    method:"GET",
                                    data:form_data,
                                    contentType:false,
                                    cache:false,
                                    processData:false,
                                    success:function(){
                                            alert('sukses');
                                    }
                                })
                            }


                       }
                   });


              </script>

              