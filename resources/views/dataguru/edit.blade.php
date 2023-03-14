@extends('main')
@section('title','Cpanel')
@section('breadcrumb')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('./') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
    <div class="col-lg-12">
        <div class="row">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Guru</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('guru/' . $jenis->nuptk)  }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-3">
                            <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nuptk" id="nuptk" value="{{ old('nuptk', $jenis->nuptk) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_barang" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $jenis->jenis_barang) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_barang" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $jenis->jenis_barang) }}">
                            </div>
                        </div>
                            <div class="row mb-3">
                            <label for="jenis_barang" class="col-sm-2 col-form-label">Mapel</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $jenis->jenis_barang) }}">

                        <div class="text-center">
                            <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
@endsection
