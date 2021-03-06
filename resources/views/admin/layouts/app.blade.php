<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="token" content="{{jwt_token()}}">

    <link rel="apple-touch-icon" href="{{asset('apple-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <script src="{{asset('js/admin/admin-plugins.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('assets/scss/style.css')}}">
    <link href="{{asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
<!-- Left Panel -->
@include('admin.layouts.left_panel')
<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header-->
@include('admin.partials.header_menu')
<!-- Header-->
    <div class="breadcrumbs">
        <div class="col-sm-12">
            @if(session('message'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    {{ session('message') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    {{ session('error') }}
                </div>
            @endif
                @if(session('errors'))
                    @foreach(session('errors') as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            {{ $error[0] }}
                        </div>
                    @endforeach
                @endif
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        @yield('content')
    </div>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script>
    (function ($) {
    })(jQuery);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


<script src="{{  asset('assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
<script src="{{asset('assets/js/widgets.js')}}"></script>
<script src="{{asset('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{asset('assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.select2').select2({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
@yield('scripts')
<script>
//    (function ($) {
//        "use strict";

//        jQuery('#vmap').vectorMap({
//            map: 'world_en',
//            backgroundColor: null,
//            color: '#ffffff',
//            hoverOpacity: 0.7,
//            selectedColor: '#1de9b6',
//            enableZoom: true,
//            showTooltip: true,
//            values: sample_data,
//            scaleColors: ['#1de9b6', '#03a9f5'],
//            normalizeFunction: 'polynomial'
//        });
//    })(jQuery);


</script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    jQuery('.ckeditor').ckeditor();
</script>
</body>
</html>
