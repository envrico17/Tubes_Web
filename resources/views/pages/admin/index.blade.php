@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Sampah</h1>
      <a href="{{ route('admin.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Sampah</a>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">Tabel Data Sampah</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode Sampah</th>
                <th>Jenis Sampah</th>
                <th>Nama Penyetor</th>
                <th>Jumlah Sampah</th>
                <th>Status</th>
                <th>Alamat</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($item as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $item->kode_sampah}}</td>
                  <td>{{ $item->jenis_sampah }}</td>
                  <td>{{ $item->nama_penyetor }}</td>
                  <td>{{ $item->jumlah_sampah}}</td>
                  <td>{{ $item->terbeli ? 'Sudah dibeli' : 'Belum dibeli' }}</td>
                  <td>{{ $item->alamat}}</td>
                  <td>
                    <div class="row justify-content-center">
                      <a href="{{ route('admin.edit',$item->id)}}" class="btn btn-info mx-3"><i class="fas fa-pencil-alt"
                          aria-hidden="true"></i>
                      </a>

                      <form action="{{route('admin.destroy',['item'=>$item->id])}}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
@endsection
