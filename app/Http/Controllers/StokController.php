<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = stok::orderBy('id', 'desc')->get();
        return view('admin\stok\addstok')->with('data', $data);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin\stok\viewstok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =[
            'jenis_transfusi' => $request->name,
            'golongan_darah' =>$request->bloodgroup,
            'jumlah_stok' =>$request->bloodgroup1
        ];

        stok::create($data);
        $data = stok::orderBy('id', 'desc')->get();
        return view('admin\stok\addstok')->with('data', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(stok $stok)
    {
        $id = request('id');
        // $data = stok::where('id', $id)->get();
        return view('admin\stok\editstok',[
            'data' => stok::where('id', $id)->get()
        ]);
        // dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestokRequest  $request
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestokRequest $request, stok $stok)
    {
        $id = request('id');
        $data =[
            'jenis_transfusi' => $request->name,
            'golongan_darah' =>$request->bloodgroup,
            'jumlah_stok' =>$request->bloodgroup1
        ];

        stok::where('id', $id)->update($data);
        return redirect()->to('addstok')->with('succes', 'Berhasil melakukan update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(stok $stok)
    {
        $id = request('id');
        // dd($id);
        
       stok::destroy($id);
        return redirect('addstok');
    }
}
