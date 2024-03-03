<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table_pekerjaan = DB::table('table_pekerjaan')->get();

        return view('karyawan.pekerjaan.index', [
            'table_pekerjaan' => $table_pekerjaan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'peran' => 'required',
        ]);

        DB::table('table_pekerjaan')->insert([
            'nama' => $request['nama'],
            'jabatan' => $request['jabatan'],
            'peran' => $request['peran'],
        ]);

        return redirect('/pekerjaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $table_pekerjaan = DB::table('table_pekerjaan')->where('id', $id)->first();
        return view('karyawan.pekerjaan.index', ['table_pekerjaan' => $table_pekerjaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('table_pekerjaan')->where('id', $id)->delete();
        return redirect('/pekerjaan')->with('success', 'Data berhasil dihapus');
    }
}
