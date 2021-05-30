@extends('layouts.user_default')

@section('content')
<section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>List Sampah</h2>
        <p>Berikut adalah list sampah yang sudah tersetor</p>
      </div>

      <div class="row">
          {{-- @foreach ($items ?? ''->where('is_approved', '1') as $item)--}}
          @foreach($items ?? '' as $item)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3" style="display: flex; justify-content: center">

            <div class="card mt-4" style="width: 17rem;">
                <div class="listing__item">
                    <div class="listing__item">{{ $item->terbeli ? 'Terbeli' : 'Tersedia'  }}</div>
                </div>
                <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between">
                    <div>
                        <h4 class="card-title">{{ $item->jenis_sampah }}</h4>
                        <hr/>
                        <h6 class="card-title">{{ $item->jumlah_sampah }}</h6>

                        <p class="card-text" style="font-size: 13px">{{ $item->alamat }}</p>
                    </div>
                    <a href="{{route('user.show',$item->id)}}" class="listing__item__text__info__right">
                    Lihat Detail
                </a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
</section>
  @endsection

