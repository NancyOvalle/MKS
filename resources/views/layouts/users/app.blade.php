<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>MAKEITEASY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{ url('bootstrap-4.5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.0.6/css/all.css') }}">


</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.users.components.navbar')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <main class="py-4" style="padding-bottom: 4rem !important;">
            @yield('content')
        </main>
        <!-- End Page-content -->

        <footer class="footer col-12" style="position: fixed;bottom: 0;padding: 0;">
            @include('layouts.users.components.aside')
        </footer>

    </div>


    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('bootstrap-4.5/js/bootstrap.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ url('bootstrap-4.5/js/bootstrap.bundle.js') }}"></script>

</body>

</html>