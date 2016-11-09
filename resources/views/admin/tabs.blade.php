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
                        <h3>Default Tabs</h3>
                        <div class="tab">
                            <ul class="tab-nav">
                                <li class="active"><a href="#"><I class="mdi mdi-access-point"></I> One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis dicta
                                        enim fugiat illum odio quo similique sint tempora tempore? Distinctio fugit
                                        itaque laboriosam laudantium modi. Ad, adipisci consectetur consequatur delectus
                                        dicta dolor doloremque dolores expedita fugit iure labore magnam magni modi
                                        natus nemo nesciunt nulla odit provident quas quidem? A ad assumenda consequatur
                                        deleniti deserunt dignissimos doloremque enim eos et excepturi exercitationem
                                        inventore, ipsa natus necessitatibus, odio perspiciatis possimus, quo repellat
                                        reprehenderit repudiandae soluta voluptate voluptatum! Animi deleniti distinctio
                                        ducimus ea enim facere harum hic ipsam laudantium maiores nemo non nulla,
                                        possimus</p>
                                </div>
                                <div class="tab-content">
                                    <p>TWO Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                                <div class="tab-content">
                                    <p>THREE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                            </div>
                        </div>

                        <h3>Justified Tabs</h3>
                        <div class="tab">
                            <ul class="tab-nav justify">
                                <li class="active"><a href="#"><I class="mdi mdi-access-point"></I> One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis dicta
                                        enim fugiat illum odio quo similique sint tempora tempore? Distinctio fugit
                                        itaque laboriosam laudantium modi. Ad, adipisci consectetur consequatur delectus
                                        dicta dolor doloremque dolores expedita fugit iure labore magnam magni modi
                                        natus nemo nesciunt nulla odit provident quas quidem? A ad assumenda consequatur
                                        deleniti deserunt dignissimos doloremque enim eos et excepturi exercitationem
                                        inventore, ipsa natus necessitatibus, odio perspiciatis possimus, quo repellat
                                        reprehenderit repudiandae soluta voluptate voluptatum! Animi deleniti distinctio
                                        ducimus ea enim facere harum hic ipsam laudantium maiores nemo non nulla,
                                        possimus</p>
                                </div>
                                <div class="tab-content">
                                    <p>TWO Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                                <div class="tab-content">
                                    <p>THREE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                            </div>
                        </div>

                        <h3>Condensed Tabs</h3>
                        <div class="tab condense">
                            <ul class="tab-nav">
                                <li class="active"><a href="#"><I class="mdi mdi-access-point"></I> One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis dicta
                                        enim fugiat illum odio quo similique sint tempora tempore? Distinctio fugit
                                        itaque laboriosam laudantium modi. Ad, adipisci consectetur consequatur delectus
                                        dicta dolor doloremque dolores expedita fugit iure labore magnam magni modi
                                        natus nemo nesciunt nulla odit provident quas quidem? A ad assumenda consequatur
                                        deleniti deserunt dignissimos doloremque enim eos et excepturi exercitationem
                                        inventore, ipsa natus necessitatibus, odio perspiciatis possimus, quo repellat
                                        reprehenderit repudiandae soluta voluptate voluptatum! Animi deleniti distinctio
                                        ducimus ea enim facere harum hic ipsam laudantium maiores nemo non nulla,
                                        possimus</p>
                                </div>
                                <div class="tab-content">
                                    <p>TWO Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                                <div class="tab-content">
                                    <p>THREE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                            </div>
                        </div>

                        <h3>Condensed Tabs</h3>
                        <div class="tab condense">
                            <ul class="tab-nav justify">
                                <li class="active"><a href="#"><I class="mdi mdi-access-point"></I> One</a></li>
                                <li><a href="#"><i class="mdi mdi-account-circle"></i> Two</a></li>
                                <li><a href="#"><i class="mdi mdi-airplane-off"></i> Three</a></li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab blanditiis dicta
                                        enim fugiat illum odio quo similique sint tempora tempore? Distinctio fugit
                                        itaque laboriosam laudantium modi. Ad, adipisci consectetur consequatur delectus
                                        dicta dolor doloremque dolores expedita fugit iure labore magnam magni modi
                                        natus nemo nesciunt nulla odit provident quas quidem? A ad assumenda consequatur
                                        deleniti deserunt dignissimos doloremque enim eos et excepturi exercitationem
                                        inventore, ipsa natus necessitatibus, odio perspiciatis possimus, quo repellat
                                        reprehenderit repudiandae soluta voluptate voluptatum! Animi deleniti distinctio
                                        ducimus ea enim facere harum hic ipsam laudantium maiores nemo non nulla,
                                        possimus</p>
                                </div>
                                <div class="tab-content">
                                    <p>TWO Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                                <div class="tab-content">
                                    <p>THREE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est illum ipsa
                                        ipsum odio sunt suscipit vel vitae voluptas voluptatibus.</p>
                                </div>
                            </div>
                        </div>

                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection