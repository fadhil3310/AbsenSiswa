<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = DB::table('kurikulum')->get();
        return view('datakurikulum.index', compact('kurikulum'));
    }

    public function mapel_detail(Request $request) {
        $jumlahJam = DB::table('kurikulum')->select('jumlah_jam')->where('kode_mapel', $request->kode_mapel)->first()->jumlah_jam;
        return response()->json(['jumlah_jam' => $jumlahJam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = DB::table('jurusan')->get();
        return view('datakurikulum.create', compact('jurusan'));
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
            DB::table('kurikulum')->insert([
                'kode_kurikulum' => $request->kode_kurikulum,
                'kode_jurusan' => $request->kode_jurusan,
                'kode_mapel' => $request->kode_mapel,
                'jumlah_jam' => $request->jumlah_jam,
            ]);
            return redirect('datakurikulum')->with('status', 'Data berhasil ditambah..');
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
    public function edit($kode_kurikulum)
    {
        $kurikulum = DB::table('kurikulum')->where('kode_kurikulum', $kode_kurikulum)->first();
        $jurusan = DB::table('jurusan')->get();
        return view('datakurikulum.edit', compact('kurikulum','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $kode_kurikulum)
    {
        $kurikulum = DB::table('kurikulum')->where('kode_kurikulum', $kode_kurikulum)->update([
            'kode_jurusan' => $request->kode_kurikulum,
            'kode_mapel' => $request->kode_mapel,
            'jumlah_jam' => $request->jumlah_jam,
        ]);
        return redirect('datakurikulum')->with('status', 'Data berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_kurikulum)
    {
        $kurikulum = DB::table('kurikulum')->where('kode_kurikulum', $kode_kurikulum)->delete();
        return redirect('datakelas')->with('status', 'Data berhasil dihapus..');
    }
}
