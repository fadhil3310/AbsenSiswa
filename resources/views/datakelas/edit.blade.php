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
                                <h5 class="card-title">Edit Data Guru</h5>

                                <!-- Horizontal Form -->
                                <form class="form-horizontal" action="{{ url('datakelas/' . $kelas->kode_kelas) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="kode_kelas" class="col-sm-2 col-form-label">Kode kelas</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kode_kelas" name="kode_kelas"
                                                value="{{ old('kode_kelas', $kelas->kode_kelas) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="kelas" name="kelas"
                                                value="{{ old('kelas', $kelas->kelas) }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                                        <div class="col-sm-10">
                                            <select id="nuptk" value="{{ old('nuptk', $kelas->nuptk) }}"" name='nuptk'>
                                                @foreach ($guru as $item)
                                                    <option value="{{ $item->nuptk }}">
                                                        {{ $item->nuptk }} ({{ $item->nama }})
                                                    </option>
                                                @endforeach
                                            </select>
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
