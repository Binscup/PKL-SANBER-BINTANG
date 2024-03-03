<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertifikasi = DB::table('sertifikasi')->get();

        return view('karyawan.sertifikasi.index', [
            'sertifikasi' => $sertifikasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.sertifikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $request->validate([
                'nama' => 'required',
                'jenis_sertifikasi' => 'required',
                'sertifikasi' => 'required',
            ]);

            DB::table('sertifikasi')->insert([
                'nama' => $request['nama'],
                'jenis_sertifikasi' => $request['jenis_sertifikasi'],
                'sertifikasi' => $request['sertifikasi'],
            ]);

            return redirect('/sertifikasi');
        }
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
    { {
            $sertifikasi = DB::table('sertifikasi')->where('id', $id)->first();
            return view('karyawan.sertifikasi.index', ['sertifikasi' => $sertifikasi]);
        }
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
        DB::table('sertifikasi')->where('id', $id)->delete();
        return redirect('/sertifikasi')->with('success', 'Data berhasil dihapus');
    }
}
