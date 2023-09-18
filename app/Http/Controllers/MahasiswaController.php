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

    public function create(){
        return view('mahasiswa.create');
    }
    public function store(Request $request){
        Mahasiswa::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/mahasiswa');
    }

    //edit
    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    //update
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/mahasiswa');
    }
    //destroy
    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
