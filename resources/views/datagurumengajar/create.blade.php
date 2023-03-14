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
                    <h5 class="card-title">Guru Mengajar</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('jeniss') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">id Mengajar</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Kode mapel</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Hari ke-</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_jurusan" class="col-sm-2 col-form-label">Jam ke-</label>
                            <div class="col-sm-10">
                            <select id="kode_jurusan" name='kode_jurusan'>
                            @foreach ($guru_mengajar as $item)
                                <option value="{{ $item->nip }}">
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