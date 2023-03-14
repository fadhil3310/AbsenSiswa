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
                    <h5 class="card-title">Edit Data Guru Mengajar</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('guru/' . $jenis->id mengajar)  }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-3">
                            <label for="id_mengajar" class="col-sm-2 col-form-label">Id Mengajar</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_mengajar" id="nuptk" value="{{ old('id_mengajar', $jenis->id_mengajar) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $jenis->nip) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ old('kelas', $kelas) }}">
                            </div>
                        </div>
                            <div class="row mb-3">
                            <label for="kode_mapel" class="col-sm-2 col-form-label">Kode Mapel</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" value="{{ old('kode_mapel', $jenis->kode_mapel) }}">
                        </div>
                            <div class="row mb-3">
                            <label for="hari" class="col-sm-2 col-form-label">Hari ke</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="hari" name="hari" value="{{ old('hari', $jenis->hari) }}">
                       </div>
                            <div class="row mb-3">
                            <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="jam" name="jam" value="{{ old('jam', $jenis->jam) }}">
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
