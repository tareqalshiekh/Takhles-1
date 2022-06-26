 @extends('base/layout_ar')

 @section('content')


 <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">المنتج </h4>
                            

                            <form action="#" class="custom-validation">

                                <div class="mb-3 position-relative">
                                    <label class="form-label">اسم المنتج</label>
                                    <div>
                                        <input type="text" class="form-control" data-parsley-minlength="6" placeholder="Product Name" required />
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">ملخص</label>
                                    <div>
                                        <input type="text" class="form-control" data-parsley-maxlength="6" placeholder="ملخص" required />
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">وصف كامل
                                    </label>
                                    <div>
                                        <textarea class="form-control" name="Description" placeholder="وصف كامل
                                        " rows="4" cols="4"></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">مخزون</label>
                                    <div>                                        

                                        <input type="number" id="demo1" class="form-control" data-parsley-min="6" min="0" placeholder="مخزون" required />
                                    </div>
                                </div>
                               
                                <div class="mb-3 position-relative">
                                    <label class="form-label">السعر</label>
                                    <div>
                                        <input class="form-control" type="text range" min="6" max="100" placeholder="السعر" required />
                                    </div>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label class="form-label">الصورة</label>
                                    <div>
                                        <input type="file" class="filestyle" data-buttonname="btn-secondary" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                <center> <img id="pic" style="width:120px;" /> </center>


                                <div class="mb-3 position-relative">
                                    <label class="form-label">فئات</label>
                                    <div>
                                       <input form="form1" class="form-check-input single-checkbox" name="CategoryName[]" type="checkbox" value="" id="">
                                       <label class="form-check-label" for="d">
                                        amin
                                      </label>
                                    </div>
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
                                            إرسال
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