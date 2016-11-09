@extends('layouts.admin.auth-master')

@section('adminBodyClass', 'auth login')

@section('content')

    <div class="content-block register">

        <div class="logo-wrap">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo-150x40.png') }}" alt="Logo">
            </a>
            <p>Register new account</p>
        </div>
        <form action="">
            <div class="row form register">
                <div class="col lg-4">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control lg" placeholder="First name...">
                    </div>
                </div>
                <div class="col lg-4">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control lg" placeholder="Middle name...">
                    </div>
                </div>
                <div class="col lg-4">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control lg" placeholder="Last name...">
                    </div>
                </div>
            </div>
            <div class="row form register">
                <div class="col lg-12">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="password" class="form-control lg" placeholder="Email...">
                    </div>
                </div>
            </div>
            <div class="row form register">
                <div class="col lg-6">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control lg" placeholder="Password...">
                    </div>
                </div>
                <div class="col lg-6">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control lg" placeholder="Confirm password...">
                    </div>
                </div>
            </div>
            <div class="row form register">
                <div class="col xs-6 sm-6 md-6 lg-6 xlg-6 text-center">
                    <button class="mb-5 button round md success">Register</button>
                </div>
                <div class="col xs-6 sm-6 md-6 lg-6 xlg-6 text-center">
                    <a href="/" class="mb-5 button round md warning">Cancel</a>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col lg-12 text-center">
                <p class="mb-30">-- Or register with following --</p>
            </div>
            <div class="col lg-12 pl-40 pr-40 pb-30">
                <div class="button-group round justify">
                    <div class="button-group">
                        <a class="button round facebook"><i class="mdi mdi-facebook"></i> Facebook</a>
                    </div>
                    <div class="button-group">
                        <a class="button round google"><i class="mdi mdi-google"></i> Google</a>
                    </div>
                    <div class="button-group">
                        <a class="button round twitter"><i class="mdi mdi-twitter"></i> Twitter</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-20">
            <div class="col lg-12 text-center">
                Already have an account <a href="{{ route('admin', 'login' ) }}">Login</a>
            </div>
        </div>
    </div>

@endsection