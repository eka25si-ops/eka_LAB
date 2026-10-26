<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $dataPelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('dataPelanggan'));
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan!');
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
        $data['dataPelanggan'] = Pelanggan::findOrFail($id);
    return view('admin.pelanggan.edit', $data);

    return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan_id = $id;
    $pelanggan = Pelanggan::findOrFail($pelanggan_id);

    $pelanggan->first_name = $request->first_name;
    $pelanggan->last_name = $request->last_name;
    $pelanggan->birthday = $request->birthday;
    $pelanggan->gender = $request->gender;
    $pelanggan->email = $request->email;
    $pelanggan->phone = $request->phone;

    $pelanggan->save();
    return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $pelanggan = Pelanggan::findOrFail($id);
     $pelanggan->delete();
    return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }
}
