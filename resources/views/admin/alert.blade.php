@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Alert'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Alerts</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12">
                                <div class="alert closeable">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable primary mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable success mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable warning mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable info mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable purple mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>

                                <div class="alert closeable danger mt-30">
                                    <strong>Alert!!!</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis!
                                    <button class="button plain close"><i class="mdi mdi-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection