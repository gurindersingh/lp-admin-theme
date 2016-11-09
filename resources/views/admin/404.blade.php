@extends('layouts.admin.auth-master')

@section('adminBodyClass', 'page-404')

@section('content')

    <div class="container">
        <div class="row mt-60 pt-30">
            <div class="col lg-12 clearfix">
                <div class="text-404 clearfix">
                    <p>404</p>
                </div>
            </div>

            <div class="col lg-12 text-center clearfix">
                <h2>Sorry !!!</h2>
                <p>The page you are looking for, does not exists</p>
                <p class="mt-30">
                    <a href="{{ url()->previous() }}" class="button success mr-10">Back</a>
                    <a href="/" class="button info">Home</a>
                </p>
            </div>

            <div class="col lg-12">
                <div class="search-block clearfix">
                    <form action="">
                        <div class="input-group justify">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <div class="input-group">
                                <button type="submit" class="button primary"><strong>Search Site</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection