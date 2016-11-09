<div id="main-menu" class="main-menu">
    <div class="main-menu-profile-row">
        <div class="main-menu-profile-img">
            <a href="/"><img src="{{ asset('images/users/1.png') }}" alt=""></a>
        </div>
        <div class="main-menu-profile-info">
            <h5 class="title"><a href="/">Laravel+ Admin</a></h5>
            <p class="role">Hardcore Developer</p>
        </div>
    </div>
    <div class="main-menu-links-row">
        <ul id="main-menu" class="main-menu perform-menu">
            <li class="{{ adminMenuClass('dashboard', $path) }}">
                <a href="{{ route('admin', 'dashboard') }}">
                    <i class="mdi mdi-view-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="{{ adminMenuClass('typography', $path) }}">
                <a href="{{ route('admin', 'typography') }}">
                    <i class="mdi mdi-format-text"></i> Typography
                </a>
            </li>
            <li class="{{ adminMenuClass('buttons', $path) }}"><a href="{{ route('admin', 'buttons') }}"><i class="mdi mdi-code-braces"></i> Buttons</a></li>
            <li class="{{ adminMenuClass('font-icons', $path) }}"><a href="{{ route('admin', 'font-icons') }}"><i class="mdi mdi-send"></i> Font Icons</a></li>
            <li class="{{ adminMenuClass('tabs', $path) }}"><a href="{{ route('admin', 'tabs') }}"><i class="mdi mdi-dns"></i> Tabs</a></li>
            <li class="{{ adminMenuClass('accordion', $path) }}"><a href="{{ route('admin', 'accordion') }}"><i class="mdi mdi-view-day"></i> Accordion</a></li>
            <li class="{{ adminMenuClass('modal', $path) }}"><a href="{{ route('admin', 'modal') }}"><i class="mdi mdi-watermark"></i> Modal</a></li>
            <li class="{{ adminMenuClass('alert', $path) }}"><a href="{{ route('admin', 'alert') }}"><i class="mdi mdi-information-outline"></i> Alert</a></li>
            <li class="{{ adminMenuClass('tooltip', $path) }}"><a href="{{ route('admin', 'tooltip') }}"><i class="mdi mdi-message-outline"></i> Tooltip</a></li>
            <li class="{{ adminMenuClass('table', $path) }}"><a href="{{ route('admin', 'table') }}"><i class="mdi mdi-table"></i> Table</a></li>
            <li class="{{ adminMenuClass('form-elements', $path) }}"><a href="{{ route('admin', 'form-elements') }}"><i class="fa fa-edit"></i> Forms</a></li>
            <li class="{{ adminMenuClass('grid', $path) }}"><a href="{{ route('admin', 'grid') }}"><i class="mdi mdi-grid"></i> Grid</a></li>
            <li class="{{ adminMenuClass('login', $path) }}"><a href="{{ route('admin', 'login') }}"><i class="mdi mdi-tune-vertical"></i> Login</a></li>
            <li class="{{ adminMenuClass('register', $path) }}"><a href="{{ route('admin', 'register') }}"><i class="mdi mdi-tune-vertical"></i> Register</a></li>
            <li>
            <li class="{{ adminMenuClass('404', $path) }}"><a href="{{ route('admin', '404') }}"><i class="mdi mdi-tune-vertical"></i> 404</a></li>
            <li>
                <a><i class="mdi mdi-home"></i> Multilevel one <i class="dropdown-icon"></i></a>
                <ul>
                    <li><a href="">Level 1</a></li>
                    <li>
                        <a href="">Level 1 - with submenu</a>
                        <ul>
                            <li><a href="">Level 2</a></li>
                            <li>
                                <a href="">Level 2 - with submenu</a>
                                <ul>
                                    <li><a href="">Level 3</a></li>
                                    <li><a href="">Level 3</a></li>
                                    <li><a href="">Level 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="">Level 1</a></li>
                </ul>
            </li>
            <li>
                <a><i class="mdi mdi-home"></i> Multilevel two<i class="dropdown-icon"></i></a>
                <ul>
                    <li><a href="">Level 1</a></li>
                    <li>
                        <a href="">Level 1 - with submenu</a>
                        <ul>
                            <li><a href="">Level 2</a></li>
                            <li>
                                <a href="">Level 2 - with submenu</a>
                                <ul>
                                    <li><a href="">Level 3</a></li>
                                    <li><a href="">Level 3</a></li>
                                    <li><a href="">Level 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=""><a href="/">Level 1</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>