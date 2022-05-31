<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/jcarousel.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/flexslider.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="{{asset('assets')}}/skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/favicon.png" />

    <!-- =======================================================
      Theme Name: Flattern
      Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>
@include("home.header")





@yield('content')
@include("home.footer")
@yield('foot')


