<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $mahasiswa = Mahasiswa::all()->sortByDesc('id');
        $mahasiswa1 = Mahasiswa::find(1);
        
           

        return view('mahasiswa', compact('mahasiswa', 'mahasiswa1'));
    }
}
