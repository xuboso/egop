<!DOCTYPE HTML>
<html>
    <head>
        <title>@section('title') egop -- homepage @show</title>
        <meta charset="utf-8">
        @section('meta_keywords')
            <meta name="keywords" content="egop, shop">
        @show
        @section('meta_author')
            <meta name="author" content="bude">
        @show
        @section('meta_description')
            <meta name="description" content="a different shop system">
        @show
    </head>

    <body>
        <div class="container">
            <div class="nav">@include('layout.nav')</div>

            @yield('content')

            <div class="footer">@include('layout.footer')</div>
        </div>

        @yield('scripts')
    </body>
</html>