<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluarga = DB::table('keluarga')->get();

        return view('karyawan.data-keluarga.index', [
            'keluarga' => $keluarga,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.data-keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        DB::table('keluarga')->insert([
            'nama' => $request['nama'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'status' => $request['status'],
            'tanggal_lahir' => $request['tanggal_lahir'],
        ]);

        return redirect('/keluarga');
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
        $keluarga = DB::table('keluarga')->where('id', $id)->first();
        return view('karyawan.data-keluarga.edit', ['keluarga' => $keluarga]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        
        DB::table('keluarga')
            ->where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'status' => $request->status,
                    'tanggal_lahir' => $request->tanggal_lahir,
                ],
            );

        return redirect('/keluarga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('keluarga')->where('id', $id)->delete();
        return redirect('/keluarga')->with('success', 'Data berhasil dihapus');
    }
}
