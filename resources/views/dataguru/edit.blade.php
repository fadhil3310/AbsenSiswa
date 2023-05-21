@extends('index')
@section('konten')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between">
        <h1 class="mt-4">Ubah Data Guru</h1>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data Guru</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
        <form class="form-horizontal" action="{{ url('dataguru/'.$guru->nuptk) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nuptk" id="nuptk" value="{{$guru->nuptk}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="{{$guru->nama}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                            <select id="kode_jurusan" name='kode_jurusan'>
                            @foreach ($jurusan as $item)
                                <option value="{{ $item->kode_jurusan }}">{{ $item->jurusan }} ({{ $item->kode_jurusan }})</option>
                            @endforeach
                            </select>
                        </div>
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
