
@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Sampah</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Tambah Data Sampah</h6>
    </div>
    <div class="card-body">
        <form class="col-lg-9" method="POST" action="{{ route('admin.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="kode_sampah">Kode Sampah</label>
                <input type="text" id="kode_sampah"name="kode_sampah" value="{{ old('kode_sampah') }}" class="form-control" placeholder="Isi Kode Sampah">@error('kode_sampah') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jenis_sampah" class="form-control-label">Jenis Sampah</label><br/>
                <label>
                    <input type="radio" name="jenis_sampah" value="Plastik" class="form-control @error('jenis_sampah') is-invalid @enderror"/> Plastik
                </label>&nbsp;
                <label>
                    <input type="radio" name="jenis_sampah" value="Organik" class="form-control @error('jenis_sampah') is-invalid @enderror" /> Organik
                </label>
                @error('jenis_sampah') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="ras">Nama Penyetor</label>
                <input type="text" id="nama_penyetor"name="nama_penyetor" value="{{ old('nama_penyetor') }}" class="form-control" placeholder="Isi Nama Anda">@error('nama_penyetor') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jumlah_sampah">Jumlah Sampah (Kg)</label>
                <input type="text" id="jumlah_sampah"name="jumlah_sampah" value="{{ old('jumlah_sampah') }}" class="form-control" placeholder="Isi Jumlah Sampah yang Anda Setor">@error('jumlah_sampah') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="5"placeholder="Tuliskan alamat">
                </textarea>
            </div>
            <button type="submit" class="primary-btn float-right">Simpan</button>
        </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
