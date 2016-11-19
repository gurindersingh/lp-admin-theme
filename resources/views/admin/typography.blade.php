@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Typography'])

    <div class="row">
        <div class="col lg-6">
            <section class="box">
                <header class="box-header primary">
                    <h2 class="box-header-title pull-left">Typography</h2>
                    <div class="box-action pull-right">
                        <div class="action"><i class="fa fa-chevron-down"></i></div>
                        <div class="action"><i class="fa fa-cog"></i></div>
                        <div class="action"><i class="fa fa-times"></i></div>
                    </div>
                </header>
                <main class="box-content">
                    <h3>Unordered List</h3>
                    <ul>
                        <li>Lorem ipsum.</li>
                        <li>
                            Lorem ipsum.
                            <ul>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                            </ul>
                        </li>
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum.</li>
                    </ul>
                    <h3>Ordered List</h3>
                    <ol>
                        <li>Lorem ipsum.</li>
                        <li>
                            Lorem ipsum.
                            <ol>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                                <li>Lorem ipsum.</li>
                            </ol>
                        </li>
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum.</li>
                    </ol>
                    <h3>Shrink Unordered List</h3>
                    <ul class="shrink">
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum.</li>
                    </ul>
                    <h3>Justified Flat List Horizontal</h3>
                    <ul class="flat-list-h">
                        <li>Flat one</li>
                        <li>Flat two</li>
                        <li>Flat three</li>
                    </ul>
                    <h3>Justified Flat List Horizontal with background </h3>
                    <ul class="flat-list-h background">
                        <li>Flat one</li>
                        <li>Flat two</li>
                        <li>Flat three</li>
                    </ul>
                    <h3>Pagination</h3>
                    <ul class="pagination">
                        <li><a href="#"><<</a></li>
                        <li><a href="#"><</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">></a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </main>
            </section>
        </div>
        <div class="col lg-6">
            <section class="box">
                <header class="box-header info">
                    <h2 class="box-header-title pull-left">Typography</h2>
                    <div class="box-action pull-right">
                        <div class="action"><i class="fa fa-chevron-down"></i></div>
                        <div class="action"><i class="fa fa-cog"></i></div>
                        <div class="action"><i class="fa fa-times"></i></div>
                    </div>
                </header>
                <main class="box-content">
                    <h3>Headings</h3>
                    <h1>h1. Heading 1 <small>Secondary text</small></h1>
                    <h2>h2. Heading 2 <small>Secondary text</small></h2>
                    <h3>h3. Heading 3 <small>Secondary text</small></h3>
                    <h4>h4. Heading 4 <small>Secondary text</small></h4>
                    <h5>h5. Heading 5 <small>Secondary text</small></h5>
                    <h6>h6. Heading 6 <small>Secondary text</small></h6>
                    <br>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores consequatur corporis <del>This line of text is meant to be treated as deleted text.</del> deserunt iste nobis optio pariatur similique ullam voluptates.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, excepturi in maxime
                        minima nemo odit possimus rerum <abbr title="attribute">attr</abbr>. Blanditiis cupiditate fugiat natus nostrum
                        perferendis porro provident quia quisquam soluta vel. A at <abbr title="With initialism" class="initialism">With Initialism</abbr> eligendi fuga
                        maiores, modi rem voluptas. Mollitia.</p>
                    <p>Lorem ipsum dolor sit amet, <mark>consectetur adipisicing elit</mark>. Dignissimos, nesciunt?</p>
                </main>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col lg-12">
            <section class="box">
                <header class="box-header primary">
                    <h2 class="box-header-title pull-left">Blockquote / Well</h2>
                    <div class="box-action pull-right">
                        <div class="action"><i class="fa fa-chevron-down"></i></div>
                        <div class="action"><i class="fa fa-cog"></i></div>
                        <div class="action"><i class="fa fa-times"></i></div>
                    </div>
                </header>
                <main class="box-content">
                    <div class="row">
                        <div class="col lg-12">
                            <h3>Blockquote - Well</h3>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="blockquote-reverse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="has-background">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="blockquote-reverse has-background">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="is-primary">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="is-info blockquote-reverse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="is-success">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <blockquote class="is-warning blockquote-reverse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <h3>Wells</h3>
                            <div class="well">
                                <h4>Look, I'm in a well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well large">
                                <h4>Look, I'm in a Large well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well small">
                                <h4>Look, I'm in a Small well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well primary">
                                <h4>Look, I'm in a Small well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well success">
                                <h4>Look, I'm in a success well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well info">
                                <h4>Look, I'm in a info well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well warning">
                                <h4>Look, I'm in a warning well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <div class="well danger">
                                <h4>Look, I'm in a danger well Heading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium deserunt dolore minima non, repellendus tempora veritatis voluptas. Aspernatur debitis delectus dicta eum in officia rem tempora, vel vitae voluptatum!</p>
                            </div>
                            <br>
                            <h3>Text Variations</h3>

                            <h6>.text-capitalize</h6>
                            <p class="text-capitalize">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6>.text-lowercase</h6>
                            <p class="text-lowercase">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6>.text-uppercase</h6>
                            <p class="text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6 class="text-center">.text-center</h6>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6 class="text-left">.text-left</h6>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6 class="text-right">.text-right</h6>
                            <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            <h6 class="text-justify">.text-justify</h6>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        </div>
                    </div>
                </main>
            </section>
        </div>
    </div>

@endsection