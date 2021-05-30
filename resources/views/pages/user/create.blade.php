@extends('layouts.user_default')

@section('content')
<section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Setor Sampah</h2>
        <p>Setor Sampahmu dan jadi uang</p>
      </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama_penyetor" class="form-control" id="nama_penyetor" placeholder="Isi Nama Anda" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="jenis_sampah" id="jenis_sampah" placeholder="Jenis Sampah" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="jumlah_sampah" id="jumlah_sampah" placeholder="Jumlah Sampah" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat anda" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>
</section>
@endsection
