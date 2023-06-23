<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Call Model
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Mahasiswa::all();
        return view('mahasiswa.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'mhsw_nim' => $request->mhsw_nim,
            'mhsw_nama' => $request->mhsw_nama,
            'mhsw_alamat' => $request->mhsw_alamat
        ]);

        return redirect('mahasiswa');
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
        $row = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'mhsw_nim' => 'bail|required',
                'mhsw_nama' => 'required'
            ],
            [
                'mhsw_nim.required' => 'NIM Wajib Di Isi',
                'mhsw_nama.required' => 'Nama Wajib Di Isi'
            ]
        );


        $row = Mahasiswa::findOrFail($id);
        $row->update([
            'mhsw_nim' => $request->mhsw_nim,
            'mhsw_nama' => $request->mhsw_nama,
            'mhsw_alamat' => $request->mhsw_alamat
        ]);

        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Mahasiswa::findOrFail($id);
        $row->delete();

        return redirect('mahasiswa');
    }
}
