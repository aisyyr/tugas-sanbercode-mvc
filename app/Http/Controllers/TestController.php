<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //membuat callback di php
    public function test(){
        return view('test');
    }

    public function sapa(Request $request){
        // dd($request["nama"]); //untuk debugging
        return "welcome";
    }

    public function sapa_post(Request $request){
        //dd($request->all()); //debugging. melihat semua data yg ditulis di url
        $nama = $request["nama"];
        return "$nama";
    }
}
