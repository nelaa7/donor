<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller{
    
    public function login(){
        return view ('login');
    }

    public function index(){
        return view ('index');
    }

    public function blog(){
        return view ('blog\blog');
    }

    public function singleblog1(){
        return view ('blog\single-blog1');
    }

    public function singleblog2(){
        return view ('blog\single-blog2');
    }

    public function singleblog3(){
        return view ('blog\single-blog3');
    }

    public function singleblog4(){
        return view ('blog\single-blog4');
    }

    public function stok(){
        return view ('stok');
    }

    public function lokasi(){
        return view ('lokasi');
    }


    
}
