@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Grid - 12 Columns'])
    <?php $gridColumns = 12; ?>

    <div class="container">
        <div class="row">

            {{--Large Grid--}}
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Large Grid - Desktop</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12">
                                <h4 class="m-0 mb-10">When the screen size is 1050px or more, the styles in the block will take effect.</h4>
                            </div>
                            <div class="col lg-12">
                                @for ($i = 1; $i < 13 ; $i++)
                                    <div class="col lg-1 display">{{ strtoupper('col lg-1' ) }}</div>
                                @endfor
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 7 ; $i++)
                                    <div class="col lg-2 display">{{ strtoupper('col lg-2' ) }}</div>
                                @endfor
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 5 ; $i++)
                                    <div class="col lg-3 display">{{ strtoupper('col lg-3' ) }}</div>
                                @endfor
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 4 ; $i++)
                                    <div class="col lg-4 display">{{ strtoupper('col lg-4' ) }}</div>
                                @endfor
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 3 ; $i++)
                                    <div class="col lg-6 display">{{ strtoupper('col lg-6' ) }}</div>
                                @endfor
                            </div>

                            <div class="col lg-12 mt-15">
                                <div class="col lg-12 display">{{ strtoupper('col lg-12' ) }}</div>
                            </div>
                        </div>

                        <div class="row mt-30">
                            <div class="col lg-12">
                                <h4>Offsets</h4>
                            </div>
                        </div>
                        @for ($i = 1; $i < 10 ; $i++)
                            <div class="row">
                                <div class="col lg-12 mt-10">
                                    <div class="col lg-3 display off-{{ $i }} text-center">Col LG-3 off-{{ $i }}</div>
                                </div>
                            </div>
                        @endfor

                        <div class="row mt-10">
                            <div class="col lg-12">
                                <div class="col lg-6 display off-6">col lg-6 off-6</div>
                            </div>
                        </div>

                    </main>
                </section>
            </div>

            {{--Medium Grid--}}
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Medium Grid - Tablet</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12">
                                <h4>When the screen size is between 1050px and 400px, the styles in the block will take effect</h4>
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 5 ; $i++)
                                    <div class="col md-3 display">{{ strtoupper('col md-3' ) }}</div>
                                @endfor
                            </div>

                        </div>
                    </main>
                </section>
            </div>

            {{--Small Grid--}}
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Small Grid - Mobile</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12">
                                <h4>When the screen size is 400px or less, the styles in the block will take effect.</h4>
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 5 ; $i++)
                                    <div class="col sm-3 display">{{ strtoupper('col sm-3' ) }}</div>
                                @endfor
                            </div>

                        </div>
                    </main>
                </section>
            </div>

            {{--Extra Large Grid--}}
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Extra Large Grid - HD</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12">
                                <h4>When the screen size is 1800px or more, the styles in the block will take effect.</h4>
                            </div>

                            <div class="col lg-12 mt-15">
                                @for ($i = 1; $i < 5 ; $i++)
                                    <div class="col xlg-3 display">{{ strtoupper('col xlg-3' ) }}</div>
                                @endfor
                            </div>

                        </div>
                    </main>
                </section>
            </div>

        </div>
    </div>

@endsection