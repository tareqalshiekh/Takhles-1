@extends('base/layout_ar')

@section('content')

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">المستخدمون</h4>
                                    <p class="card-title-desc">يعرض المستخدمون البيانات

                                    </p>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>اسم</th>
                                                <th>موقع</th>
                                                <th>مكتب</th>
                                                <th>سن</th>
                                                <th>تاريخ البدء </th>
                                                <th>عمل</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                
                                                <td>
                                                <div class="row icon-demo-content">
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <i class="ion ion-md-close-circle-outline"></i> 
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                        <i class="ion ion-md-checkmark-circle-outline"></i>
                                                    </div>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>
                                                    <div class="row icon-demo-content">
                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                            <i class="ion ion-md-close-circle-outline"></i> 
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                            <i class="ion ion-md-checkmark-circle-outline"></i>
                                                        </div>
                                                    </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>
                                                    <div class="row icon-demo-content">
                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                            <i class="ion ion-md-close-circle-outline"></i> 
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                            <i class="ion ion-md-checkmark-circle-outline"></i>
                                                        </div>
                                                    </div>
                                                    </td>
                                            </tr>
                                
                                     
                                        </tbody>
                                    </table>

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