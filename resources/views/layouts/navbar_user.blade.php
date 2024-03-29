<nav class="navbar navbar-expand-lg">
    <div class="navbar-bg"></div>
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="https://i.imgur.com/ZbvY1Zl.png" alt="Dwelling Plans Logo" id="logo_pos"></a>
        <button class="navbar-tg d-block d-lg-none" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-label="Toggle navigation">
            <div class="top"></div>
            <div class="middle"></div>
            <div class="bottom"></div>
        </button>

        @if (Session::get('user_id'))
        <ul class="notification">
            <li class="nav-item me-2"><a href="#" class="nav-link">
                    <img src="img/icons/nav-bell-icon.svg" alt="bell icon"></a>
            </li>
            <li class="nav-item ms-2">
                <a href="/cart" class="nav-link">
                    <img src="img/icons/nav-cart-icon.svg" alt="cart icon">
                </a>
            </li>
        </ul>
        @endif

        <div class="collapse navbar-collapse justify-content-end me-3 text-center navbar-margin-top" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" id="nav_names">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="/product" id="nav_names">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about" tabindex="-1" id="nav_names">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('FAQ') ? 'active' : '' }}" href="/FAQ" tabindex="-1" id="nav_names">FAQ</a>
                </li>
            </ul>

            @if (Session::get('user_id'))
            <div class="right">
                <ul class="right-links profile-settings">
                    <li class="nav-item"><a href="" class="nav-link">Profile </a></li>
                    <li>
                        <div class="vertical-bar"></div>
                    </li>

                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link"> Logout</a></li>
                </ul>
            </div>

            <div class="greet">
                <h5>Hello</h5>
                <ul class="notify">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link"><img src="img/icons/nav-bell-icon.svg" alt="bell icon"></a>
                    </li>
                    <li class="nav-item ms-2"><a href="/cart" class="nav-link"><img src="img/icons/nav-cart-icon.svg" alt="cart icon" /></a></li>
                </ul>
            </div>

            <div class="dropdown profile-set">
                <button class="profile-pic" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://newprofilepic.photo-cdn.net//assets/images/article/profile.jpg?90af0c8" alt="Profile picture"></li>
                </button>
                <ul class="dropdown-menu text-center">
                    <!-- <h6> <b>FIRST NAME</b></h6> -->
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
            @else
            <div class="right second">
                <ul class="right-links login-settings">
                    <li class="nav-item"><a href="/login" class="nav-link">Login </a></li>
                    <li>
                        <div class="vertical-bar"></div>
                    </li>
                    <li class="nav-item"><a href="/login" class="nav-link"> Signup</a></li>
            </div>
            @endif

        </div>
    </div>
</nav>