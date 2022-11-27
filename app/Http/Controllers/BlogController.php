<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::orderBy('id', 'desc')->get();
        return view('admin\blog\addblog')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\blog\viewblog');
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
            'NamaBlog' =>$request->name,
            'Gender' =>$request->gender,
            'Tanggal'=>$request->dob,
            'BeratBadan' =>$request->weight,
            'Golongan_darah'=>$request->bloodgroup,
            'Alamat'=>$request->address,
            'NomerTelepon' =>$request->contact,
            'Jumlah_darah' =>$request->bloodqty
            
        ];

        Blog::create($data);
        $data = Blog::orderBy('id', 'desc')->get();
        return view('admin\blog\addblog')->with('data', $data);

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
        return view('admin\blog\editblog',[
            'data' => Blog::where('id', $id)->get()
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
            'NamaBlog' =>$request->name,
            'Gender' =>$request->gender,
            'Tanggal'=>$request->dob,
            'BeratBadan' =>$request->weight,
            'Golongan_darah'=>$request->bloodgroup,
            'Alamat'=>$request->address,
            'NomerTelepon' =>$request->contact,
            'Jumlah_darah' =>$request->bloodqty
        ];

        Blog::where('id', $id)->update($data);
        return redirect()->to('blog')->with('succes', 'Berhasil melakukan update');
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
        
       Blog::destroy($id);
        return redirect('blog');
    }
}
