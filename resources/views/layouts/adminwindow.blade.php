
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- plugins:css -->
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

    @yield("head")
</head>
<body>


@yield('content')

@include("admin.footer")
<script src="{{asset('assets')}}/admin/assets/js/file-upload.js"></script>

@yield('foot')
</body>
</html>




