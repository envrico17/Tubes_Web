@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Detail Sampah</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" action="{{ route('user.terbeli', $item ?? ''->id)}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="first-name">Jenis Sampah</label>
                    <input
                    disabled
                        type="text"
                        name="jenis_sampah"
                        value="{{ $item ?? ''->jenis_sampah }}"
                        class="form-control"
                        placeholder="Jenis Sampah">
                </div>
                <div class="form-group">
                    <label for="jumlah_sampah">Jumlah Sampah</label>
                    <input
                    disabled
                        type="text"
                        name="jumlah_sampah"
                        value="{{ $item ?? ''->jumlah_sampah }}"
                        class="form-control"
                        placeholder="Jenis Hewan" id="jumlah_sampah">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input
                    disabled
                        type="text"
                        name="alamat"
                        value="{{ $item ?? ''->alamat }}"
                        class="form-control"
                        placeholder="alamat" id="alamat">
                </div>
                <div class="form-group">
                <label for="terbeli" class="form-control-label">Apakah anda akan membeli sampah ini? ?</label><br>
                <label>
                    <input {{ $item ?? ''->terbeli == "1" ? "checked" : "" }} type="radio" name="terbeli" value="1"
                    class="form-control" />Beli
                </label>
                {{-- <label>
                    <input {{ $item ?? ''->is_terbeli == "0" ? "checked" : "" }} type="radio" name="is_terbeli" value="0"
                        class="form-control @error('is_terbeli') is-invalid @enderror" /> Belum Terbeli
                </label> --}}
                    {{-- @error('is_terbeli') <div class="text-muted">{{ $message }}</div> @enderror --}}
                </div>



                <div style="display: flex; justify-content: flex-end">
                    <button style="padding: 5px 15px" type="submit" class="btn btn-outline-success">Beli</button>
                    <a href="/" class="btn adopt">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
