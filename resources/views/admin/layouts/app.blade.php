<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="{{ asset('admin/images/icon/favicon.png') }}">
    
    <!-- Basic -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/select2.min.css')}}">

    <!-- Amchart -->
    <link rel="stylesheet" href="{{asset('admin/css/export.css')}}" media="all">
    
    <!-- Datatable -->
    <link rel="stylesheet" href="{{asset('admin/css/jquery.dataTables.min.css')}}">

    <!-- Datepicker for bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin/css/gijgo.min.css')}}">

    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/bac71461de.js" crossorigin="anonymous"></script>

    <!-- Others -->
    <link rel="stylesheet" href="{{asset('admin/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">

    <!-- Modernizr -->
    <script src="{{asset('admin/js/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>    

    <!-- Page container area start -->
    <div class="page-container">

        <!-- Sidebar menu area start -->
        @include('admin.layouts.menu-area')
        <!-- Sidebar menu area end -->


        <!-- Main content area start -->
        <div class="main-content">
            @yield('content')
            <!-- Header area start -->

            <!-- Header area end -->
        
        </div>
        <!-- Main content area end -->

        <!-- Footer area start-->
        <!-- Footer area end-->
    
    </div>
    <!-- Page container area end -->
    
    <!-- jQuery -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>

    <!-- Basic -->
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- Datatable -->
    <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

    <!-- Amcharts -->
    <script src="{{asset('admin/js/amcharts.js')}}"></script>
    <script src="{{asset('admin/js/serial.js')}}"></script>
    
    <!-- Bar chart -->
    <script src="{{asset('admin/js/bar-chart.js')}}"></script>

    <!-- Datepicker for bootstrap 4 -->
    <script src="{{asset('admin/js/gijgo.min.js')}}"></script>

    <!-- Others -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>

    <script>
        
        document.getElementById('showImageContent').style.display = "none";
        document.getElementById('showVideoContent').style.display = "none";

        
        function showContent(elem) 
        {
            if( elem.value == 'Slider') 
            {
                document.getElementById('showImageContent').style.display = "none";
                document.getElementById('showVideoContent').style.display = "none";
            }
            else if( elem.value == 'Image') 
            {
                document.getElementById('showImageContent').style.display = "block";
                document.getElementById('showVideoContent').style.display = "none";
            } 
            else if( elem.value == 'Video') 
            {
                document.getElementById('showImageContent').style.display = "none";
                document.getElementById('showVideoContent').style.display = "block";
            }
        }
    </script>
</body>
</html>