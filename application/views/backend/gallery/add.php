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
                        <h2><strong> Data Gallery </strong></h2>
                        <!-- <label>Max Image 1 MB</label> -->
                        <ul class="header-dropdown">
                            <li>
                                <a href="<?php echo base_url('logincms/gallery') ?>"><button class="btn btn-raised btn-primary btn-round waves-effect" type="submit" align="right">Kembali</button></a>
                            </li>
                            <li>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <!-- <form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="get" enctype="multipart/form-data"> -->
                            <?php 
                            echo $this->session->userdata('msg');
                            ?>
                            <form action="<?php echo base_url('logincms/gallery/add_action') ?>" id="uploadWidget" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                    <h4>Drop files here or click to upload Gallery</h4>
                                    <h5>[ Maksimum 1 MB / IMG ]</h5>
                                    <p>.gif &nbsp; .jpg &nbsp; .png &nbsp; .jpeg</p>
                                </div>

                                
                                <div class="fallback">
                                    <input id="file" name="file" type="file" multiple />
                                    <?php
                                    // $maxsize = 1024 * 200; // maksimal 200 KB (1KB = 1024 Byte)
                                    // $valid_ext = array('jpg','jpeg','png','gif','bmp');
                                    // if(isset($_POST['file']) && $_FILES['file']['size']<=$maxsize){
                                    //     $ext = strtolower(end(explode('.', $_FILES['file']['name'])));
                                    //     if(in_array($ext, $valid_array)){
                                    //         move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
                                    //     }else{
                                    //         echo "Maaf... file yang ada pilih terlalu besar, maksimal 200 KB..!";
                                    //     }
                                    // }
                                ?>
                                </div>


                            </form>




                            <!-- <form action="<?php echo base_url('logincms/gallery/add_action') ?>" class="dropzone" ></form> -->


                        </div>
                    </div>
                </div>
            </div>



<?php 
if (isset($pesan)) {
    echo $pesan;
}

 ?>

            <script type="text/javascript">


 // Dropzone.options.uploadWidget = {
//   paramName: 'file',
//   maxFilesize: 2, // MB
//   maxFiles: 1,
//   dictDefaultMessage: 'Drag an image here to upload, or click to select one',
//   headers: {
//     'x-csrf-token': document.querySelectorAll('meta[name=csrf-token]')[0].getAttributeNode('content').value,
//   },
//   acceptedFiles: 'image/*',
//   init: function() {
//     this.on('success', function( file, resp ){
//       console.log( file );
//       console.log( resp );
//     });
//     this.on('thumbnail', function(file) {
//       if ( file.width < 640 || file.height < 480 ) {
//         file.rejectDimensions();
//       }
//       else {
//         file.acceptDimensions();
//       }
//     });
//   },
//   accept: function(file, done) {
//     file.acceptDimensions = done;
//     file.rejectDimensions = function() {
//       done('The image must be at least 640 x 480px')
//     };
//   }
// };













// Dropzone.options.dropzoneElement = {
//   maxFiles: 1,
//   maxFilesize: 1, // File size in Mb
//   acceptedFiles: 'application/pdf'
// }


// Dropzone.options.dropzoneElement = {
//   maxFilesize: 500,
//   autoProcessQueue: false,
//   init: function() {

//     var submitButton = document.querySelector("#btnUpload")
//     myDropzone = this;

//     submitButton.addEventListener("click", function() {

//       /* Check if file is selected for upload */
//       if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {            
//         alert('No file selected for upload');   
//         return false;
//       }
//       else {
//         /* Remove event listener and start processing */ 
//         myDropzone.removeEventListeners();
//         myDropzone.processQueue(); 

//       }

//     });


//     /* On Success, do whatever you want */
//     this.on("success", function(file, responseText) {           
//       alert('Success');
//     });
//   }   
// };



            //    var file_size = $('#file')[0].files[0].size;
            //    if (file_size > 1048576) {
            //     alert('Gagal Upload, ukuran file lebih dari 1 MB');
            //     return false;
            // }

            // alert('aaa');

// $("div#frmFileUpload").dropzone({ url: "/file/post" });
            // var myDropzone = new Dropzone(document.body, { 
         // var myDropzone = new Dropzone("div#frmFileUpload", { alert('aaa')});       
// alert('aaa');
    // });

            // "myAwesomeDropzone" is the camelized version of the HTML element's ID
            // Dropzone.options.myAwesomeDropzone = {
              // paramName: "file", // The name that will be used to transfer the file
              // maxFilesize: 6, // MB
              // dictDefaultMessage:'hahhahahaaa',
              // dictFileTooBig:alert('gede tenan !'),
              // success:function(){
              //   alert('aaaa');},
               // if(filesize > 1){
                        // alert('gambar kegedean');
                    // }
            //   accept: function(file, done) {
            //     if (file.name == "justinbieber.jpg") {
            //       done("Naha, you don't.");
            //   }
            //   else { done(); }
            // }
            // };


            // Prevent Dropzone from auto discovering this element:
            // Dropzone.options.myAwesomeDropzone = false;
            // This is useful when you want to create the
            // Dropzone programmatically later

            // Disable auto discover for all elements:
            // Dropzone.autoDiscover = false;

            //  $(document).ready(function() {
            //      $(document).on('change'),'#file', function(){
            //         var property=document.getElementById("file").files[0];
            //         var image_name = property.name;
            //         var image_extension = image_name.split('.').pop().toLowerCase();
            //         if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg']) == -1)
            //         {
            //             alert('invalid image file');
            //         }

            //         var image_size = property.size;
            //         if(image_size > 2000000){
            //             alert('gambar kegedean');
            //         }
            //         else {
            //             var form_data = new FormData();
            //             form_data.append("file", property);

            //             $.ajax({
            //                 url:"",
            //                 method:"GET",
            //                 data:form_data,
            //                 contentType:false,
            //                 cache:false,
            //                 processData:false,
            //                 success:function(){
            //                     alert('sukses');
            //                 }
            //             })
            //         }


            //     }
            // });



//             var myDropzone = new Dropzone(document.body, { 

// alert('hahah');
//     });



</script>


