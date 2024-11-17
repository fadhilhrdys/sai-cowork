<div class="navigation-bar">
    <div class="wrapper-mobile">
        <img src="{{ ('/img/logo-black-header.png') }}" alt="sai cowork">
        <div class="col-right">
            <a href="{{ '/login' }}" class="btn-login">Login</a>
            <button class="open-sidemenu"><img src="{{ ('/img/icon-sidemenu.png') }}"></button>
        </div>
    </div>
    <div class="wrapper-desktop">
        <div class="col-left">
            <a href="{{ '/' }}"><img src="{{ ('/img/logo-black-header.png') }}" alt="sai cowork"></a>
            <nav>
                <a href="{{ '/location' }}">Location</a>
                <a href="{{ '/gallery' }}">Gallery</a>
                <a href="{{ '/blog' }}">Blog</a>
            </nav>
        </div>
        <div class="col-right">
            <a href="{{ '/login' }}" class="btn-login">Login</a>
            <a href="{{ '/sign-up' }}" class="btn-sign-up">Sign up <img src="{{ ('/img/icon-sign-up.png') }}"></a>
        </div>
    </div>
</div>

<div class="side-menu-bar">
    <div class="wrapper">
        <div class="header">
            <img src="{{ ('/img/logo-black-header.png') }}" alt="sai cowork">
            <div class="col-right">
                <a href="{{ '/login' }}" class="btn-login">Login</a>
                <button class="close-sidemenu"><img src="{{ ('/img/icon-close.png') }}"></button>
            </div>
        </div>
        <nav>
            <a href="{{ '/location' }}">Location</a>
            <a href="{{ '/gallery' }}">Gallery</a>
            <a href="{{ '/blog' }}">Blog</a>
            <hr>
            <a href="{{ '/sign-up' }}" class="btn-sign-up">Sign up <img src="{{ ('/img/icon-sign-up.png') }}"></a>
        </nav>
    </div>
</div>