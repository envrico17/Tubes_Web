<header id="header" id="home" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="">MAKIDAH</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto " href="#setorsampah">Setor Sampah</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#callUs">Hubungi Kami</a></li>
          @guest
          <li><a class="nav-link scrollto" href="" onclick="event.preventDefault(); location.href='{{ url('login')}}';">Login</a></li>
          @endguest
            @auth
                        <!-- Desktop Button -->
                        <div class="d-flex">
                            <form class="form-inline" action="{{route('admin.index')}}" method="GET">
                                @csrf
                                <a class="nav-link scrollto" href="">
                                    Admin
                                </a>
                            </form>
                            <a class="nav-link scrollto" href="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Log out
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @endauth
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


{{-- <header id="header" id="home" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="">MAKIDAH</a></h1>
      </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Beranda</a></li>
                    <li><a href="#setorsampah">Setor Sampah </a></li>
                    <li><a href="#contactUs">Hubungi Kami</a></li>
                    <li><a href="#aboutUs">Tentang Kami</a></li>
                    <li>
                        @guest
                        <!-- Desktop Button -->
                        <form class="form-inline">
                            <button style="margin-top: -7px; color: white" class="btn btn-login btn-navbar-right" type="button"
                                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                                Login
                            </button>
                        </form>
                        @endguest

                        @auth
                        <!-- Desktop Button -->
                        <div class="d-flex">
                            <form class="form-inline" action="{{route('admin.index')}}" method="GET">
                                @csrf
                                <button style="margin-top: -7px; color: white" class="btn btn-login btn-navbar-right" type="submit">
                                    Admin
                                </button>
                            </form>
                            <button style="margin-top: -7px; color: white" class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Log out
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        @endauth
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header --> --}}
