<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolio_pendidikan = DB::table('portofolio_pendidikan')->get();

        return view('karyawan.portofolio.index', [
            'portofolio_pendidikan' => $portofolio_pendidikan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tingkat_pendidikan' => 'required',
            'institusi' => 'required',
            'jurusan' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required',
        ]);

        DB::table('portofolio_pendidikan')->insert([
            'nama' => $request['nama'],
            'tingkat_pendidikan' => $request['tingkat_pendidikan'],
            'institusi' => $request['institusi'],
            'jurusan' => $request['jurusan'],
            'tahun_mulai' => $request['tahun_mulai'],
            'tahun_selesai' => $request['tahun_selesai'],
        ]);

        return redirect('/pendidikan');
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
        $portofolio_pendidikan = DB::table('portofolio_pendidikan')->where('id', $id)->first();
        return view('karyawan.portofolio.edit', ['portofolio_pendidikan' => $portofolio_pendidikan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'tingkat_pendidikan' => 'required',
            'institusi' => 'required',
            'jurusan' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required',
        ]);

        DB::table('portofolio_pendidikan')
            ->where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'tingkat_pendidikan' => $request->tingkat_pendidikan,
                    'institusi' => $request->institusi,
                    'jurusan' => $request->jurusan,
                    'tahun_mulai' => $request->tahun_mulai,
                    'tahun_selesai' => $request->tahun_selesai,
                ],
            );

        return redirect('/pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('portofolio_pendidikan')->where('id', $id)->delete();
        return redirect('/pendidikan')->with('success', 'Data berhasil dihapus');
    }
}
