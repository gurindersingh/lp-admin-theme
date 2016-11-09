@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Font Icons'])

    <?php $mdiIcons = collect($fontIcons->getMdiList()); ?>
    <?php $fontAwesomeIcons = collect($fontIcons->getFaList()); ?>

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">
                            Icons
                            <small class="text-capitalize text-concrete-dark">( Total Icons: {{ $mdiIcons->count() + $fontAwesomeIcons->count() }} )</small>
                        </h2>
                        <div class="box-action pull-right">
                            <div class="action"><i class="fa fa-chevron-down"></i></div>
                            <div class="action"><i class="fa fa-cog"></i></div>
                            <div class="action"><i class="fa fa-times"></i></div>
                        </div>
                    </header>
                    <main class="box-content">

                        {{--Shapes--}}
                        <h3>Styles</h3>
                        <div class="row">
                            <div class="col lg-2">
                                <p>Default</p>
                                <p>
                                    <i class="fa fa-heart"></i>&nbsp;
                                    <i class="fa fa-heart"></i>&nbsp;
                                    <i class="fa fa-heart"></i>
                                </p>
                            </div>
                            <div class="col lg-2">
                                <p>Size small (sm)</p>
                                <p>
                                    <i class="fa fa-heart sm"></i>&nbsp;
                                    <i class="fa fa-heart sm"></i>&nbsp;
                                    <i class="fa fa-heart sm"></i>
                                </p>
                            </div>
                            <div class="col lg-2">
                                <p>Size Medium (md)</p>
                                <p>
                                    <i class="fa fa-heart md"></i>&nbsp;
                                    <i class="fa fa-heart md"></i>&nbsp;
                                    <i class="fa fa-heart md"></i>
                                </p>
                            </div>
                            <div class="col lg-3">
                                <p>Size Large (lg)</p>
                                <p>
                                    <i class="fa fa-heart lg"></i>&nbsp;
                                    <i class="fa fa-heart lg"></i>&nbsp;
                                    <i class="fa fa-heart lg"></i>
                                </p>
                            </div>
                            <div class="col lg-3">
                                <p>Size Xlarge (xlg)</p>
                                <p>
                                    <i class="fa fa-heart xlg"></i>&nbsp;
                                    <i class="fa fa-heart xlg"></i>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-12" style="margin-bottom: 10px">
                                <p>Colored</p>
                                <p>
                                    <i class="fa fa-heart md primary"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md primary-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md info"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md info-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md success"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md success-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md warning"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md warning-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md danger"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md danger-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md purple-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md sunflower"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md orange"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md clouds"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md concrete"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md concrete-dark"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md asphalt"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md asphalt-dark"></i>
                                </p>
                            </div>
                            <div class="col lg-12" style="margin-bottom: 10px">
                                <p>Sizes</p>
                                <p>
                                    <i class="fa fa-heart xsm round purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart sm round purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md round purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart lg round purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart xlg round purple"></i>
                                </p>
                            </div>
                            <div class="col lg-12">
                                <p>Shapes</p>
                                <p>
                                    <i class="fa fa-heart md round primary"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md corner success"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md square info"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md outlined purple"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart md concrete"></i>
                                </p>
                            </div>
                        </div>

                        {{--FONT AWESOME--}}
                        <h3>
                            Font Awesome Icons ({{ $fontAwesomeIcons->count() }})
                            <small class="text--concrete">{{ htmlspecialchars_decode("<i class='fa fa-*'></i>") }}</small>
                        </h3>
                        <?php $fontAwesomeCollection = $fontAwesomeIcons->chunk(4); ?>
                        @foreach($fontAwesomeCollection as $collection)
                            <div class="row">
                                @foreach($collection as $icon)
                                    <div class="col lg-3">
                                        <div class="display-icon">
                                            <i class="fa {{ $icon }}"></i> {{ $icon }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach

                        {{--MATERIAL DESIGN ICONS--}}
                        <h3>
                            Material Design Icons ({{ $mdiIcons->count() }})
                            <small class="text--concrete">{{ htmlspecialchars_decode("<i class='mdi mdi-*'></i>") }}</small>
                        </h3>
                        <?php $mdiCollection = $mdiIcons->chunk(4); ?>
                        @foreach($mdiCollection as $collection)
                            <div class="row">
                                @foreach($collection as $icon)
                                    <div class="col lg-3">
                                        <div class="display-icon">
                                            <i class="mdi {{ $icon }}"></i> {{ $icon }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection