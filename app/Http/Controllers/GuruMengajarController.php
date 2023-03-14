<?php

namespace App\Http\Controllers;

use App\Models\GuruMengajar;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(GuruMengajar $guruMengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuruMengajar $guruMengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuruMengajar  $guruMengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuruMengajar $guruMengajar)
    {
        //
    }
}
