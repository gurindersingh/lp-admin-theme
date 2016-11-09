<div id="top-bar" class="top-bar">
    <div class="top-bar-logo-wrap">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo-150x40.png') }}" alt="Logo" class="big">
            <img src="{{ asset('images/logo-40x40.png') }}" alt="Logo" class="small">
        </a>
    </div>
    <ul class="top-nav pull-right-below-l">
        <li><a href="#" data-button="top-menu-search" data-container-id="top-menu-search"><i class="mdi mdi-magnify"></i></a></li>
        <li><a id="main-menu-toggle" href="/"><i class="mdi mdi-menu"></i></a></li>
    </ul>
    <div id="top-menu-search" class="top-bar-search">
        <div class="search-form clearfix">
            <form action="">
                <div class="input-group justify">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input name="s" type="search" class="form-control" placeholder="Search something...">
                    </div>
                    <div class="input-group search">
                        <button type="submit" class="button primary" data-dropdown="toggle-button">Search</button>
                    </div>
                    <div class="input-group close">
                        <a type="submit" class="close-search button primary p-0 plain" data-dropdown="toggle-button"><i class="mdi mdi-close"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
