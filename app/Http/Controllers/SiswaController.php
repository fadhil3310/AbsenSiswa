<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = DB::table('siswa')->get();
        return view('datasiswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = DB::table('kelas')->get();
        return view('datasiswa.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::table('siswa')->insert([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'kode_kelas' => $request->kode_kelas
            ]);
            return redirect('datasiswa')->with('status', 'Jenis Barang berhasil ditambah..');
        }
        catch (\Illuminate\Database\QueryException $ex) {
            return redirect('datasiswa')->with('status', 'Jenis Barang gagal ditambah..');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $siswa = DB::table('siswa')->where('nis', $nis)->first();
        $kelas = DB::table('kelas')->get();
        return view('datasiswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenis)
    {
        $siswa = DB::table('siswa')->where('nis', $id_jenis)->update([
            'nama' => $request->nama,
            'kode_kelas' => $request->kode_kelas
        ]);
        return redirect('datasiswa')->with('status', 'Jenis Barang berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $siswa = DB::table('siswa')->where('nis', $nis)->delete();
        return redirect('datasiswa')->with('status', 'Jenis Barang berhasil dihapus..');
    }
}
