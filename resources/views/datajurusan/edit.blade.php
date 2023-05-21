@extends('index')
@section('konten')

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
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Edit Data Guru</h5>

                <!-- Horizontal Form -->
                <form class="form-horizontal" action="{{ url('datajurusan/' . $jurusan->kode_jurusan)  }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row mb-3">
                        <label for="kode_jurusan" class="col-sm-2 col-form-label">Kode Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode_jurusan" id="kode_jurusan" value="{{ old('kode_jurusan', $jurusan->kode_jurusan) }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan', $jurusan->jurusan) }}">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->
@endsection
