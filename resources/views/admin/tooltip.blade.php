@extends('layouts.admin.master')

@section('content')

    @include('admin.page-title',['pageTitle' => 'Tooltip'])

    <div class="container">
        <div class="row">
            <div class="col lg-12">
                <section class="box">
                    <header class="box-header info">
                        <h2 class="box-header-title pull-left">Tooltip</h2>
                    </header>
                    <main class="box-content">
                        <div class="row">
                            <div class="col lg-4">
                                <h5>Positions</h5>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a top tooltip" data-position="top" >top</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a bottom tooltip" data-position="bottom" >bottom</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a right tooltip" data-position="right" >right</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a left tooltip" data-position="left" >left</span></p>
                            </div>
                            <div class="col lg-4">
                                <h5>Corner Positions</h5>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a top-right tooltip" data-position="top-right" >top right</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a top-left tooltip" data-position="top-left" >top left</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a bottom-right tooltip" data-position="bottom-right" >bottom right</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a bottom-left tooltip" data-position="bottom-left" >bottom left</span></p>
                            </div>
                            <div class="col lg-4">
                                <h5>Title bar</h5>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a tooltip with title" data-titleContent="Title">with title</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a tooltip with title" data-titleContent="Title" data-position="bottom">with title</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a tooltip with title" data-titleContent="Title" data-position="left">with title</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-4">
                                <h5>Sizes</h5>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a tiny size tooltip" data-position="top" data-size="tiny" data-titleContent="Title" >tiny size</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a small size tooltip" data-position="top" data-size="small" data-titleContent="Title" >small size</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a default size tooltip" data-position="top" data-size="default" data-titleContent="Title" >default size</span></p>
                                <p>Lorem ipsum dolor sit <span class="tooltip" data-tipso="This is a large size tooltip" data-position="top" data-size="large" data-titleContent="Title" >large size</span></p>
                                <p class="small">Available sizes ara - 'tiny', 'small', 'default', 'large'</p>
                            </div>
                            <div class="col lg-4">
                                <h5>Image Tooltip</h5>
                                <p>
                                    <img class="mr-10 tooltip" src="{{ asset('images/users/1.png') }}" width="50px" data-tipso="John Doe">
                                    <img class="mr-10 tooltip" src="{{ asset('images/users/2.png') }}" width="50px" data-tipso="John Doe" data-background="#333333">
                                    <img class="mr-10 tooltip" src="{{ asset('images/users/3.jpg') }}" width="50px" data-tipso="John Doe" data-background="#ff4040">
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col lg-12">
                                <h5>Available data properties</h5>
                                <table class="table hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th style="min-width: 100px">Default</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead><tbody>
                                    <tr>
                                        <td>speed</td>
                                        <td>400</td>
                                        <td>integer - Duration of the fade effect in ms</td>
                                    </tr>
                                    <tr>
                                        <td>size</td>
                                        <td>''</td>
                                        <td>Tipso Bubble size classes (string: 'tiny', 'small', 'default', 'large') or you can make your own classes</td>
                                    </tr>
                                    <tr>
                                        <td>background</td>
                                        <td>'#55b555'</td>
                                        <td>Background color of the tooltip, it can be hex, rgb, rgba, color name</td>
                                    </tr>
                                    <tr>
                                        <td>titleBackground</td>
                                        <td>'#333333'</td>
                                        <td>Background color of the tooltip title, it can be hex, rgb, rgba, color name</td>
                                    </tr>
                                    <tr>
                                        <td>color</td>
                                        <td>'#ffffff'</td>
                                        <td>Text color of the tooltip, it can be hex, rgb, rgba, color name</td>
                                    </tr>
                                    <tr>
                                        <td>titleColor</td>
                                        <td>'#ffffff'</td>
                                        <td>Text color of the tooltip title, it can be hex, rgb, rgba, color name</td>
                                    </tr>
                                    <tr>
                                        <td>titleContent</td>
                                        <td>''</td>
                                        <td>The content of the tooltip title, can be text, html or whatever you want</td>
                                    </tr>
                                    <tr>
                                        <td>showArrow</td>
                                        <td>true</td>
                                        <td>Ability to show/hide the arrow of the tooltip (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td>position</td>
                                        <td>'top'</td>
                                        <td>Initial position of the tooltip, available positions 'top', 'bottom', 'left', 'right'</td>
                                    </tr>
                                    <tr>
                                        <td>width</td>
                                        <td>200</td>
                                        <td>Width of the tooltip in px or % (for % add the value in quotes ex.'50%')</td>
                                    </tr>
                                    <tr>
                                        <td>maxWidth</td>
                                        <td>''</td>
                                        <td>max-width of the tooltip in px or % (for % add the value in quotes ex.'50%'). For usage you need to set width to '', false or null</td>
                                    </tr>
                                    <tr>
                                        <td>delay</td>
                                        <td>200</td>
                                        <td>Delay before showing the tooltip in ms</td>
                                    </tr>
                                    <tr>
                                        <td>hideDelay</td>
                                        <td>0</td>
                                        <td>Delay before hiding the tooltip in ms</td>
                                    </tr>
                                    <tr>
                                        <td>animationIn</td>
                                        <td>''</td>
                                        <td>CSS3 animation effect to show the tooltip using <a target="_blank" href="http://daneden.github.io/animate.css">Animate.css</a></td>
                                    </tr>
                                    <tr>
                                        <td>animationOut</td>
                                        <td>''</td>
                                        <td>CSS3 animation effect to hide the tooltip using <a target="_blank" href="http://daneden.github.io/animate.css">Animate.css</a></td>
                                    </tr>
                                    <tr>
                                        <td>offsetX</td>
                                        <td>0</td>
                                        <td>Offset value of the tooltip on X axis</td>
                                    </tr>
                                    <tr>
                                        <td>offsetY</td>
                                        <td>0</td>
                                        <td>Offset value of the tooltip on Y axis</td>
                                    </tr>
                                    <tr>
                                        <td>tooltipHover</td>
                                        <td>false</td>
                                        <td>Abillity to interact with the tooltip content</td>
                                    </tr>
                                    <tr>
                                        <td>content</td>
                                        <td>null</td>
                                        <td>The content of the tooltip, can be text, html or whatever you want</td>
                                    </tr>
                                    <tr>
                                        <td>ajaxContentUrl</td>
                                        <td>null</td>
                                        <td>Url for Ajax content</td>
                                    </tr>
                                    <tr>
                                        <td>ajaxContentBuffer</td>
                                        <td>0</td>
                                        <td>Buffer timer for Ajax content</td>
                                    </tr>
                                    <tr>
                                        <td>contentElementId</td>
                                        <td>null</td>
                                        <td>Normally used for picking template scripts</td>
                                    </tr>
                                    <tr>
                                        <td>useTitle</td>
                                        <td>false</td>
                                        <td>To use the default title attribute as content (true, false)</td>
                                    </tr>
                                    <tr>
                                        <td>templateEngineFunc</td>
                                        <td>null</td>
                                        <td>A function that compiles and renders the content</td>
                                    </tr>
                                    <tr>
                                        <td>onBeforeShow</td>
                                        <td>function(){}</td>
                                        <td>Function to be executed before tipso is shown</td>
                                    </tr>
                                    <tr>
                                        <td>onShow</td>
                                        <td>function(){}</td>
                                        <td>Function to be executed after tipso is shown</td>
                                    </tr>
                                    <tr>
                                        <td>onHide</td>
                                        <td>function(){}</td>
                                        <td>Function to be executed after tipso is hidden</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>

@endsection