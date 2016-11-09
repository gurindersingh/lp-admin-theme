@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Dashboard'])

    <div class="container">

        <div class="row mt-20">
            <div class="col lg-3 md-6 sm-12 pt-10 pb-10">
                <div class="stat-box info">
                    <div class="icon">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    <div class="content">
                        <span class="text">CPU Traffic</span>
                        <span class="stats">90<small>%</small></span>
                    </div>
                </div>
            </div>
            <div class="col lg-3 md-6 sm-12 pt-10 pb-10">
                <div class="stat-box warning">
                    <div class="icon">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    <div class="content">
                        <span class="text">CPU Traffic</span>
                        <span class="stats">90<small>%</small></span>
                    </div>
                </div>
            </div>
            <div class="col lg-3 md-6 sm-12 pt-10 pb-10">
                <div class="stat-box success">
                    <div class="icon">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    <div class="content">
                        <span class="text">CPU Traffic</span>
                        <span class="stats">90<small>%</small></span>
                    </div>
                </div>
            </div>
            <div class="col lg-3 md-6 sm-12 pt-10 pb-10">
                <div class="stat-box error">
                    <div class="icon">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    <div class="content">
                        <span class="text">CPU Traffic</span>
                        <span class="stats">90<small>%</small></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col lg-6">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Line</h2>
                    </header>
                    <main class="box-content">
                        <div class="morris-chart" data-chart-type="line"></div>
                    </main>
                </section>
            </div>
            <div class="col lg-6">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Area</h2>
                    </header>
                    <main class="box-content">
                        <div class="morris-chart" data-chart-type="area"></div>
                    </main>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col lg-6">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Bar</h2>
                    </header>
                    <main class="box-content">
                        <div class="morris-chart" data-chart-type="bar"></div>
                    </main>
                </section>
            </div>
            <div class="col lg-6">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Stacked</h2>
                    </header>
                    <main class="box-content">
                        <div class="morris-chart" data-chart-type="stacked"></div>
                    </main>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Donut</h2>
                    </header>
                    <main class="box-content">
                        <div class="morris-chart" data-chart-type="donut"></div>
                    </main>
                </section>
            </div>
        </div>

    </div>

@endsection