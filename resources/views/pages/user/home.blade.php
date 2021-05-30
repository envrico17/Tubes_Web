@extends('layouts.user_default')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat datang di <span>Makidah</span></h1>
      <h2>Sebuah aplikasi website untuk membantu anda yang ingin membeli atau menjual sampah</h2>
      <a href="#setorsampah" class="btn-get-started scrollto">Setor Sampah</a>
      <a href="#belisampah" class="mt-3 btn-get-started scrollto">Beli Sampah</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="setorsampah" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>Apakah Anda Punya Sampah?</h2>
          <p>atau Anda Ingin Membeli Sampah?</p>
        </div>

        <section id="belisampah">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-cart-arrow-down"></i></div>
              <h4><a href="membeli-sampah">Beli Sampah</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="far fa-trash-alt"></i></div>
              <h4><a href="{{ route('user.create') }}">Setor Sampah</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
                <div class="icon"><i class="fas fa-list"></i></div>
              <h4><a href="list">List Sampah</a></h4>
              <p></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Tentang Kami</h3>
            <p>
              Makidah adalah sebuah aplikasi web untuk membantu anda yang ingin membeli atau menjual sampah serta membantu untuk menjaga lingkungan menjadi lebih baik.
            </p>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="fas fa-phone-square"></i>
                <h4>Phone :</h4>
                <p>082333236057</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="far fa-envelope"></i>
                <h4>Email</h4>
                <p>makidah@gmail.com</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
@endsection
