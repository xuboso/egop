<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@section('title') Egop Dashboard @show</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ elixir('css/admin/vendor.css') }}">
        @yield('styles')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    @section('body')
        <body class="hold-transition skin-blue sidebar-mini">
            <div class="wrapper">
                @section('header') @include('admin.layout.header')@show
                @section('main-sidebar') @include('admin.layout.sidebar') @show
                @section('content') @include('admin.layout.content') @show
                @section('footer') @include('admin.layout.footer') @show
                @section('control-bar') @include('admin.layout.control') @show

                <div class="control-sidebar-bg"></div>
            </div>

            @section('main-scripts')<script src="{{ elixir('js/admin/vendor.js') }}"></script>@show

            @yield('scripts')
        </body>
    @show
</html>