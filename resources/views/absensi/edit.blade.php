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
                    <h5 class="card-title">Edit Data Siswa</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('datasiswa/' . $siswa->nis)  }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-3">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nis" id="nis" value="{{ old('nis', $siswa->nis) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $siswa->nama) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_kelas" class="col-sm-2 col-form-label">Kode kelas</label>
                            <div class="col-sm-10">
                                <select id="kode_kelas" name='kode_kelas' class='form-select'>
                                    @foreach ($kelas as $item)
                                    <option value="{{ $item->kode_kelas }}">{{ $item->kelas }} ({{ $item->kode_kelas }})</option>
                                    @endforeach
                                </select>
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
