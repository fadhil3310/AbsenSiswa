<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('datakelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = DB::table('guru')->get();
        return view('datakelas.create', compact('guru'));
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
            DB::table('kelas')->insert([
                'nuptk' => $request->nuptk,
                'kelas' => $request->kelas,
                'kode_kelas' => $request->kode_kelas,
            ]);
            return redirect('datakelas')->with('status', 'Data berhasil ditambah..');
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
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_kelas)
    {
        $kelas = DB::table('kelas')->where('kode_kelas', $kode_kelas)->first();
        $guru = DB::table('guru')->get();
        return view('datakelas.edit', compact('kelas','guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_kelas)
    {
        $kelas = DB::table('kelas')->where('kode_kelas', $kode_kelas)->update([
            'kelas' => $request->kelas,
            'nuptk' => $request->nuptk
        ]);
        return redirect('datakelas')->with('status', 'Jenis Barang berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_kelas)
    {
        $kode_kelas = DB::table('kelas')->where('kode_kelas', $kode_kelas)->delete();
        return redirect('datakelas')->with('status', 'Data berhasil dihapus..');
    }
}
