@extends('admin.layout.layout')

@section('title')
  Egop Management System
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('body')
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
              <b>Egop </b>Management
            </div>
        
            <div class="login-box-body">
                <p class="login-box-msg">Sign in to manage</p>

                <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                              <label>
                                <input type="checkbox"> Remember Me
                              </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                </form>

                <br>
                <a href="#">forgot password ?</a><br>
            </div>
        </div>

        <script src="{{ asset('js/admin/vendor.js') }}"></script>
        <script src="{{ asset('js/admin/icheck.min.js') }}"></script>
        <script>
        $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
        });
        </script>
    </body>
@endsection
