 @extends('base/layout')

 @section('content')


 <div class="main-content">
    <div class="page-content">
        <div class="header-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-4 pt-5">
                        <div id="morris-bar-example" class="morris-charts morris-chart-height"></div>


                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Latest Transactions</h4>

                            <div class="table-responsive">
                                <table class="table mt-4 mb-0 table-centered table-nowrap">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/amin.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Mahmoud Amin
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm
                                            </td>
                                            <td>
                                                $14,584
                                                <p class="m-0 text-muted">Amount</p>
                                            </td>
                                            <td>
                                                5/12/2016
                                                <p class="m-0 text-muted">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-3.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Mathias N. Klausen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                            <td>
                                                $8,541
                                                <p class="m-0 text-muted">Amount</p>
                                            </td>
                                            <td>
                                                10/11/2016
                                                <p class="m-0 text-muted">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-4.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Nikolaj S. Henriksen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm
                                            </td>
                                            <td>
                                                $954
                                                <p class="m-0 text-muted">Amount</p>
                                            </td>
                                            <td>
                                                8/11/2016
                                                <p class="m-0 text-muted">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-5.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Lasse C. Overgaard
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                            <td>
                                                $44,584
                                                <p class="m-0 text-muted">Amount</p>
                                            </td>
                                            <td>
                                                7/11/2016
                                                <p class="m-0 text-muted">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="assets/images/users/avatar-6.jpg" alt="user-image" class="avatar-sm rounded-circle me-2" /> Kasper S. Jessen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm
                                            </td>
                                            <td>
                                                $8,844
                                                <p class="m-0 text-muted">Amount</p>
                                            </td>
                                            <td>
                                                1/11/2016
                                                <p class="m-0 text-muted">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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