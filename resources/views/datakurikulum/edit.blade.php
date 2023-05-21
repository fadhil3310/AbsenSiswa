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
                    <div class="row">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Edit Data Kurikulum</h5>

                                <!-- Horizontal Form -->
                                <form class="form-horizontal"
                                    action="{{ url('datakurikulum/' . $kurikulum->kode_kurikulum) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="kode_kurikulum" class="col-sm-2 col-form-label">Kode kurikulum</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="kode_kurikulum"
                                                id="kode_kurikulum"
                                                value="{{ old('kode_kurikulum', $kurikulum->kode_kurikulum) }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kode_jurusan" class="col-sm-2 col-form-label">Kode jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kdoe_jurusan" name="kode_jurusan"
                                                value="{{ old('kode_jurusan', $kurikulum->kode_jurusan) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kode_mapel" class="col-sm-2 col-form-label">Kode Mapel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kode_mapel" name="kode_mapel"
                                                value="{{ old('kode_mapel', $kurikulum->kode_mapel) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jumlah_jam" class="col-sm-2 col-form-label">Jumlah Jam</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="jumlah_jam" name="jumlah_jam"
                                                value="{{ old('jumlah_jam', $kurikulum->jumlah_jam) }}">
                                        </div>
                                    </div>


                                    <div class="text-center">
                                        <button type="submit" id="simpan" name="simpan"
                                            class="btn btn-primary">Simpan</button>
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
