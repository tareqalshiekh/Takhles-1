 @extends('base/layout')

 @section('content')


 <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Product </h4>
                            
                            <form class="row g-3" id="form1" action="{{url('new-product')}}" method="post" enctype="multipart/form-data" class="custom-validation">
                                @csrf
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Product Name</label>
                                    <div>
                                        <input type="text" class="form-control" data-parsley-minlength="6" placeholder="Product Name" required name="product_name" />
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Full Description</label>
                                    <div>
                                        <textarea class="form-control" name="description" placeholder="Full description" rows="4" cols="4"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Stock</label>
                                    <div>                                        

                                        <input type="number" id="demo1" class="form-control" data-parsley-min="6" min="0" placeholder="Stock" required  name="stock"/>
                                    </div>
                                </div>
                               
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Price</label>
                                    <div>
                                        <input class="form-control" type="text range" min="6" max="100" placeholder="Price" required  name="price"/>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Image</label>
                                    <div>
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="pro-image">
                                    </div>
                                </div>
                                <center> <img id="pic" style="width:120px;" /> </center>


                                <div class="mb-3 position-relative">
                                    <label class="form-label">Categories</label>
                                    @foreach($Categorie as $Categorie)
                                    <div>
                                       <input form="form1" class="form-check-input single-checkbox" name="CategoryName[]" type="checkbox" value="{{ $Categorie->CategoryID }}" id="{{ $Categorie->Category_Name }}">
                                       <label class="form-check-label" for="{{ $Categorie->Category_Name }}">
                                        {{ $Categorie->Category_Name }}
                                      </label>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <script>
                                    var limit = 2;
                                    $('input.single-checkbox').on('click', function(evt) {
                                      if ($('.single-checkbox:checked').length > limit) {
                                        this.checked = false;
                                        alert('You are allowed select two categories');
                                      }
                                    });
                                  </script>

                                <div class="mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                      
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
            <!-- end row -->


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
</div> @endsection