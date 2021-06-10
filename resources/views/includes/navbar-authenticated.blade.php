<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="/images/logo.svg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Rewards</a>
                </li>
                <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
              </li>
              <li class="nav-item">
                <a
                  href="{{ route('login') }}"
                  class="btn btn-success nav-link px-4 text-white"
                  >Sign In</a
                >
              </li>
            </ul>

            {{-- Desktop Menu --}}
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture">
                        Hi, Bangdik
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                        <a href="{{ route('dashboard-account') }}" class="drpdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('logout') }}">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block mt-2">
                        <img src="/images/icon-cart-empty.svg" alt="">
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Hi, Bangdik
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                        Cart
                    </a>
                </li>
            </ul>
        </div>
    </div> 
</nav>