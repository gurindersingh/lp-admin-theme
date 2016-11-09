@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Tabs'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Tabs</h2>
                        <div class="box-action pull-right">
                            <div class="action"><i class="fa fa-chevron-down"></i></div>
                            <div class="action"><i class="fa fa-cog"></i></div>
                            <div class="action"><i class="fa fa-times"></i></div>
                        </div>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-6">
                                @include('admin.accordion-part', ['accordionClass' => ''])
                            </div>
                            <div class="col lg-6">
                                @include('admin.accordion-part', ['accordionClass' => 'primary'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'info'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'info-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'warning'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'warning-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'success'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'success-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'danger'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'danger-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'info'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'info-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'purple'])
                            </div>
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'purple-dark'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-6 mt-30">
                                @include('admin.accordion-part', ['accordionClass' => 'concrete'])
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection