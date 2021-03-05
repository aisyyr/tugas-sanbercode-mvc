<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //controller untuk form register
    public function Register(){
        return view('register');
    }

    // public function Welcome2(){
    //     // dd($request["nama"]); //untuk debugging
    //     return view('welcome2');
    // }

    public function Welcome(Request $request){
        // dd($request->all()); //debugging. melihat semua data yg ditulis di url
        // $nama = $request -> nama_lengkap;
        // $alamat = $request -> alamat;

        // return view('welcome2', compact('nama','alamat'));

        $nama_depan = $request->nama_dpn;
        $nama_belakang = $request->nama_blkg;
        $jenis_kel = $request->gender;
        $kebangsaan = $request->negara;
        $bahasa = $request->bahasa;
        $bio = $request->biodata;

        return view('welcome2', compact('nama_depan', 'nama_belakang', 'jenis_kel', 'kebangsaan', 'bahasa', 'bio'));
    }
}
