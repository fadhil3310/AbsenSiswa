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
                    <h5 class="card-title">Tambah Data Kurikulum</h5>

                    <!-- Horizontal Form -->
                    <form id='form' class="form-horizontal" onsubmit="return validasi()" action="{{ url('datakurikulum') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="kode_kurikulum" class="col-sm-2 col-form-label">Kode Kurikulum</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode_kurikulum" id="kode_kurikulum">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_jurusan" class="col-sm-2 col-form-label">Kode Jurusan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode_jurusan" id="kode_jurusan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_mapel" class="col-sm-2 col-form-label">Kode Mapel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kode_mapel" id="kode_mapel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_jam" class="col-sm-2 col-form-label">Jumlah Jam</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="jumlah_jam" id="jumlah_jam">
                            </div>

                        </div>
                        <script>

                        </script>

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
