<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        return view('stocks.index', [
            "title" => "Data Stok Darah",
            "stocks" => Stock::filters(request(['q']))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('stocks.create', [
            "title" => "Tambah Data Stok Darah Baru",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_transfusi' => "required",
            'golongan_darah' => "required|max:5",
            'jumlah_stok' => "required|numeric",
        ]);

        Stock::create($validatedData);

        return redirect()
            ->route('stocks.index')
            ->with('success', 'Data Stok Darah baru berhasil ditambahkan.');
    }

    public function show(Stock $stock)
    {
        return view('stocks.show', [
            "title" => "Detail Data Stok Darah",
            "stock" => $stock
        ]);
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', [
            "title" => "Edit Data Stok Darah",
            "stock" => $stock,
        ]);
    }

    public function update(Request $request, Stock $stock)
    {
        $validatedData = $request->validate([
            'jenis_transfusi' => "required",
            'golongan_darah' => "required|max:5",
            'jumlah_stok' => "required|numeric",
        ]);

        $stock->update($validatedData);

        return redirect()->route('stocks.index')->with('success', 'Data Stok Darah berhasil diubah.');
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Data Stok Darah berhasil dihapus.');
    }
}
