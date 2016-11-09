@extends('layouts.admin.master')

@section('content')

    <div class="content">

        @include('admin.page-title',['pageTitle' => 'Buttons'])

        <div class="container">
            <div class="row">
                <div class="col lg-12">
                    <section class="box">
                        <header class="box-header info">
                            <h2 class="box-header-title pull-left">Buttons</h2>
                            <div class="box-action pull-right">
                                <div class="action"><i class="fa fa-chevron-down"></i></div>
                                <div class="action"><i class="fa fa-cog"></i></div>
                                <div class="action"><i class="fa fa-times"></i></div>
                            </div>
                        </header>
                        <main class="box-content">
                            <h3>Colors</h3>
                            <div class="row">
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button">Default</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button primary">primary</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button primary-dark">primary dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button success">success</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button success-dark">success dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button warning">warning</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button warning-dark">warning dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button info">info</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button info-dark">info dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button danger">danger</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button danger-dark">danger dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button purple-dark">purple dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button sunflower">sunflower</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button orange">orange</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button clouds">clouds</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button concrete">concrete</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button concrete-dark">concrete-dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button asphalt">asphalt</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize button asphalt-dark">asphalt-dark</button></div>
                            </div>
                            <h3>Outlined</h3>
                            <div class="row">
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block">Default</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block primary">primary</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block primary-dark">primary dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block success">success</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block success-dark">success dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block warning">warning</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block warning-dark">warning dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block info">info</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block info-dark">info dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block danger">danger</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block danger-dark">danger dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block purple-dark">purple dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block sunflower">sunflower</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block orange">orange</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block clouds">clouds</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block concrete">concrete</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block concrete-dark">concrete-dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block asphalt">asphalt</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button type="button" class="text-capitalize outline button block asphalt-dark">asphalt-dark</button></div>
                            </div>
                            <h3>Sizes</h3>
                            <div class="row">
                                <div class="col lg-12">
                                    <button type="button" class="mr-10 text-capitalize button primary xs">Xtra Small</button>
                                    <button type="button" class="mr-10 text-capitalize button primary sm">Small</button>
                                    <button type="button" class="mr-10 text-capitalize button primary">Default Size</button>
                                    <button type="button" class="mr-10 text-capitalize button primary lg">Large</button>
                                </div>
                            </div>
                            <div class="row mt-10">
                                <div class="col lg-12">
                                    <button type="button" class="mr-10 outline text-capitalize button primary xs">Xtra Small</button>
                                    <button type="button" class="mr-10 outline text-capitalize button primary sm">Small</button>
                                    <button type="button" class="mr-10 outline text-capitalize button primary">Default Size</button>
                                    <button type="button" class="mr-10 outline text-capitalize button primary lg">Large</button>
                                </div>
                            </div>
                            <h3>Block</h3>
                            <div class="row">
                                <div class="col lg-12">
                                    <button type="button" class="mb-10 text-capitalize button primary block xs">Xtra Small</button>
                                    <button type="button" class="mb-10 text-capitalize button info block sm">Small</button>
                                    <button type="button" class="mb-10 text-capitalize button warning block">Default Size</button>
                                    <button type="button" class="text-capitalize button orange block lg">Large</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col lg-12">
                                    <button type="button" class="mt-10 mb-10 text-capitalize button outline primary block xs">Xtra Small</button>
                                    <button type="button" class="mb-10 text-capitalize button outline info block sm">Small</button>
                                    <button type="button" class="mb-10 text-capitalize button outline warning block">Default Size</button>
                                    <button type="button" class="text-capitalize button outline orange block lg">Large</button>
                                </div>
                            </div>
                            <h3>Disabled</h3>
                            <div class="row">
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block">Default</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block primary">primary</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block primary-dark">primary dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block success">success</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block success-dark">success dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block warning">warning</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block warning-dark">warning dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block info">info</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block info-dark">info dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block danger">danger</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block danger-dark">danger dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block purple-dark">purple dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block sunflower">sunflower</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block orange">orange</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block clouds">clouds</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block concrete">concrete</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block concrete-dark">concrete-dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block asphalt">asphalt</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize button block asphalt-dark">asphalt-dark</button></div>
                            </div>
                            <div class="row">
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block">Default</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block primary">primary</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block primary-dark">primary dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block success">success</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block success-dark">success dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block warning">warning</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block warning-dark">warning dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block info">info</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block info-dark">info dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block danger">danger</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block danger-dark">danger dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block purple-dark">purple dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block purple">purple</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block sunflower">sunflower</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block orange">orange</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block clouds">clouds</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block concrete">concrete</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block concrete-dark">concrete-dark</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block asphalt">asphalt</button></div>
                                <div class="col lg-2" style="margin-bottom: 10px"><button disabled type="button" class="text-capitalize outline button block asphalt-dark">asphalt-dark</button></div>
                            </div>
                            <h3>Group</h3>
                            <div class="row mb-20">
                                <div class="col lg-6">
                                    <h6>Button Group</h6>
                                    <div class="button-group">
                                        <button type="button" class="button outline">Left</button>
                                        <button type="button" class="button outline">Middle</button>
                                        <button type="button" class="button outline">Right</button>
                                    </div>
                                </div>
                                <div class="col lg-6">
                                    <h6>Button group toolbar</h6>
                                    <div class="button-toolbar">
                                        <div class="button-group">
                                            <button type="button" class="button primary">1</button>
                                            <button type="button" class="button primary">2</button>
                                            <button type="button" class="button primary">3</button>
                                            <button type="button" class="button primary">4</button>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="button success">5</button>
                                            <button type="button" class="button success">6</button>
                                            <button type="button" class="button success">7</button>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="button info">8</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col lg-6">
                                    <h6>Sizes</h6>
                                    <div class="button-group xs justify">
                                        <div class="button-group" role="group">
                                            <button type="button" class="button purple outline">Left</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button purple outline">Middle</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button purple outline">Right</button>
                                        </div>
                                    </div>
                                    <div class="mt-10 button-group sm justify">
                                        <div class="button-group" role="group">
                                            <button type="button" class="button primary outline">Left</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button primary outline">Middle</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button primary outline">Right</button>
                                        </div>
                                    </div>
                                    <div class="mt-10 button-group justify">
                                        <div class="button-group" role="group">
                                            <button type="button" class="button success outline">Left</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button success outline">Middle</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button success outline">Right</button>
                                        </div>
                                    </div>
                                    <div class="mt-10 button-group lg justify">
                                        <div class="button-group" role="group">
                                            <button type="button" class="button info outline">Left</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button info outline">Middle</button>
                                        </div>
                                        <div class="button-group" role="group">
                                            <button type="button" class="button info outline">Right</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col lg-6">
                                    <div class="row">
                                        <div class="col lg-3">
                                            <h6>Vertical</h6>
                                            <div class="button-group vertical">
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                                <div class="button-group">
                                                    <button class="button outline has-dropdown" data-dropdown="button">
                                                        Dropdown
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown" data-dropdown="dropdown">
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li><a href="#">Dropdown link</a></li>
                                                        <li class="divider"></li>
                                                        <li class="active"><a href="#">Dropdown link</a></li>
                                                        <li class=""><a href="#">Dropdown link</a></li>
                                                        <li class=""><a href="#">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                            </div>
                                        </div>
                                        <div class="col lg-9">
                                            <h6>Vertical Justify</h6>
                                            <div class="button-group vertical justify">
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                                <button type="button" class="button outline">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Dropdown</h3>
                            <div class="row">
                                <div class="col lg-6">
                                    <div class="button-group">
                                        <button class="button outline">1</button>
                                        <button class="button outline">2</button>
                                        <button class="button outline">3</button>
                                        <div class="button-group">
                                            <button class="button outline has-dropdown active" data-dropdown="button">
                                                Dropdown
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown open" data-dropdown="dropdown">
                                                <li><a href="#">Dropdown link</a></li>
                                                <li><a href="#">Dropdown link</a></li>
                                                <li class="divider"></li>
                                                <li class="active"><a href="#">Dropdown link</a></li>
                                                <li class=""><a href="#">Dropdown link</a></li>
                                                <li class=""><a href="#">Dropdown link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Icons</h3>
                            <div class="row">
                                <div class="col lg-12">
                                    <button type="button" class="mr-10 mb-10 text-capitalize button primary xs"><i class="fa fa-heart"></i>&nbsp; Xtra Small</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button primary sm"><i class="fa fa-heart"></i>&nbsp; Small</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button primary"><i class="fa fa-heart"></i>&nbsp; Default Size</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button primary lg"> <i class="fa fa-heart"></i>&nbsp; Large</button>
                                </div>
                                <div class="col lg-12">
                                    <button type="button" class="mr-10 mb-10 text-capitalize button info xs"><i class="fa fa-heart"></i>&nbsp; Xtra Small</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button info sm"><i class="fa fa-heart"></i>&nbsp; Small</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button info"><i class="fa fa-heart"></i>&nbsp; Default Size</button>
                                    <button type="button" class="mr-10 mb-10 text-capitalize button info lg"> <i class="fa fa-heart"></i>&nbsp; Large</button>
                                </div>
                            </div>
                        </main>
                    </section>
                </div>
            </div>
        </div>


    </div>
@endsection