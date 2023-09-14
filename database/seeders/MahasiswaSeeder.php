<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->nama = 'Rizky';
        // $mahasiswa->jurusan = 'Teknik Informatika';
        // $mahasiswa->save();
        Mahasiswa::factory(10)->create();
    }
}
