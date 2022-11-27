<?php

namespace App\Http\Controllers;
use App\Models\tempat;
use Illuminate\Http\Request;

class LokasiiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tempat::orderBy('id', 'desc')->get();
        return view('admin\lokasi\viewlokasi')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\lokasi\addlokasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =[
            'nama_lokasi' => $request->name,
            'alamat' =>$request->bloodgroup,

        ];

        stok::create($data);
        $data = stok::orderBy('id', 'desc')->get();
        return view('admin\stok\addstok')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = request('id');
        // dd($id);
        
       stok::destroy($id);
        return redirect('addstok');
    }
}
