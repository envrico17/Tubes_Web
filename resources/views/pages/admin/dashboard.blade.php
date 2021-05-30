@extends('layouts.admin_default')


@section('content')
<div class="container-fluid" id="pageAdmin">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-1 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sampah Yang Terkumpul</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_sampah}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-recycle fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sampah Yang Belum Diambil</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sampah_belum_terbeli }}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-trash fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Sampah Yang Sudah Terambil</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sampah_terbeli }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-home fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->



  </div>
  <!-- /.container-fluid -->

</div>
@endsection
