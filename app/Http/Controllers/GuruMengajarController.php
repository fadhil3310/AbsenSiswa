<?php

namespace App\Http\Controllers;

use App\Models\GuruMengajar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruMengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru_mengajar = DB::table('guru_mengajar')->get();
        return view('datagurumengajar.index', compact('guru_mengajar'));
    }

    public function get_data() {
        $guru_mengajar = DB::table('guru_mengajar')->get();

        return response()->json(['guru_mengajar' => $guru_mengajar]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = DB::table('guru')->get();
        $kelas = DB::table('kelas')->get();
        $kurikulum = DB::table('kurikulum')->get();
        return view('datagurumengajar.create', compact('guru', 'kelas', 'kurikulum'));
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
            DB::table('guru_mengajar')->insert([
                'kode_mengajar' => $request->kode_mengajar,
                'nuptk' => $request->nuptk,
                'kode_kelas' => $request->kode_kelas,
                'kode_mapel' => $request->kode_mapel,
                'hari' => $request->hari,
                'jam_ke' => $request->jam_ke
            ]);
            return redirect('datagurumengajar')->with('status', 'Jenis Barang berhasil ditambah..');
        }
        catch (\Illuminate\Database\QueryException $ex) {
            echo "Gagal ditambah " . $ex;
            exit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function show(GuruMengajar $guruMengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_mengajar)
    {
        $guru_mengajar = DB::table('guru_mengajar')->where('kode_mengajar', $kode_mengajar)->first();
        $guru = DB::table('guru')->get();
        $kelas = DB::table('kelas')->get();
        $kurikulum = DB::table('kurikulum')->get();
        return view('datagurumengajar.edit', compact('guru_mengajar', 'guru', 'kelas', 'kurikulum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mengajar)
    {
        $guru_mengajar = DB::table('guru_mengajar')->where('kode_mengajar', $kode_mengajar)->update([
            'kode_mengajar' => $request->kode_mengajar,
            'nuptk' => $request->nuptk,
            'kode_kelas' => $request->kode_kelas,
            'kode_mapel' => $request->kode_mapel,
            'hari' => $request->hari,
            'jam_ke' => $request->jam_ke
        ]);
        return redirect('datagurumengajar')->with('status', 'Jenis Barang berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kode_mengajar)
    {
        $guru_mengajar = DB::table('guru_mengajar')->where('kode_mengajar', $kode_mengajar)->delete();
        return redirect('datagurumengajar')->with('status', 'Jenis Barang berhasil dihapus..');
    }
}
