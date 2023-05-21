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
                    <h5 class="card-title">Edit Data Guru Mengajar</h5>

                    <!-- Horizontal Form -->
                    <form class="form-horizontal" action="{{ url('datagurumengajar/' . $guru_mengajar->kode_mengajar)  }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="row mb-3">
                            <label for="kode_mengajar" class="col-sm-2 col-form-label">Kode Mengajar</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="kode_mengajar" id="kode_mengajar" value="{{ old('kode_mengajar', $guru_mengajar->kode_mengajar) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                            <div class="col-sm-10">
                                <select id="nuptk" name='nuptk' value="{{ old('nuptk', $guru_mengajar->nuptk) }}">
                                @foreach ($guru as $item)
                                    <option value="{{ $item->nuptk }}">{{ $item->nuptk }} ({{ $item->nama }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <select id="kode_kelas" name='kode_kelas' value="{{ old('kode_kelas', $guru_mengajar->kode_kelas) }}">
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->kode_kelas }}">{{ $item->kode_kelas }} ({{ $item->kelas }})</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kode_mapel" class="col-sm-2 col-form-label">Mapel</label>
                            <div class="col-sm-10">
                                <select id="kode_mapel" name='kode_mapel' value="{{ old('kode_mapel', $guru_mengajar->kode_mapel) }}">
                                @foreach ($kurikulum as $item)
                                    <option value="{{ $item->kode_mapel }}">{{ $item->kode_mapel }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                            <div class="col-sm-10">
                                <select id="hari" name='hari' value="{{ old('hari', $guru_mengajar->hari) }}">
                                    <option value="1">Senin</option>
                                    <option value="2">Selasa</option>
                                    <option value="3">Rabu</option>
                                    <option value="4">Kamis</option>
                                    <option value="5">Jumat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jam_ke" class="col-sm-2 col-form-label">Jam ke-</label>
                            <div class="col-sm-10">
                                <select id="jam_ke" name='jam_ke' value="{{ old('jam_ke', $guru_mengajar->jam_ke) }}">
                                </select>
                            </div>
                        </div>
                        <script>
                            const jamKeDropdown = document.querySelector('#jam_ke');
                            const kodeMapelDropdown = document.querySelector('#kode_mapel');

                            kodeMapelDropdown.addEventListener('change', _ => {
                                getMapelDetail(kodeMapelDropdown.value)
                            })

                            getMapelDetail(kodeMapelDropdown.value)

                            function getMapelDetail(kodeMapel) {
                                const req = new XMLHttpRequest()
                                req.open('GET', "/mapeldetail?kode_mapel=" + kodeMapel)
                                req.send()
                                req.addEventListener('load', _ => {
                                    const result = JSON.parse(req.responseText)
                                    const jumlahJam = result['jumlah_jam']

                                    jamKeDropdown.innerHTML = ""

                                    for (let i = 1; i <= jumlahJam; i++) {
                                        const option = document.createElement('option')
                                        option.innerText = i
                                        jamKeDropdown.appendChild(option)
                                    }
                                })
                            }

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
