@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Buttons'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Buttons</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-12 text-center">
                                <a href="#" class="m-5 button xs">Go</a>
                                <a href="#" class="m-5 button xs rounded">Go</a>
                                <a href="#" class="m-5 button xs pill">Go</a>
                                <button class="m-5 button xs square"><i class="fa fa-plus"></i></button>
                                <button class="m-5 button xs box"><i class="fa fa-plus"></i></button>
                                <button class="m-5 button xs circle"><i class="fa fa-plus"></i></button>
                            </div>
                            <div class="col lg-12 text-center mt-10">
                                <a href="#" class="m-5 button primary sm">Go</a>
                                <a href="#" class="m-5 button primary rounded sm">Go</a>
                                <a href="#" class="m-5 button primary pill sm">Go</a>
                                <button class="m-5 button primary square sm"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button primary box sm"><i class="fa fa-plus"></i></button>
                                <button class="m-5 button primary circle sm"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="col lg-12 text-center mt-10">
                                <a href="#" class="m-5 button action md success">Go</a>
                                <a href="#" class="m-5 button action rounded md success">Go</a>
                                <a href="#" class="m-5 button action pill md success">Go</a>
                                <button class="m-5 button action square md success"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button action box md success"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button action circle md success"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="col lg-12 text-center mt-10">
                                <a href="#" class="m-5 button warning lg">Go</a>
                                <a href="#" class="m-5 button warning rounded lg">Go</a>
                                <a href="#" class="m-5 button warning pill lg">Go</a>
                                <button class="m-5 button warning square lg"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button warning box lg"><i class="fa fa-plus"></i></button>
                                <button class="m-5 button warning circle lg"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="col lg-12 text-center mt-10">
                                <a href="#" class="m-5 button caution laravel xlg">Go</a>
                                <a href="#" class="m-5 button caution rounded laravel xlg">Go</a>
                                <a href="#" class="m-5 button caution pill laravel xlg">Go</a>
                                <button class="m-5 button caution square laravel xlg"><i
                                            class="fa fa-plus"></i></button>
                                <button class="m-5 button caution box laravel xlg"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button caution circle laravel xlg"><i
                                            class="fa fa-plus"></i></button>
                            </div>
                            <div class="col lg-12 text-center mt-10 mb-20">
                                <a href="#" class="m-5 button royal info xxlg">Go</a>
                                <a href="#" class="m-5 button royal rounded info xxlg">Go</a>
                                <a href="#" class="m-5 button royal pill info xxlg">Go</a>
                                <button class="m-5 button royal square info xxlg"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button royal box info xxlg"><i class="fa fa-plus"></i>
                                </button>
                                <button class="m-5 button royal circle info xxlg"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="col lg-12 text-center">
                                <h3 class="mt-30">Shrinked</h3>
                                <a href="#" class="m-5 shrink button xs">XS</a>
                                <a href="#" class="m-5 shrink button sm">SM</a>
                                <a href="#" class="m-5 shrink button md">MD</a>
                                <button class="m-5 shrink button lg">LG</button>
                                <button class="m-5 shrink button xlg">XLG</button>
                                <button class="m-5 shrink button xxlg">XXLG</button>
                            </div>
                            <div class="col lg-12 text-center mt-10">
                                <h3 class="mt-30">Bordered</h3>
                                <button class="m-5 button lg circle border"><i class="fa fa-reply"></i>
                                </button>
                                <button class="m-5 button lg warning border box"><i class="fa fa-star"></i>
                                </button>
                                <button class="m-5 button lg border square"><i class="fa fa-trash-o"></i>
                                </button>
                                <button class="m-5 button lg border"><i class="fa fa-tag"></i></button>
                                <h3 class="mt-30">Borderless</h3>
                                <button class="m-5 borderless button lg circle"><i class="fa fa-reply"></i>
                                </button>
                                <button class="m-5 borderless button lg warning box"><i
                                            class="fa fa-star"></i></button>
                                <button class="m-5 borderless button lg square"><i class="fa fa-trash-o"></i>
                                </button>
                                <button class="m-5 borderless button lg"><i class="fa fa-tag"></i></button>
                            </div>
                            <div class="col lg-1 text-center mt-10">
                                <h5 class="mt-30">Square</h5>
                                <a href="#" class="mb-5 button block square lg">Go</a>
                                <a href="#" class="mb-5 button block square primary lg">Go</a>
                                <a href="#" class="mb-5 button block square warning lg">Go</a>
                                <a href="#" class="mb-5 button block square info lg">Go</a>
                                <a href="#" class="mb-5 button block square laravel lg">Go</a>
                                <a href="#" class="mb-5 button block square purple lg">Go</a>
                            </div>
                            <div class="col lg-1 text-center mt-10">
                                <h5 class="mt-30">Box</h5>
                                <a href="#" class="mb-5 button block box lg">Go</a>
                                <a href="#" class="mb-5 button block box primary lg">Go</a>
                                <a href="#" class="mb-5 button block box warning lg">Go</a>
                                <a href="#" class="mb-5 button block box info lg">Go</a>
                                <a href="#" class="mb-5 button block box laravel lg">Go</a>
                                <a href="#" class="mb-5 button block box purple lg">Go</a>
                            </div>
                            <div class="col lg-5 text-center mt-10">
                                <h5 class="mt-30">Round</h5>
                                <a href="#" class="mb-5 button block round lg">Go</a>
                                <a href="#" class="mb-5 button block round primary lg">Go</a>
                                <a href="#" class="mb-5 button block round warning lg">Go</a>
                                <a href="#" class="mb-5 button block round info lg">Go</a>
                                <a href="#" class="mb-5 button block round laravel lg">Go</a>
                                <a href="#" class="mb-5 button block round purple lg">Go</a>
                            </div>
                            <div class="col lg-4 text-center mt-10">
                                <h5 class="mt-30">Pill</h5>
                                <a href="#" class="mb-5 button block pill lg">Go</a>
                                <a href="#" class="mb-5 button block pill primary lg">Go</a>
                                <a href="#" class="mb-5 button block pill warning lg">Go</a>
                                <a href="#" class="mb-5 button block pill info lg">Go</a>
                                <a href="#" class="mb-5 button block pill laravel lg">Go</a>
                                <a href="#" class="mb-5 button block pill purple lg">Go</a>
                            </div>
                            <div class="col lg-1 text-center mt-10">
                                <h5 class="mt-30">Circle</h5>
                                <a href="#" class="mb-5 button block circle lg">Go</a>
                                <a href="#" class="mb-5 button block circle primary lg">Go</a>
                                <a href="#" class="mb-5 button block circle warning lg">Go</a>
                                <a href="#" class="mb-5 button block circle info lg">Go</a>
                                <a href="#" class="mb-5 button block circle laravel lg">Go</a>
                                <a href="#" class="mb-5 button block circle purple lg">Go</a>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Button dropdown</h2>
                    </header>
                    <main class="box-content">

                        <div class="row">
                            <div class="col lg-4">
                                <div class="button-group round">
                                    <div class="button-group has-dropdown">
                                        <button class="button round info border xs" data-dropdown="toggle-button">Extra Small <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col lg-8">
                                <div class="button-group round justify">
                                    <div class="button-group">
                                        <button class="button info xs">Button</button>
                                    </div>
                                    <div class="button-group has-dropdown">
                                        <button class="button info xs" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <button class="button info xs">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-30">
                            <div class="col lg-4">
                                <div class="button-group round">
                                    <div class="button-group has-dropdown">
                                        <button class="button round sm laravel border" data-dropdown="toggle-button">Small <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col lg-8">
                                <div class="button-group round justify">
                                    <div class="button-group has-dropdown">
                                        <button class="button laravel sm" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <button class="button laravel sm">Button</button>
                                    </div>
                                    <div class="button-group has-dropdown">
                                        <button class="button laravel sm" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-30">
                            <div class="col lg-4">
                                <div class="button-group round">
                                    <div class="button-group has-dropdown">
                                        <button class="button round md success border" data-dropdown="toggle-button">Medium <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col lg-8">
                                <div class="button-group round justify">
                                    <div class="button-group has-dropdown">
                                        <button class="button success md" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                    <div class="button-group">
                                        <button class="button success md">Button</button>
                                    </div>
                                    <div class="button-group has-dropdown">
                                        <button class="button success md" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row mt-30">--}}
                            {{--<div class="col lg-4">--}}
                                {{--<div class="button-group round">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button round lg primary border" data-dropdown="toggle-button">Large <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col lg-8">--}}
                                {{--<div class="button-group round justify">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button primary lg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                        {{--<button class="button primary lg">Button</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button primary lg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mt-30">--}}
                            {{--<div class="col lg-4">--}}
                                {{--<div class="button-group round">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button round xlg concrete border" data-dropdown="toggle-button">XLG <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col lg-8">--}}
                                {{--<div class="button-group round justify">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button concrete xlg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                        {{--<button class="button concrete xlg">Button</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button concrete xlg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mt-30">--}}
                            {{--<div class="col lg-4">--}}
                                {{--<div class="button-group round">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button round xxlg asphalt border" data-dropdown="toggle-button">XXL <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col lg-8">--}}
                                {{--<div class="button-group round">--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button asphalt xxlg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group has-dropdown">--}}
                                        {{--<button class="button asphalt xxlg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></button>--}}
                                        {{--<ul class="dropdown-list" data-dropdown="list">--}}
                                            {{--<li><a href="#">Link one</a></li>--}}
                                            {{--<li class="divider"><a href="#">Link two</a></li>--}}
                                            {{--<li><a href="#">Link three</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </main>
                </section>
            </div>
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Button Group</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">

                            <h4 class="text-center">Round</h4>

                            <div class="col lg-12 text-center mt-20">
                                <div class="button-group round justify">
                                    <div class="button-group">
                                        <button class="button round purple border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round purple border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round purple border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round purple border">Button</button>
                                    </div>
                                </div>
                                <div class="button-group round mt-20 mb-30 justify">
                                    <div class="button-group">
                                        <button class="button round success">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round success">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round success">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button round success">Button</button>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-center">Pill </h4>
                            <div class="col lg-12 text-center mt-20">
                                <div class="button-group pill justify">
                                    <div class="button-group">
                                        <button class="button pill border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill border">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill border">Button</button>
                                    </div>
                                </div>
                                <div class="button-group pill mt-20 mb-30 justify">
                                    <div class="button-group">
                                        <button class="button pill info">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill info">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill info">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button pill info">Button</button>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-center">Default</h4>
                            <div class="col lg-12 text-center mt-20">
                                <div class="button-group justify">
                                    <div class="button-group">
                                        <button class="button primary">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button primary">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button primary">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button primary">Button</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col lg-12 text-center mt-20">
                                <div class="button-group justify">
                                    <div class="button-group">
                                        <button class="button laravel">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button laravel">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button laravel">Button</button>
                                    </div>
                                    <div class="button-group">
                                        <button class="button laravel">Button</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection