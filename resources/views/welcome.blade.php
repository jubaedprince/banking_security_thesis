@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1>Bangladesh Most Secured Bank</h1>
                        <p class="lead">Biometric secruity keeps your money safe!</p>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <img src="http://localhost/banking_security\cover.jpg" class="img-responsive"
                             alt="Responsive image">
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Account Holder Area</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST"
                                              action="{{ url('/login') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label class="col-md-12" for="email">E-Mail Address</label>

                                                <div  class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email"
                                                           value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label class="col-md-12" for="password" >Password</label>

                                                <div  class="col-md-12">
                                                    <input id="password" type="password" class="form-control"
                                                           name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"
                                                                   name="remember" {{ old('remember') ? 'checked' : ''}}>
                                                            Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div  class="col-md-10 col-md-offset-1">
                                                    <button type="submit" class="btn btn-primary">
                                                        Login
                                                    </button>

                                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                        Forgot Your Password?
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <div id="open-account" class="text-center">
                                            <a href="/register">Open an Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Admin Login</h3>
                                    </div>
                                    <div class="panel-body">
                                        <form role="form" method="POST"
                                              action="{{ url('/admin/login') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                                       placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                                       placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-default">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection