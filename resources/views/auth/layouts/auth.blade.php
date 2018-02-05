<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('templates/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('templates/admin/css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('templates/admin/css/style-responsive.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{ asset('templates/admin/css/ie.css') }}" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{ asset('templates/admin/css/ie9.css') }}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('templates/admin/img/favicon.ico') }}">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url({{ asset('templates/admin/img/bg-login.jpg') }}) !important; }
    </style>



</head>

<body>
@yield('content')
<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="http://themifycloud.com">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>
<!-- start: JavaScript-->

<script src="{{ asset('templates/admin/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery-migrate-1.0.0.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.ui.touch-punch.js') }}"></script>

<script src="{{ asset('templates/admin/js/modernizr.js') }}"></script>

<script src="{{ asset('templates/admin/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.cookie.j') }}s"></script>

<script src='{{ asset('templates/admin/js/fullcalendar.min.js') }}'></script>

<script src='{{ asset('templates/admin/js/jquery.dataTables.min.js') }}'></script>

<script src="{{ asset('templates/admin/js/excanvas.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.flot.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.flot.resize.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.chosen.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.uniform.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.cleditor.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.noty.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.elfinder.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.raty.min.j') }}s"></script>

<script src="{{ asset('templates/admin/js/jquery.iphone.toggle.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.uploadify-3.1.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.gritter.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.imagesloaded.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.masonry.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.knob.modified.js') }}"></script>

<script src="{{ asset('templates/admin/js/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('templates/admin/js/counter.js') }}"></script>

<script src="{{ asset('templates/admin/js/retina.js') }}"></script>

<script src="{{ asset('templates/admin/js/custom.js') }}"></script>
<!-- end: JavaScript-->

</body>
</html>