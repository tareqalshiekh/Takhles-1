 @extends('layouts.sider')
 <html>

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('title', 'تحميل')</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 </head>
 <div class="container-fluid">
     <br /> <br> <br>
     <h3 align="center">Image & Files Upload
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
                 <div>
                     <p>Add Your Note</p>
                     <textarea name="note" id="note" cols="20" rows="5" form="dropzoneForm"></textarea><br><br>
                 </div>

             </form>

         </div>
         <div align="center">
             <button type="button" class="btn btn-info" id="submit-all">Upload</button>
         </div>

     </div>
     <br />
      
      
        <div>
            <style>
                .container {
                    max-width: 500px;
                }
                dl, ol, ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                }
            </style>
        </head>
        <body>
            <div class="container mt-5">
                <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                  <h3 class="text-center mb-5">Upload File </h3>
                    @csrf
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                  @endif
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="chooseFile">
                        <label class="custom-file-label" for="chooseFile">Select file</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                        Upload Files
                    </button>
                </form>
            </div>
        </body>
        </div>
      
     <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">Uploaded Image</h3>
         </div>
         <div class="panel-body" id="uploaded_image">

         </div>

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
