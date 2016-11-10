@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Form Elements'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Form Elements</h2>
                    </header>
                    <main class="box-content">
                        <h3 class="mb-30">Sizes</h3>
                        <div class="row">
                            <div class="col lg-6">
                                <div class="form-group">
                                    <label for="form-1" class="form-label">Extra Small size <span class="help">Extra Small in size</span></label>
                                    <input type="text" id="form-1" class="form-control xs" placeholder="Placeholder...">
                                    <p class="msg">Description message...</p>
                                </div>
                                <div class="form-group">
                                    <label for="form-1" class="form-label">Small size <span class="help">Small in size</span></label>
                                    <input type="text" id="form-1" class="form-control sm" placeholder="Placeholder...">
                                    <p class="msg">Description message...</p>
                                </div>
                                <div class="form-group">
                                    <label for="form-1" class="form-label">Medium Size - Default <span class="help">Medium in size</span></label>
                                    <input type="text" id="form-1" class="form-control md" placeholder="Placeholder...">
                                    <p class="msg">Description message...</p>
                                </div>
                            </div>
                            <div class="col lg-6">
                                <div class="form-group">
                                    <label for="form-1" class="form-label">Large size <span class="help">Large in size</span></label>
                                    <input type="text" id="form-1" class="form-control lg" placeholder="Placeholder...">
                                </div>
                                <div class="form-group">
                                    <label for="form-1" class="form-label">Extra Large size <span class="help">Extra Large in size</span></label>
                                    <input type="text" id="form-1" class="form-control xlg" placeholder="Placeholder...">
                                </div>
                                <div class="form-group">
                                    <label for="form-1" class="form-label">XXLarge size <span class="help">XXLarge in size</span></label>
                                    <input type="text" id="form-1" class="form-control xxlg" placeholder="Placeholder...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-4">
                                <div class="form-group">
                                    <label for="form-4">Password</label>
                                    <input type="password" id="form-4" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-4">
                                <div class="form-group">
                                    <label for="form-5">Confirm Password</label>
                                    <input type="password" id="form-5" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-4">
                                <div class="form-group">
                                    <label for="form-6">Email</label>
                                    <input type="email" id="form-6" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="form-group disabled">
                                    <label for="form-7">Disabled</label>
                                    <input type="text" id="form-7" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="form-group success">
                                    <label for="form-7">Success</label>
                                    <input type="text" id="form-7" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="form-group error">
                                    <label for="form-7">Error</label>
                                    <input type="text" id="form-7" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="form-group warning">
                                    <label for="form-7">Warning</label>
                                    <input type="text" id="form-7" class="form-control" placeholder="Placeholder...">
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-30">Input Groups</h3>
                        <div class="row mb-20">
                            <div class="col lg-6">
                                <div class="input-group justify">
                                    <div class="input-group has-dropdown">
                                        <a href="/" class="button primary" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Type something...">
                                    </div>
                                </div>
                            </div>
                            <div class="col lg-6">
                                <div class="input-group justify">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Type something...">
                                    </div>
                                    <div class="input-group has-dropdown">
                                        <a href="/" class="button primary" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Type something...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon at-end"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Type something...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Type something...">
                                </div>
                            </div>
                            <div class="col lg-3">
                                <div class="input-group">
                                    <span class="input-group-addon at-end"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Type something...">
                                </div>
                            </div>
                        </div>

                        <h3 class="mb-20 mt-30">Inline</h3>
                        <div class="row">
                            <div class="col lg-12">
                                <div class="form-group inline">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Email...">
                                </div>
                                <div class="form-group inline ml-10">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Password..">
                                </div>
                                <div class="form-group inline ml-10 pt-5">
                                    <input type="checkbox" id="check-remember" class="icheck" data-theme="flat"
                                           data-skin="blue" checked>
                                    <label for="check-remember">Remember me</label>
                                </div>
                                <button class="button success ml-20">Sign in</button>
                                <button class="button danger">Cancel</button>
                            </div>
                            <div class="col lg-12 mt-20">
                                <div class="form-group inline">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control lg" placeholder="Username...">
                                </div>
                                <div class="input-group ml-10">
                                    <div class="input-group has-dropdown">
                                        <a href="/" class="button primary lg" data-dropdown="toggle-button">Button <i class="fa fa-caret-down"></i></a>
                                        <ul class="dropdown-list" data-dropdown="list">
                                            <li><a href="#">Link one</a></li>
                                            <li class="divider"><a href="#">Link two</a></li>
                                            <li><a href="#">Link three</a></li>
                                        </ul>
                                    </div>
                                    <div class="input-group lg">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control lg" placeholder="Type something...">
                                    </div>
                                    <button class="button pill info ml-20 lg">Submit</button>
                                    <button class="button ml-20 lg">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-20 mt-30">Checkboxes</h3>
                        <div class="row">
                            <?php
                            $themes = [
                                    'flat' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'minimal' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'square' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'line' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow']
                            ];
                            ?>
                            @foreach($themes as $themeName => $skins)
                                <div class="col lg-12">
                                    <h5>{{ ucfirst($themeName) }}</h5>
                                </div>
                                @foreach($skins as $skin)
                                    @if( $themeName == 'line' )
                                        <div class="col lg-2 mt-10">
                                            <input type="checkbox" class="icheck" data-theme="{{ $themeName }}"
                                                   data-skin="{{ $skin }}" checked>
                                            <label for="{{ $themeName }}-{{ $skin }}">
                                                {{ ucfirst($themeName) }} {{ ucfirst($skin) }}
                                            </label>
                                        </div>
                                    @else
                                        <div class="col lg-2">
                                            <label for="{{ $themeName }}-{{ $skin }}">
                                                <input type="checkbox" class="icheck" data-theme="{{ $themeName }}"
                                                       data-skin="{{ $skin }}" checked>
                                                {{ ucfirst($themeName) }} {{ ucfirst($skin) }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            @endforeach

                        </div>
                        <h3 class="mb-20 mt-30">Radio</h3>
                        <div class="row">
                            <?php
                            $themes = [
                                    'flat' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'minimal' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'square' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow'],
                                    'line' => ['aero', 'blue', 'green', 'grey', 'orange', 'pink', 'purple', 'red', 'yellow']
                            ];
                            ?>
                            @foreach($themes as $themeName => $skins)
                                <div class="col lg-12">
                                    <h5>{{ ucfirst($themeName) }}</h5>
                                </div>
                                @foreach($skins as $skin)
                                    @if( $themeName == 'line' )
                                        <div class="col lg-2 mt-10">
                                            <input type="radio" class="icheck" data-theme="{{ $themeName }}"
                                                   data-skin="{{ $skin }}" checked>
                                            <label for="{{ $themeName }}-{{ $skin }}">
                                                {{ ucfirst($themeName) }} {{ ucfirst($skin) }}
                                            </label>
                                        </div>
                                    @else
                                        <div class="col lg-2">
                                            <label for="{{ $themeName }}-{{ $skin }}">
                                                <input type="radio" class="icheck" data-theme="{{ $themeName }}"
                                                       data-skin="{{ $skin }}" checked>
                                                {{ ucfirst($themeName) }} {{ ucfirst($skin) }}
                                            </label>
                                        </div>
                                    @endif
                                @endforeach

                            @endforeach

                        </div>
                        <h3 class="mb-20 mt-30">Default Input Checkbox and radio</h3>
                        <div class="row">
                            <div class="col lg-4">
                                <label>
                                    <input type="checkbox"> Default Checkbox
                                </label>
                                <label>
                                    <input class="md" type="checkbox"> Default Checkbox
                                </label>
                            </div>
                            <div class="col lg-4">
                                <label>
                                    <input name="d-radio" type="radio"> Default radio
                                </label>
                                <label>
                                    <input name="d-radio" class="md" type="radio"> Default radio
                                </label>
                            </div>
                        </div>
                        <h3 class="mb-20 mt-30">Textarea</h3>
                        <h5>Default Textarea</h5>
                        <textarea name="" id="" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias architecto at, blanditiis commodi, consectetur consequatur debitis deleniti, excepturi ipsum molestias nostrum quisquam reprehenderit vel vero. A accusamus consequatur cupiditate dicta dolor dolorem dolores excepturi explicabo illo itaque laudantium non numquam obcaecati officiis quae rerum similique, tempora ut voluptatem voluptates.</textarea>

                        <h5 class="mt-20">Auto Resize</h5>
                        <textarea name="" id="" class="autosize">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur, beatae dolore ea, eveniet iure labore molestias nihil nostrum optio ratione rem repellat reprehenderit tenetur vel voluptas voluptates. Alias aliquid aperiam atque dolor dolores, eveniet exercitationem, fuga fugiat illo incidunt ipsum laborum odio optio placeat recusandae reprehenderit, tenetur veniam voluptas.</textarea>

                        <div class="row mt-10">
                            <div class="col lg-3">
                                <h5>Success</h5>
                                <textarea name="" id="" class="autosize success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet blanditiis commodi debitis doloremque eum id inventore maxime odit sint!</textarea>
                            </div>
                            <div class="col lg-3">
                                <h5>Error</h5>
                                <textarea name="" id="" class="autosize error">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet blanditiis commodi debitis doloremque eum id inventore maxime odit sint!</textarea>
                            </div>
                            <div class="col lg-3">
                                <h5>Warning</h5>
                                <textarea name="" id="" class="autosize warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet blanditiis commodi debitis doloremque eum id inventore maxime odit sint!</textarea>
                            </div>
                            <div class="col lg-3">
                                <h5>Info</h5>
                                <textarea name="" id="" class="autosize info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet blanditiis commodi debitis doloremque eum id inventore maxime odit sint!</textarea>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection