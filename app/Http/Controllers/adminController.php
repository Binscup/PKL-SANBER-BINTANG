<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gaji = DB::table('gaji')->get();
        return view('admin.user-management.index', [
            'gaji' => $gaji,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user-management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $request->validate([
                'nama' => 'required',
                'gaji_pokok' => 'required',
                'gaji_bersih' => 'required',
                'tanggal_penerimaan' => 'required',
            ]);

            DB::table('gaji')->insert([
                'nama' => $request['nama'],
                'gaji_pokok' => $request['gaji_pokok'],
                'gaji_pokok' => $request['gaji_pokok'],
                'gaji_bersih' => $request['gaji_bersih'],
                'tanggal_penerimaan' => $request['tanggal_penerimaan'],
            ]);

            return redirect('/user-management');
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
    {
        $gaji = DB::table('gaji')->where('id', $id)->first();
        return view('admin.user-management.edit', ['gaji' => $gaji]);
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
        DB::table('gaji')->where('id', $id)->delete();
        return redirect('/user-management')->with('success', 'Data berhasil dihapus');
    }
}
