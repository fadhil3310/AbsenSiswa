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

        <style>
            .mengajar {
                position: relative;
            }
            .mengajar-popup {
                position: absolute;
                top: 100%;
                display: none;

                background: white;
                box-shadow: 0 2px 2px black;
                border-radius: 4px;d
            }
            .mengajar-popup.show {
                display: block;
            }
        </style>

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
                                            <h5 class="card-title">Data Guru Mengajar</span></h5>
                                    </td>
                                    <td>
                                        <div align="right">
                                            <!--a href="./index.php?aksi=Components&xaksi=Jenis Barang&yaksi=8"  class="btn btn-primary btn-sm"  role="button" aria-disabled="true">
                              <span class="fa fa-file-pdf-o">Cetak Data</span>
                            </a-->
                                            <a href="{{ url('datagurumengajar/create') }}"
                                                class="btn btn-success btn-sm"><span
                                                    class="glyphicon glyphicon-print"></span>Tambah</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Jam ke</th>
                                        <th scope="col">Senin</th>
                                        <th scope="col">Selasa</th>
                                        <th scope="col">Rabu</th>
                                        <th scope="col">Kamis</th>
                                        <th scope="col">Jumat</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">

                                </tbody>

                                <script>
                                    const tableBody = document.querySelector('#table-body')

                                    for(let jamKe = 1; jamKe <= 12; jamKe++) {
                                        const tr = document.createElement('tr')

                                        const tdJamKe = document.createElement('td')
                                        tdJamKe.innerText = jamKe
                                        tr.appendChild(tdJamKe)

                                        for (let hari = 1; hari <= 5; hari++) {
                                            const td = document.createElement('td')
                                            td.setAttribute('id', `${hari}-${jamKe}`)
                                            td.classList.add('mengajar')
                                            tr.appendChild(td)
                                        }

                                        tableBody.appendChild(tr)
                                    }



                                    function getData() {
                                        const req1 = new XMLHttpRequest()
                                        req1.open('GET', "/getdatagurumengajar", false)
                                        req1.send(null)

                                        if (req1.status == 200) {
                                            const result = JSON.parse(req1.responseText)
                                            const data = result['guru_mengajar']

                                            data.forEach(element => {
                                                console.log(element)
                                                const nuptk = element['nuptk']
                                                const hari = element['hari']
                                                const jamKe = element['jam_ke']
                                                const kodeMapel = element['kode_mapel']

                                                const req2 = new XMLHttpRequest()
                                                req2.open('GET', "/gurudetail?nuptk=" + nuptk, false)
                                                req2.send(null)

                                                const namaGuru = req2.responseText

                                                console.log(hari, jamKe)

                                                const tr = document.getElementById(`${hari}-${jamKe}`)

                                                const popup = document.createElement('div')
                                                popup.classList.add('mengajar-popup')
                                                popup.innerHTML = "Pengajar: " + namaGuru + "<br>NUPTK: " + nuptk

                                                tr.addEventListener('mouseenter', _ => {
                                                    popup.classList.add('show')
                                                })
                                                tr.addEventListener('mouseleave', _ => {
                                                    popup.classList.remove('show')
                                                })

                                                tr.innerText = kodeMapel
                                                tr.appendChild(popup)
                                            });
                                        }
                                    }

                                    getData()

                                </script>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
