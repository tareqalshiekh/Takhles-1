 @extends('layouts.sider')
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('title', 'تحميل')</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 </head>
 <div class="container-fluid">
     <br />
     <h3 align="center">Image Upload
     </h3>
     <br />

     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">Select Image</h3>
         </div>
         <div class="panel-body">
             <form id="dropzoneForm" class="dropzone" name="image" action="{{ route('dropzone.upload') }}"
                 enctype="multipart/form-data">
                 @csrf

             </form>
             <div align="center">
                 <button type="button" class="btn btn-info" id="submit-all">Upload</button>
             </div>
         </div>

     </div>
     <br />
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">Uploaded Image</h3>
         </div>
         <div class="panel-body" id="uploaded_image">

         </div>
         <h3>Add Your Note :</h3>
         <Form class="note" method="post" name="note" action="{{ route('dropzone.note') }}">
             @csrf
             <textarea name="note" id="note" cols="30" rows="5"></textarea><br><br>


             <button type="submit" class="btn btn-info" id="submit">Submit Note</button>
         </Form>
     </div>
 </div>



 <script type="text/javascript">
     Dropzone.options.dropzoneForm = {
         autoProcessQueue: false,
         acceptedFiles: ".pdf,.png,.jpg,.gif,.bmp,.jpeg",
         parallelUploads: 5,



         init: function() {
             var submitButton = document.querySelector("#submit-all");
             myDropzone = this;

             submitButton.addEventListener('click', function() {
                 myDropzone.processQueue();
             });

             this.on("complete", function() {
                 if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                     var _this = this;
                     _this.removeAllFiles();
                 }
                 load_images();
             });

         }

     };

     load_images();

     function load_images() {
         $.ajax({
             url: "dropzone/fetch",
             success: function(data) {
                 $('#uploaded_image').html(data);
             }
         })
     }

     $(document).on('click', '.remove_image', function() {
         var name = $(this).attr('id');
         $.ajax({
             url: "{{ route('dropzone.delete') }}",
             data: {
                 name: name
             },
             success: function(data) {
                 load_images();
             }
         })
     });
 </script>
