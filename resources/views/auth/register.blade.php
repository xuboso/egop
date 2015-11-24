@extends('admin.layout.layout')

@section('title')
  Egop Management System
@endsection

@section('body')
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
              <b>Egop </b>Management
            </div>
        
            <div class="login-box-body">
                <p class="login-box-msg">Please Register</p>

                <form action="/auth/register" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group has-feedback">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row" style="text-align:center;">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">register go</button>
                        </div>
                    </div>
                    
                </form>

                <br>
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
