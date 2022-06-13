<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>

    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/assets/images/favicon.ico"/>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/logo-mini.svg"/>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{asset('assets')}}assets/images/logo.svg">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>

                        <form action="{{route('loginadmincheck')}}" method="post">
                            @csrf
                            @include('home.messages')

                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg"
                                       id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg"
                                       id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                    type="submit">Login
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('assets')}}/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets')}}/assets/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/assets/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>
