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
                    <h5 class="card-title">Tambah Data Guru</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('jeniss') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">NUPTK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Alamat Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Jabatan Guru</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                            <select id="kode_jurusan" name='kode_jurusan'>
                            @foreach ($jurusan as $item)
                                <option value="{{ $item->kode_jurusan }}">
                            @endforeach
                            </select>
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