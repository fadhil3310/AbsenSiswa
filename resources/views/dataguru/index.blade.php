@extends('index')
@section('konten')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class=" bg-dark breadcrumb">
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

            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <a href="./index.php?aksi=Components&xaksi=Jenis Barang">
                    <h5 class="card-title">Data Guru</span></h5>
                </td>
                <td>
                  <div align="right">
                    <!--a href="./index.php?aksi=Components&xaksi=Jenis Barang&yaksi=8"  class="btn btn-primary btn-sm"  role="button" aria-disabled="true">
                      <span class="fa fa-file-pdf-o">Cetak Data</span>
                    </a-->
                    <a href="{{ url('dataguru/create') }}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-print"></span>Tambah</a>
                  </div>
                </td>
              </tr>
            </table>
            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NUPTK</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">kode_jurusan</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($guru as $item)
                <tr>
                  <td>{{$loop -> iteration}}</td>
                  <td>{{$item -> nuptk}}</td>
                  <td>{{$item -> nama}}</td>
                  <td>{{$item -> kode_jurusan}}</td>
                  <td>
                    <form action="{{ url('dataguru/' . $item->nuptk)}}" method="POST" class="d-inline"
                      onsubmit="return confirm('Yakin Anda Akan Hapus Data')">
                      @method('delete')
                      @csrf
                      <button class="btn btn-sucess btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                  <td>
                    <a href="{{ url('dataguru/' . $item->nuptk . '/edit') }}" class="text-primary">
                        <i class="bi bi-pen"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>

          </div>

        </div>
    </div>
    </div>
  </section>
</main><!-- End #main -->
@endsection
