@extends('base.layout')

@section('content')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="card-title">Add Banner</h4>
                                   
     
                                    <div class="mb-5">
                                        <form class="row g-3" class="dropzone" id="form1" action="{{url('new-banner')}}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="fallback">
                                                <input name="pro-image" type="file" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            </div>
                                            <center> <img id="pic" style="width:320px;" /> </center>

                                        </form>
                                    </div>
    
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light" form="form1">
                                            Submit
                                        </button>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> <span class="d-none d-sm-inline-block"> 
                                 <i class="mdi mdi-heart text-danger"></i> by Tareq.</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        @endsection