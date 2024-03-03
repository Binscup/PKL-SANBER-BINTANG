<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class karyawanController extends Controller
{


    public function profile()
    {
        return view('karyawan.profile.index');
    }
    
    // karyawan
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.data-karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('karyawan.data-karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|max:255|unique:karyawan',

        ]);

        $karyawan = new karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->alamat = $request->alamat;
        $karyawan->telepon = $request->telepon;
        $karyawan->email = $request->email;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    public function edit(karyawan $karyawan)
    {
        return view('karyawan.data-karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index');
    }

    public function destroy(karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
