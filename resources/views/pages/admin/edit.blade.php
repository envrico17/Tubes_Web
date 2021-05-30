@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Data</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Edit Data</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.update', $item->id)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        {{-- jenis_sampah --}}
        <div class="form-group">
          <label for="kode_sampah">Kode Sampah</label>
          <input type="text" name="kode_sampah" value="{{ old('kode_sampah') ? old('kode_sampah') : $item->kode_sampah}}"
              class="form-control @error('kode_sampah') is-invalid  @enderror" id=" kode_sampah"
              placeholder="Masukkan Jenis Sampah" required>
          @error('kode_sampah') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="jenis_sampah" class="form-control-label">Jenis Sampah</label>

            <br />

            <label>
                <input {{ $item->jenis_sampah == "Plastik" ? "checked" : "" }} type="radio" name="jenis_sampah" value="Plastik"
                    class="form-control @error('jenis_sampah') is-invalid @enderror" /> Plastik
            </label>

            &nbsp;

            <label>
                <input {{ $item->jenis_sampah == "Organik" ? "checked" : "" }} type="radio" name="jenis_sampah" value="Organik"
                    class="form-control @error('jenis_sampah') is-invalid @enderror" /> Organik
            </label>
            @error('jenis_sampah') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        {{-- jenis_sampah--}}
        <div class="form-group">
            <label for="nama_penyetor">Kode Hewan</label>
            <input type="text" name="nama_penyetor" value="{{ old('nama_penyetor') ? old('nama_penyetor') : $item->nama_penyetor}}"
                class="form-control @error('nama_penyetor') is-invalid  @enderror" id=" nama_penyetor"
                placeholder="Masukkan Jenis Sampah" required>
            @error('nama_penyetor') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="jumlah_sampah">Kode Hewan</label>
            <input type="text" name="jumlah_sampah" value="{{ old('jumlah_sampah') ? old('jumlah_sampah') : $item->jumlah_sampah}}"
                class="form-control @error('jumlah_sampah') is-invalid  @enderror" id=" jumlah_sampah"
                placeholder="Masukkan Jenis Sampah" required>
            @error('jumlah_sampah') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat') ? old('alamat') : $item->alamat}}"
                class="form-control @error('alamat') is-invalid  @enderror" id=" alamat"
                placeholder="Masukkan Jenis Kucing" required>
            @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        {{-- terbeli --}}

        <div class="form-group">
          <label for="terbeli" class="form-control-label">Terbeli</label>

          <br />

          <label>
              <input {{ $item->terbeli == "1" ? "checked" : "" }} type="radio" name="terbeli" value="1"
                  class="form-control @error('terbeli') is-invalid @enderror" /> Sudah
          </label>

          &nbsp;

          <label>
              <input {{ $item->terbeli == "0" ? "checked" : "" }} type="radio" name="terbeli" value="0"
                  class="form-control @error('terbeli') is-invalid @enderror" /> Belum
          </label>
          @error('terbeli') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
          <button type="submit" class="mt-5 btn btn-primary btn-block">Submit</button>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
