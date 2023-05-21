<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = DB::table('jurusan')->get();
        return view('datajurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datajurusan.create');
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
            DB::table('jurusan')->insert([
                'kode_jurusan' => $request->kode_jurusan,
                'jurusan' => $request->jurusan
            ]);
            return redirect('datajurusan')->with('status', 'Jenis Barang berhasil ditambah..');
        }
        catch (\Illuminate\Database\QueryException $ex) {
            echo "Gagal ditambah " . $ex;
            exit();
            //return redirect('datajurusan')->with('status', 'Jenis Barang gagal ditambah..');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_jurusan)
    {
        $jurusan = DB::table('jurusan')->where('kode_jurusan', $kode_jurusan)->first();
        return view('datajurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_jurusan)
    {
        $jurusan = DB::table('jurusan')->where('kode_jurusan', $kode_jurusan)->update([
            'kode_jurusan' => $request->kode_jurusan,
            'jurusan' => $request->jurusan
        ]);
        return redirect('datajurusan')->with('status', 'Jenis Barang berhasil diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_jurusan)
    {
        $jurusan = DB::table('jurusan')->where('kode_jurusan', $kode_jurusan)->delete();
        return redirect('datajurusan')->with('status', 'Jenis Barang berhasil dihapus..');
    }
}
