<div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="nav-wrapper-03 w-nav">
    <div class="nav-inner">
        <a href="{{ url('/') }}" class="brand-link w-nav-brand"><img
                src={{ asset('images/logo-transparent.png') }} loading="lazy" height="" sizes="120.03125px"
                srcset="../images/logo-transparent-p-500.png 500w, ../images/logo-transparent-p-800.png 800w, ../images/logo-transparent-p-1080.png 1080w, ../images/logo-transparent-p-1600.png 1600w, ../images/logo-transparent.png 1890w"
                alt="" class="nav-logo"></a>
        <div class="div-block-106"></div>

        <nav role="navigation" class="nav-menu-2 w-nav-menu">

            <a href="{{ url('/howitworks') }}" class="nav-link-4 w-nav-link">{{ __('home.navbar.how') }}</a>
            <a href="{{ url('/publishoffer') }}" class="nav-link-4 w-nav-link">{{ __('home.navbar.post') }}</a>
            <a href="{{ url('/contactus') }}" class="nav-link-4 w-nav-link">{{ __('home.navbar.contact') }}</a>
            @guest
                <a href="{{ url('/login') }}" class="nav-link-4 hide w-nav-link">{{ __('home.navbar.signin') }}</a>
                <a href="{{ url('/signup') }}" class="nav-link-4 hide w-nav-link">{{ __('home.navbar.signup') }}</a>
            @endguest

            @auth
                <div data-hover="1" data-delay="0" class="nav-link-4 dropdown w-dropdown">
                    <div class="dropdown-toggle-4 w-dropdown-toggle">
                        <div class="w-icon-dropdown-toggle"></div>
                        <div>Mon Compte</div>
                    </div>
                    <nav class="dropdown-list-4 w-dropdown-list">
                        <a href="{{ url('/publishoffer') }}" class="nav-link-4 w-dropdown-link">{{ __('home.navbar.post') }}</a>
                        <a href="{{ url('/myoffers') }}" class="nav-link-4 w-dropdown-link">{{ __('home.navbar.my_offers') }}</a>
                        <a href="{{ url('/mybuyings') }}" class="nav-link-4 w-dropdown-link">{{ __('home.navbar.my_buyings') }}</a>
                        <a href="{{ url('/profile') }}" class="nav-link-4 w-dropdown-link">{{ __('home.navbar.profile') }}</a>
                        <a href="{{ route('logout') }}" class="nav-link-4 w-dropdown-link" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">{{ __('home.navbar.logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </nav>
                </div>
            @endauth
            <div data-hover="1" data-delay="0" class="nav-link-4 dropdown w-dropdown">
                <div class="dropdown-toggle-4 w-dropdown-toggle">
                    <div class="w-icon-dropdown-toggle"></div>
                    <div>USD ($)</div>
                </div>
                <nav class="dropdown-list-4 w-dropdown-list">
                    <a href="{{ url('/') }}" class="nav-link-4 w-dropdown-link">Euro</a>
                    <a href="{{ url('/') }}" class="nav-link-4 w-dropdown-link">XFO</a>
                </nav>
            </div>
        </nav>
        <div data-w-id="f9c21240-ca0d-0a21-7c0d-c58b86bc4050" class="menu-button-2 w-nav-button">
            <div data-w-id="f9c21240-ca0d-0a21-7c0d-c58b86bc4051" data-animation-type="lottie"
                data-src="https://uploads-ssl.webflow.com/6107be18bbcb44f98a1783de/6107c32777680c4447fd0206_70006-hamburger-menu-icon.json"
                data-loop="0" data-direction="1" data-autoplay="0" data-is-ix2-target="1" data-renderer="svg"
                data-default-duration="2" data-duration="0" class="hamburger"></div>
        </div>
        @guest
            <a href="{{ url('/login') }}" class="nav-btn w-button">{{ __('home.navbar.signin') }}</a>
            <a href="{{ url('/signup') }}" class="nav-btn w-button">{{ __('home.navbar.signup') }}</a>
        @endguest

        @auth
            <div data-hover="" data-delay="0" class="dropdown-3 w-dropdown">
                <div class="nav-btn nav-dropdown w-dropdown-toggle">
                    <div class="icon-6 w-icon-dropdown-toggle"></div>
                    <div>Mon compte</div>
                </div>

                <nav class="dropdown-list-3 w-dropdown-list">
                    <a href="{{ url('/publishoffer') }}" class="w-dropdown-link">{{ __('home.navbar.post') }}</a>
                    <a href="{{ url('/myoffers') }}" class="w-dropdown-link">{{ __('home.navbar.my_offers') }}</a>
                    <a href="{{ url('/mybuyings') }}" class="w-dropdown-link">{{ __('home.navbar.my_buyings') }}</a>
                    <a href="{{ url('/profile') }}" class="w-dropdown-link">{{ __('home.navbar.profile') }}</a>
                    <a href="{{ route('logout') }}" class="nav-link-4 w-dropdown-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('home.navbar.logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </nav>

            </div>
        @endauth
        {{-- <form id="locale-form" action="{{ url('/locale') }}" method="POST">
            {{ csrf_field() }}
            <select class="form-control" id="locale-select" name="locale" onchange="event.preventDefault(); document.getElementById('locale-form').submit();">
                <option value="fr" selected>Français</option>
                <option value="en">Anglais</option>
            </select>
        </form> --}}
        <div data-hover="" data-delay="0" class="dropdown-4 w-dropdown">
            <div class="nav-btn nav-dropdown w-dropdown-toggle">
                <div class="icon-6 w-icon-dropdown-toggle"></div>
                <div>Français</div>
            </div>
            <nav class="dropdown-list-3 w-dropdown-list">
                <a href="#" class="w-dropdown-link">Anglais</a>
                <a href="#" class="w-dropdown-link">Français</a>
            </nav>
        </div>
        <div data-hover="" data-delay="0" class="dropdown-4 w-dropdown">
            <div class="nav-btn nav-dropdown w-dropdown-toggle">
                <div class="icon-6 w-icon-dropdown-toggle"></div>
                <div>EUR (€)</div>
            </div>
            <nav class="dropdown-list-3 w-dropdown-list">
                <a href="#" class="w-dropdown-link">EUR (€)</a>
                <a href="#" class="w-dropdown-link">FCFA (XOF)</a>
                <a href="#" class="w-dropdown-link">USD ($)</a>
            </nav>
        </div>
    </div>
</div>
