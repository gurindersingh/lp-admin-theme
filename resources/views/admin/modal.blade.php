@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Modal'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Modals</h2>
                        <div class="box-action pull-right">
                            <div class="action"><i class="fa fa-chevron-down"></i></div>
                            <div class="action"><i class="fa fa-cog"></i></div>
                            <div class="action"><i class="fa fa-times"></i></div>
                        </div>
                    </header>
                    <main class="box-content">

                        <div class="row">

                            <div class="col lg-3">
                                <a href="#" data-modal-id="modal-1" class="btn modal-button">Default Modal</a>

                                <div id="modal-1" class="modal">
                                    <div class="dialog">
                                        <div class="heading">
                                            <h4 class="title">Modal Title</h4>
                                            <a class="close" href="#" data-close-modal><i class="mdi mdi-window-close"></i></a>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur
                                                laborum nemo nostrum nulla placeat reprehenderit soluta voluptatum?
                                                Assumenda, laborum!</p>
                                        </div>
                                        <div class="footer">
                                            <div class="pull-right">
                                                <a class="btn md" href="#" data-close-modal ><i class="mdi mdi-window-close"></i> Close</a>
                                                <button class="btn md primary ml-10">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col lg-3">
                                <a href="#" data-modal-id="modal-2" class="btn modal-button">Full Width Modal</a>

                                <div id="modal-2" class="modal full-width">
                                    <div class="dialog">
                                        <div class="heading">
                                            <h4 class="title">Modal Title</h4>
                                            <a class="close" href="#" data-close-modal><i class="mdi mdi-window-close"></i></a>
                                        </div>
                                        <div class="body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                                consectetur culpa cumque delectus deserunt doloribus eaque earum eius
                                                esse minus nesciunt odit optio provident quis, repellendus sapiente sed,
                                                sint tempore! Ad architecto autem consectetur delectus deleniti deserunt
                                                dicta dolorum earum error et fuga illum iure minus molestias mollitia
                                                necessitatibus nesciunt nobis numquam officiis perspiciatis quae quaerat
                                                quas, quos reiciendis sapiente sed soluta tempora unde vero voluptate.
                                                Ad alias architecto beatae, commodi culpa cum delectus doloribus est eum
                                                facilis fugit harum id impedit iure magni molestias nisi odio placeat
                                                praesentium quae quod recusandae repellendus tempora tempore totam ullam
                                                veritatis. Eaque enim iure obcaecati saepe suscipit. Accusantium
                                                architecto aspernatur deleniti ea fugiat in ipsa, libero, modi numquam
                                                perferendis reiciendis repellat sapiente sunt temporibus vel vero vitae
                                                voluptas! A alias beatae dicta dignissimos dolorem, ducimus error et
                                                eveniet, exercitationem impedit ipsa minus necessitatibus odio, optio
                                                perspiciatis porro sapiente tempora ullam ut vel. Ab alias aperiam
                                                deserunt dolore quaerat repellendus voluptas, voluptatem? Consectetur
                                                eum exercitationem fugit nihil odit reiciendis veniam! Dolorum, eum,
                                                omnis. Accusamus aut debitis deserunt dolor error est et expedita fugit
                                                hic incidunt inventore iste libero maxime mollitia nam neque nostrum,
                                                obcaecati officia officiis placeat quam repellat, sed tempore tenetur
                                                unde veniam.</p>
                                        </div>
                                        <div class="footer">
                                            <div class="pull-right">
                                                <a class="btn md" href="#" data-close-modal ><i class="mdi mdi-window-close"></i> Close</a>
                                                <button class="btn md primary ml-10">Submit</button>
                                            </div>
                                        </div>
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