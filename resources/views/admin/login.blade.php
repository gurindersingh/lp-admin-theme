@extends('layouts.admin.auth-master')

@section('adminBodyClass', 'auth login')

@section('content')

    <div class="content-block">

        <div class="logo-wrap">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo-150x40.png') }}" alt="Logo">
            </a>
            <p>Login to your account</p>
        </div>
        <form action="">
            <div class="row form">
                <div class="col lg-12">
                    <div class="alert danger">
                        <ul class="alert-messages">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                </div>
                <div class="col lg-12">
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control lg" placeholder="Email or username...">
                    </div>
                    <div class="input-group justify lg">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control lg" placeholder="Password...">
                    </div>
                </div>
            </div>
            <div class="row mt-30 mb-30">
                <div class="col xs-6 sm-6 md-6 lg-6 xlg-6 pl-40">
                    <button class="mb-5 button block round md success">Login</button>
                </div>
                <div class="col xs-6 sm-6 md-6 lg-6 xlg-6 pr-40">
                    <a href="#" class="mb-5 button block round md warning">Cancel</a>
                </div>
            </div>
        </form>

        <div class="row">
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

        <div class="row">
            <div class="col lg-12 text-center">
                <a href="#">Forgot password ?</a>
            </div>
        </div>

        <div class="row mt-20">
            <div class="col lg-12 text-center">
                Don't have an account <a href="{{ route('admin', 'register' ) }}">Create One</a>
            </div>
        </div>
    </div>

@endsection