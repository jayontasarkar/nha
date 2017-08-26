<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>জাতীয় গৃহায়ন কর্তৃপক্ষ</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Waves Effect Css -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet" />
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Search Bar -->
    @include('layouts.backend.partials._searchbar')


    <!-- Top Bar -->
    @include('layouts.backend.partials._navbar')

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('layouts.backend.partials._leftSidebar')

        <!-- Right Sidebar -->
        @include('layouts.backend.partials._rightSidebar')

        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>@yield('ptitle')</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @include('layouts.backend.common.flash')
                    <div class="card">
                        <div class="header">
                            <h2>
                                @yield('ctitle')
                            </h2>
                        </div>
                        <div class="body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('js/backend.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.flash-msg').delay(7000).fadeOut(1000);

            $('.datepicker').bootstrapMaterialDatePicker({
                format: 'MMMM DD, YYYY',
                clearButton: true,
                weekStart: 1
            });
        });
    </script>
    @yield('script')

</body>

</html>