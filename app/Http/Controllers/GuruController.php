<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = DB::table('guru')->get();
        return view('dataguru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = DB::table('jurusan')->get();
        return view('dataguru.create', compact('jurusan'));
    }

    public function guru_detail(Request $request) {
        $nama = DB::table('guru')->select('nama')->where('nuptk', $request->nuptk)->first()->nama;
        return response($nama);
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
            DB::table('guru')->insert([
                'nuptk' => $request->nuptk,
                'nama' => $request->nama,
                'kode_jurusan' => $request->kode_jurusan,
            ]);
            return redirect('dataguru')->with('status', 'Jenis Barang berhasil ditambah..');
        }
        catch (\Illuminate\Database\QueryException $ex) {
            echo "Gagal ditambah " . $ex;
            exit();
            //return redirect('dataguru')->with('status', 'Jenis Barang gagal ditambah..');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($nuptk)
    {
        $guru = DB::table('guru')->where('nuptk', $nuptk)->first();
        $jurusan = DB::table('jurusan')->get();
        return view('dataguru.edit', compact('guru','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guru)
    {
        $guru = DB::table('guru')->where('nuptk', $guru)->update([
            'nama' => $request->nama,
            'kode_jurusan' => $request->kode_jurusan
        ]);
        return redirect('dataguru')->with('status', 'Jenis Barang berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($nuptk)
    {
        $guru = DB::table('guru')->where('nuptk', $nuptk)->delete();
        return redirect('dataguru')->with('status', 'Jenis Barang berhasil dihapus..');
    }
}
