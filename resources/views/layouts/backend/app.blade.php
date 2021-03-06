<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('assets')}}/apple-icon.png">
    <link rel="shortcut icon" href="{{asset('assets')}}/favicon.ico">

    <link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>




@include('layouts.backend.partials.sidebar');





<div id="right-panel" class="right-panel">


    @include('layouts.backend.partials.header')


    @yield('content');

</div>


<!-- Script Panel -->
<script src="{{asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/assets/js/main.js"></script>

<!-- Script Data Table -->
<script src="{{asset('assets')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('assets')}}/assets/js/init-scripts/data-table/datatables-init.js"></script>


<script src="{{asset('assets')}}/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="{{asset('assets')}}/assets/js/dashboard.js"></script>
<script src="{{asset('assets')}}/assets/js/widgets.js"></script>
<script src="{{asset('assets')}}/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{asset('assets')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="{{asset('assets')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
