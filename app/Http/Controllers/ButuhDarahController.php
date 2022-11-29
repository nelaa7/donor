<?php

namespace App\Http\Controllers;

use App\Models\ButuhDarah;
use Illuminate\Http\Request;

class ButuhDarahController extends Controller
{
    public function index()
    {
        return view('butuh-darahs.index', [
            "title" => "Data Butuh Darah",
            "butuh_darahs" => ButuhDarah::filters(request(['q', 'goldar', 'gender']))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('butuh-darahs.create', [
            "title" => "Tambah Data Butuh Darah Baru",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'gender' => 'required',
            'berat_badan' => 'required|numeric',
            'golongan_darah' => 'required|max:5',
            'alamat' => 'required|max:500',
            'no_telp' => 'required|max:15',
            'jumlah_darah' => 'required|numeric',
            'tanggal_koleksi' => 'required|date',
        ]);

        ButuhDarah::create($validatedData);

        return redirect()
            ->route('butuh-darahs.index')
            ->with('success', 'Data Butuh Darah baru berhasil ditambahkan.');
    }

    public function show(ButuhDarah $butuhDarah)
    {
        return view('butuh-darahs.show', [
            "title" => "Detail Data Butuh Darah",
            "butuh_darah" => $butuhDarah
        ]);
    }

    public function edit(ButuhDarah $butuhDarah)
    {
        return view('butuh-darahs.edit', [
            "title" => "Edit Data Butuh Darah",
            "butuh_darah" => $butuhDarah,
        ]);
    }

    public function update(Request $request, ButuhDarah $butuhDarah)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'gender' => 'required',
            'berat_badan' => 'required|numeric',
            'golongan_darah' => 'required|max:5',
            'alamat' => 'required|max:500',
            'no_telp' => 'required|max:15',
            'jumlah_darah' => 'required|numeric',
            'tanggal_koleksi' => 'required|date',
        ]);

        $butuhDarah->update($validatedData);

        return redirect()->route('butuh-darahs.index')->with('success', 'Data Butuh Darah berhasil diubah.');
    }

    public function destroy(ButuhDarah $butuhDarah)
    {
        $butuhDarah->delete();

        return redirect()->route('butuh-darahs.index')->with('success', 'Data Butuh Darah berhasil dihapus.');
    }
}
