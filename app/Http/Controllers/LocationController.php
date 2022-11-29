<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return view('locations.index', [
            "title" => "Data Lokasi",
            "locations" => Location::filters(request(['q']))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('locations.create', [
            "title" => "Tambah Data Lokasi Baru",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lokasi' => "required",
            'alamat' => "required|max:500",
        ]);

        Location::create($validatedData);

        return redirect()
            ->route('locations.index')
            ->with('success', 'Data Lokasi baru berhasil ditambahkan.');
    }

    public function show(Location $location)
    {
        return view('locations.show', [
            "title" => "Detail Data Lokasi",
            "location" => $location
        ]);
    }

    public function edit(Location $location)
    {
        return view('locations.edit', [
            "title" => "Edit Data Lokasi",
            "location" => $location,
        ]);
    }

    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'nama_lokasi' => "required",
            'alamat' => "required|max:500",
        ]);

        $location->update($validatedData);

        return redirect()->route('locations.index')->with('success', 'Data Lokasi berhasil diubah.');
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Data Lokasi berhasil dihapus.');
    }
}
