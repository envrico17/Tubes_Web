<header id="header" id="home" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="">MAKIDAH</a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto " href="#setorsampah">Setor Sampah</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#callUs">Hubungi Kami</a></li>
          @guest
          <li><a class="nav-link scrollto" href="{{ url('login')}}">Login</a></li>
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
                            <a class="nav-link scrollto" href="{{ route('logout') }}">
                                Log out
                            </a>
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
